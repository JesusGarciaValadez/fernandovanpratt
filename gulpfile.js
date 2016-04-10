var elixir      = require( 'laravel-elixir' ),
    gulp        = require( 'gulp' ),
    sass        = require( 'gulp-sass' ),
    watch       = require( 'gulp-watch' ),
    sourcemaps  = require( 'gulp-sourcemaps' ),
    cssnano     = require( 'gulp-cssnano' ),
    gulpif      = require( 'gulp-if' ),
    concat      = require( 'gulp-concat' ),
    uglify      = require( 'gulp-uglify' ),
    imagemin    = require( 'gulp-imagemin' ),
    argv        = require( 'yargs' ).argv,
    del         = require( 'del' ),
    browserify  = require( 'browserify' ),
    transform   = require( 'vinyl-source-stream' ),
    sync        = require( 'browser-sync' ).create(),
    config      = {
      sassDir   :   './resources/assets/sass',
      cssDir    :   './public/assets/css',
      jsDir     :   './resources/assets/js',
      imgDir    :   './public/assets/img'
    },
    isProduction;

if ( argv.prod ) {
  isProduction = true
} else {
  isProduction = false;
}

gulp.task( 'style', function ( ) {
  return gulp.src( config.sassDir + '/main.sass' )
             .pipe( sourcemaps.init( ) )
             .pipe( sass( ) )
             .on( 'error', sass.logError )
             .pipe( gulpif( isProduction, cssnano() ) )
             .pipe( gulpif( isProduction, sourcemaps.write( 'maps' ) ) )
             .pipe( gulp.dest( config.cssDir ) )
             .pipe( sync.stream() );
} );

//gulp.task( 'watch', function ( ) {
//  watch( config.cssDir + '/**/*.css', function () {
//    gulp.start( 'style' );
//  } );
//} );

gulp.task( 'concat', function ( ) {
  return gulp.src( [
    config.jsDir + '/start.js',
    config.jsDir + '/main.js',
    config.jsDir + '/end.js'
  ] )
             .pipe( concat( 'scripts.js' ) )
             .pipe( gulp.dest( config.jsDir ) );
} );

gulp.task( 'compress', [ 'concat' ], function ( ) {
  return gulp.src( config.jsDir + '/scripts.js' )
             .pipe( gulpif( isProduction, uglify() ) )
             .on( 'error', console.error.bind( console ) )
             .pipe( gulpif( isProduction, gulp.dest( config.jsDir + '/scripts.min.js') ) )
} );

gulp.task( 'imagemin', function () {
  return gulp.src( [
                config.imgDir + '/*.{png,jpg,jpeg}',
                '!' + config.imgDir + '/*.{svg,gif}'
              ] )
             .pipe( imagemin() )
             .pipe( gulp.dest( config.imgDir + '/') );
} );

gulp.task( 'cleanup', function ( ) {
  del( config.cssDir + '/maps/*' )
  del( config.cssDir + '/maps/' )
} );

gulp.task( 'browserify', function ( ) {
  return browserify( config.jsDir + '/src/main.js')
                   .bundle() // Concat all js packages and putting into into the compiled js file
                   .pipe( transform( 'bundle.js') ) // Obtain the output of browserify and putting into a bundle.js file
                   .pipe( gulp.dest( config.jsDir + '/min/' ) );
} );

gulp.task( 'js-sync', [ 'compress' ], function ( ) {
  sync.reload();
} );

gulp.task( 'browsersync', [ 'compress', 'style' ], function ( ) {
  sync.init( {
    proxy: "local.fernandovanpratt.com",
    browser: [
      "firefox",
      "google chrome"
    ]
    /*&server: {
      baseDir: "./"
    }*/
  } );

  gulp.watch( './*.{html,php}' ).on( 'change', sync.reload );
  gulp.watch( config.sassDir + '/**/*.sass', [ 'style' ] );
  gulp.watch( config.jsDir + '/*.js', [ 'js-sync' ] );
} );

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir( function ( mix ) {
    mix.sass( 'app.scss' );
} );


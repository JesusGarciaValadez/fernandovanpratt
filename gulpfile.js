var elixir      = require( 'laravel-elixir' ),
    gulp        = require( 'gulp' ),
    sass        = require( 'gulp-sass' ),
    watch       = require( 'gulp-watch' ),
    sourcemaps  = require( 'gulp-sourcemaps' ),
    cssnano     = require( 'gulp-cssnano' ),
    gulpif      = require( 'gulp-if' ),
    concat      = require( 'gulp-concat' ),
    uglify      = require( 'gulp-uglify' ),
    argv        = require( 'yargs' ).argv,
    config      = {
      sassDir   :   './resources/assets/sass',
      cssDir    :   './public/assets/css',
      jsDir     :   './resources/assets/js'
    },
    isProduction;

if ( argv.prod ) {
  isProduction = true;
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
      .pipe( gulp.dest( config.cssDir ) );
} );

gulp.task( 'watch', function ( ) {
  watch( config.cssDir + '/**/*.css', function () {
    gulp.start( 'style' );
  } );
} );

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


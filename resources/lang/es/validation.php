<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute débe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute débe ser una fecha después de :date.',
    'alpha'                => 'El :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El :attribute sólo puede contenes letras, números, y dashes.',
    'alpha_num'            => 'El :attribute sólo puede contenes letras y números.',
    'array'                => 'El :attribute debe ser un array.',
    'before'               => 'El :attribute débe ser una fecha antes de :date.',
    'between'              => [
        'numeric' => 'El :attribute débe estar entre :min y :max.',
        'file'    => 'El :attribute débe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute débe estar entre :min y :max caractéres.',
        'array'   => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute débe ser true o false.',
    'confirmed'            => 'El :attribute confirmation no coincide.',
    'date'                 => 'El :attribute no es una fécha valida.',
    'date_format'          => 'El :attribute no coincide el formato :format.',
    'different'            => 'El :attribute y :other débe ser different.',
    'digits'               => 'El :attribute débe ser :digits dígitos.',
    'digits_between'       => 'El :attribute débe estar entre :min y :max dígitos.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute débe ser una dirección de email válida.',
    'exists'               => 'El :attribute seleccionado es inválido.',
    'filled'               => 'El campo :attribute es requerido.',
    'image'                => 'El :attribute débe ser una imagen.',
    'in'                   => 'El selected :attribute es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute débe ser an entéro.',
    'ip'                   => 'El :attribute débe ser una dirección IP válida.',
    'json'                 => 'El :attribute débe ser una cadéna JSON válida.',
    'max'                  => [
        'numeric' => 'El :attribute no debe ser más grande de :max.',
        'file'    => 'El :attribute no debe ser más grande de :max kilobytes.',
        'string'  => 'El :attribute no debe ser más grande de :max caractéres.',
        'array'   => 'El :attribute no debe tener más de :max items.',
    ],
    'mimes'                => 'El :attribute débe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute débe ser al menos :min.',
        'file'    => 'El :attribute débe ser al menos :min kilobytes.',
        'string'  => 'El :attribute débe ser al menos :min caractéres.',
        'array'   => 'El :attribute débe tener al menos :min items.',
    ],
    'not_in'               => 'El selected :attribute es inválido.',
    'numeric'              => 'El :attribute débe ser a número.',
    'present'              => 'El campo :attribute débe ser present.',
    'regex'                => 'El :attribute formato es inválido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuándo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a ménos qué :other esté en :values.',
    'required_with'        => 'El campo :attribute es requerido cuándo :values esté presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuándo :values esté presente.',
    'required_without'     => 'El campo :attribute es requerido cuándo :values no esté presente.',
    'required_without_all' => 'El campo :attribute es requerido cuándo ningúno de los :values estén presente.',
    'same'                 => 'El :attribute y :other dében coincidir.',
    'size'                 => [
        'numeric' => 'El :attribute débe ser :size.',
        'file'    => 'El :attribute débe ser :size kilobytes.',
        'string'  => 'El :attribute débe ser :size caractéres.',
        'array'   => 'El :attribute débe contener :size items.',
    ],
    'string'               => 'El :attribute débe ser una cadena.',
    'timezone'             => 'El :attribute débe ser una zona válida.',
    'unique'               => 'El :attribute ya ha sido tomado.',
    'url'                  => 'El :attribute formato es inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name El lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | El following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-dirección Mail instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

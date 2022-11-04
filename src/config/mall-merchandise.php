<?php

/**
 * @license MIT
 * @package WalkerChiu\MallMerchandise
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Switch association of package to On or Off
    |--------------------------------------------------------------------------
    |
    | When you set someone On:
    |     1. Its Foreign Key Constraints will be created together with data table.
    |     2. You may need to change the corresponding class settings in the config/wk-core.php.
    |
    | When you set someone Off:
    |     1. Association check will not be performed on FormRequest and Observer.
    |     2. Cleaner and Initializer will not handle tasks related to it.
    |
    | Note:
    |     The association still exists, which means you can still access related objects.
    |
    */
    'onoff' => [
        'core-lang_core' => 0,

        'mall-cart'      => 0,
        'mall-order'     => 0,
        'mall-wishlist'  => 0,
        'morph-category' => 0,
        'morph-comment'  => 0,
        'morph-image'    => 1,
        'morph-tag'      => 1,
        'rule'           => 0,
        'rule-hit'       => 0,
        'site-mall'      => 0,
    ],

    /*
    |--------------------------------------------------------------------------
    | Lang Log
    |--------------------------------------------------------------------------
    |
    | 0: Don't keep data.
    | 1: Keep data.
    |
    */
    'lang_log' => 0,

    /*
    |--------------------------------------------------------------------------
    | Output Data Format from Repository
    |--------------------------------------------------------------------------
    |
    | null:                  Query.
    | query:                 Query.
    | collection:            Query collection.
    | collection_pagination: Query collection with pagination.
    | array:                 Array.
    | array_pagination:      Array with pagination.
    |
    */
    'output_format' => null,

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    */
    'pagination' => [
        'pageName' => 'page',
        'perPage'  => 15
    ],

    /*
    |--------------------------------------------------------------------------
    | Soft Delete
    |--------------------------------------------------------------------------
    |
    | 0: Disable.
    | 1: Enable.
    |
    */
    'soft_delete' => 1,

    /*
    |--------------------------------------------------------------------------
    | Command
    |--------------------------------------------------------------------------
    |
    | Location of Commands.
    |
    */
    'command' => [
        'cleaner' => 'WalkerChiu\MallMerchandise\Console\Commands\MallMerchandiseCleaner'
    ],

    /*
    |--------------------------------------------------------------------------
    | Unsigned Decimal
    |--------------------------------------------------------------------------
    | A precision (total digits) and scale (decimal digits).
    |--------------------------------------------------------------------------
    |
    */
    'unsigned_decimal' => [
        'precision' => 20,
        'scale'     => 2
    ],
];

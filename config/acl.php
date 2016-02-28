<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    */
    'roles'         => [
        'entity' => LaravelDoctrineExample\Entities\Role::class,
    ],
    /*
    |--------------------------------------------------------------------------
    | Permissions
    |--------------------------------------------------------------------------
    |
    | Available drivers: config|doctrine
    | When set to config, add the permission names to list
    |
    */
    'permissions'   => [
        'driver' => 'doctrine',
        'entity' => LaravelDoctrineExample\Entities\Permission::class,
        'list'   => [],
    ],
    /*
    |--------------------------------------------------------------------------
    | Organisations
    |--------------------------------------------------------------------------
    */
    'organisations' => [
        'entity' => App\Organisation::class,
    ],
];
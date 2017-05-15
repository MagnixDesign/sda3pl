<?php

return [
/*
* Provider .
*/
'provider'  => 'lavalite',

/*
* Package .
*/
'package'   => 'user',

/*
* Modules .
*/
'modules'   => ['user', 
'role', 
'permission'],

'user' => [
                    'Name'          => 'User',
                    'name'          => 'user',
                    'table'         => 'users',
                    'model'         => 'Lavalite\User\Models\User',
                    'image'         => [
                        'xs'        => ['width' => '60',         'height' => '45'],
                        'sm'        => ['width' => '100',        'height' => '75'],
                        'md'        => ['width' => '460',        'height' => '345'],
                        'lg'        => ['width' => '800',        'height' => '600'],
                        'xl'        => ['width' => '1000',       'height' => '750'],
                        ],

                    'fillable'          => ['user_id', 'reporting_to',  'name',  'email',  'password',  'active',  'remember_token',  'sex',  'dob',  'designation',  'mobile',  'phone',  'address',  'street',  'city',  'district',  'state',  'country',  'photo',  'web',  'social_login'],
                    'listfields'        => ['id', 'reporting_to',  'name',  'email',  'password',  'active',  'remember_token',  'sex',  'dob',  'designation',  'mobile',  'phone',  'address',  'street',  'city',  'district',  'state',  'country',  'photo',  'web',  'social_login'],
                    'translatable'      => ['reporting_to',  'name',  'email',  'password',  'active',  'remember_token',  'sex',  'dob',  'designation',  'mobile',  'phone',  'address',  'street',  'city',  'district',  'state',  'country',  'photo',  'web',  'social_login'],

                    'upload-folder'     => '/uploads/user/user',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
'role' => [
                    'Name'          => 'Role',
                    'name'          => 'role',
                    'table'         => 'roles',
                    'model'         => 'Lavalite\User\Models\Role',
                    'image'         => [
                        'xs'        => ['width' => '60',         'height' => '45'],
                        'sm'        => ['width' => '100',        'height' => '75'],
                        'md'        => ['width' => '460',        'height' => '345'],
                        'lg'        => ['width' => '800',        'height' => '600'],
                        'xl'        => ['width' => '1000',       'height' => '750'],
                        ],

                    'fillable'          => ['user_id', 'name'],
                    'listfields'        => ['id', 'name'],
                    'translatable'      => ['name'],

                    'upload-folder'     => '/uploads/user/role',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
'permission' => [
                    'Name'          => 'Permission',
                    'name'          => 'permission',
                    'table'         => 'permissions',
                    'model'         => 'Lavalite\User\Models\Permission',
                    'image'         => [
                        'xs'        => ['width' => '60',         'height' => '45'],
                        'sm'        => ['width' => '100',        'height' => '75'],
                        'md'        => ['width' => '460',        'height' => '345'],
                        'lg'        => ['width' => '800',        'height' => '600'],
                        'xl'        => ['width' => '1000',       'height' => '750'],
                        ],

                    'fillable'          => ['user_id', 'name',  'readable_name'],
                    'listfields'        => ['id', 'name',  'readable_name'],
                    'translatable'      => ['name',  'readable_name'],

                    'upload-folder'     => '/uploads/user/permission',
                    'uploadable'        => [
                                                'single'    => [],
                                                'multiple'  => [],
                                            ],
                ],
];

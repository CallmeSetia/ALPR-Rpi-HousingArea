<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Penghuni' => [
            'tamu' => 'c,r,u,d',
        ],
        'Penjaga' => [
            'sensor' => 'c,r,u,d',
            'control' => 'c,r,u,d',
            'rumah' => 'c,r,u,d',
            'user' => 'c,r,u,d',
            'tamu' => 'c,r,u,d',
            'plat_nomor' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];

<?php
  return [

        'multi' => [

            'admin' => [
                'driver' => 'database',
                'table'  => 'admins',
            ],

            'member' => [
                'driver' => 'database',
                'table' => 'members',
                'email' => 'client.emails.password',
            ]

        ],



        'password' => [
                'email' => 'emails.password',
                'table' => 'password_resets',
                'expire' => 60,
            ],

    ];
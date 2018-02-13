<?php

use Illuminate\Database\Seeder;
use App\User ; 
class Users extends Seeder
{
    public function run()
    {
    	User::create([ 
    		'name' => 'Abrham Bas',
    		'email' => 'abrham.bas01@gmail.com',
    		'password' => bcrypt ( 'pass123' ),
    		'role_id' => 1,
    		'status' => 1 
    		]);

        User::create([ 
            'name' => 'Jerc Macasero',
            'email' => 'jercmacasero@gmail.com',
            'password' => bcrypt ( 'pass123' ),
            'role_id' => 1,
            'status' => 1 
            ]);

        User::create([ 
            'name' => 'Earl Tagud',
            'email' => 'tagudearl@gmail.com',
            'password' => bcrypt ( 'pass123' ),
            'role_id' => 1,
            'status' => 1 
            ]);
    }
}

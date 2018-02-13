<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');

      DB::table('roles')->truncate();
      
      DB::table('roles')->insert(
        array(
          array('role_title'=>'Administrator','task' => 'Adds staffs to site'),
          array('role_title'=>'Social Worker ','task' => 'Facilitates the registration and orders of every barangays'),
          array('role_title'=>'Courier','task' => 'delivers the medicines in to houses'),));
      
    }
  }

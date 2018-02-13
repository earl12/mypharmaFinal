<?php

use Illuminate\Database\Seeder;
use App\Barangay ; 

class Barangays extends Seeder
{
    /*
*     * Run the database seeds.
     *
     * @return void
     */
public function run()
{
 DB::statement('SET FOREIGN_KEY_CHECKS=0');
 DB::table('barangays')->truncate();


 Barangay::create ( [ 
  'name' => 'Apas',
  'lat' => 10.337243,
  'lng' => 123.904790,
  'monthly_budget' => 1000000.00 ,
] );


 Barangay::create ( [ 
  'name' => 'Bacayan',
  'lat' => 10.386846,
  'lng' => 123.921393,
  'monthly_budget' => 1000000.00 ,
]);

 Barangay::create ( [ 
  'name' => 'Banilad',
  'lat' => 10.347796,
  'lng' => 123.913114,
  'monthly_budget' => 1000000.00 ,
]);


 Barangay::create ( [ 
  'name' => 'Busay',
  'lat' => 10.345970,
  'lng' => 123.893739,
  'monthly_budget' => 4500000.00 ,
]);


 Barangay::create ( [ 
  'name' => 'Capitol Site',
  'lat' => 10.324662,
  'lng' => 123.890242,
  'monthly_budget' => 3000000.00 ,
]);

}
}

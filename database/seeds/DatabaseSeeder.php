<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $this->call(Roles::class);
    	// $this->call(Barangays::class); 
    //  $this->call(Cities::class); 
    	// $this->call(Users::class);
    	// $this->call(ClassesforMedicines::class);
     // $this->call(Medicines::class);
    //    $this->call(MedicineDosages::class);
    //     $this->call(SeniorCitizenNumbers::class) ; 
        $this->call(StatusesSeeder::class) ;    
        $this->call(DeliveryStatusCodesSeeder::class) ;    


    }
}

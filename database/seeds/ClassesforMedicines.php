<?php
use Illuminate\Database\Seeder;
use App\MedicineClass ; 
class ClassesforMedicines extends Seeder
{

  public function run()
  {
    // DB::table('medicine_classes')->truncate();

    MedicineClass::create([
      'treatment_of'   => 'Heart Disease & High Blood Pressure',
      'some_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quia repudiandae, fugiat accusantium, nisi pariatur.'
    ]);

    MedicineClass::create([
      'treatment_of'   => 'Diabetes',
      'some_text' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, quis aliquid'

    ]);

    MedicineClass::create([
      'treatment_of'   => "High Cholesterol",
      'some_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa placeat laudantium facilis libero consequuntur debitis saepe alias, illum quibusdam nemo!'

    ]);	
  }
}

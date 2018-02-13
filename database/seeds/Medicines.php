<?php

use Illuminate\Database\Seeder;
use App\Medicine ; 
class Medicines extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Medicine::create([
    		'generic_name'   => 'Captopril',
    		'drug_description' =>'Captopril is used to treat high blood pressure (hypertension), congestive heart failure, kidney problems caused by diabetes, and to improve survival after a heart attack.',
    		'medicine_class_id' => 2
    		]);

    	Medicine::create([
    		'generic_name'   => 'Enalapril ',
    		'medicine_class_id' => 2, 
    		'drug_description' =>'Enalapril is used to treat high blood pressure, heart failure, and asymptomatic left ventricular dysfunction..'
    		]);

    	Medicine::create([
    		'generic_name'   => "Candesartan Cilexetil ",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);

    	Medicine::create([
    		'generic_name'   => "Losartan ",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);


    	Medicine::create([
    		'generic_name'   => "Irbesartan + Hydrochlorothiazide",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Losartan + Hydrochlorothiazide",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);

        
    	Medicine::create([
    		'generic_name'   => "Irbesartan",
    		'medicine_class_id' => 2, 
    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Telmisartan + Hydrochlorothiazide",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);

    	Medicine::create([
    		'generic_name'   => "Valsartan + Hydrochlorothiazide",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Valsartan ",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Atenolol ",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Carvedilol",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Metoprolol (as Tartrate)",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);
    	Medicine::create([
    		'generic_name'   => "Propranolol",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);

    	Medicine::create([
    		'generic_name'   => "Timolol  ",
    		'medicine_class_id' => 2, 

    		'drug_description'  => "is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers "
    		]);


    	Medicine::create([
    		'generic_name'   => "Acarbose",
    		'medicine_class_id' => 3,
    		'drug_description'  => "is a glucosidase inhibitor. It works by slowing down the enzyme that turns carbohydrates into glucose."
    		]);

    	Medicine::create([
    		'generic_name'   => "Glipizide",
    		'medicine_class_id' => 3, 
    		'drug_description'  => "is an oral diabetes medicine that helps control blood sugar levels by helping your pancreas produce insulin. Glipizide is used together with diet and exercise to treat type 2 diabetes "
    		]);

    	Medicine::create([
    		'generic_name'   => "Metformin Hydrochloride",
    		'medicine_class_id' => 3,
    		'drug_description'  => "Metformin is an oral diabetes medicine that helps control blood sugar levels. "
    		]);

    	Medicine::create([
    		'generic_name'   => "Simvastatin ",
    		'medicine_class_id' => 4,
    		'drug_description'  => "It reduces levels of bad cholesterol (low-density lipoprotein, or LDL) and triglycerides in the blood, while increasing levels of good cholesterol (high-density lipoprotein, or HDL). "
    		]);
    	
    }
}
    
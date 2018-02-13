<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\OrderRequest;

use App\Http\Requests\ElderlyInfoRequest;

use App\Http\Requests\ElderlyMedicalInfoRequest;

use \Cart as Cart;

use Validator;

use Illuminate\Support\Facades\Input;

use App\User;

use App\Medicine;

use App\Dosage;

use App\Order;

use App\Medexample;

use App\Seniorinfo;

use App\SeniorMedicine;

use App\ElderlyInfo;

use App\ElderlyMedicalInfo;

use App\ElderlyMedicineInfo;

use Carbon\Carbon;

use DB;

class SocialWorkerController extends Controller
{
  public function __construct(Order $order, ElderlyInfo $elderly_info, ElderlyMedicalInfo $elderly_medical_info, ElderlyMedicineInfo $elderly_medicine_info, SeniorInfo $seniorinfo, SeniorMedicine $seniormedicine)
  {

    $this->order= $order;
    $this->elderly_info= $elderly_info;
    $this->elderly_medical_info= $elderly_medical_info;
    $this->elderly_medicine_info= $elderly_medical_info;
    $this->seniorinfo = $seniorinfo;
    $this->seniormedicine = $seniormedicine;
    
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $seniorinfos = SeniorInfo::all(['id', 'scn', 'first_name', 'last_name', 'gender', 'telephone']);
      return view('socialworker.index', compact('seniorinfos'));
    }

    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $elderly_info->delete();
    //     return redirect()->route('socialworker.index')->with('message', 'Elderly removed');
    // }

    public function register()
    {
        //$patients = Patient::all(['id', 'first_name', 'scn', 'gender', 'description', 'city', 'barangay']);
      // $medicines = Medicine::all(['id', 'name']);
      $medicines = Medicine::lists('name', 'id');
      return view('socialworker.register', compact('medicines'));
    }

    public function showMedicine($slug)
    {
      $medicine = Medicine::where('slug', $slug)->firstOrFail();
      $interested = Medicine::where('slug', '!=', $slug)->get()->random(4);

      return view('socialworker.medicine')->with(['medicine' => $medicine, 'interested' => $interested]);
    }

    public function addMedicine(Request $request)
    {

      $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
        return $cartItem->id === $request->id;
      });

      if (!$duplicates->isEmpty()) {
        return redirect()->route('getelder')->withSuccessMessage('Medicine is already in your cart!');
      }

      Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Medicine');
      return redirect()->route('medicinelist')->withSuccessMessage('Item was added to your cart!');
    }

    public function medicineList()
    {
      $medicines = DB::table("medicines")->lists("name","id");
      return view('socialworker.medicinelist',compact('medicines'));
    }

    public function findDosage($id)
    {
      $dosages = DB::table("dosages")
      ->where("medicine_id",$id)
      ->lists("dosage_name","id");
      return json_encode($dosages);
    }

    public function myform()
    {
      $medicines = DB::table("medicines")->lists("name","id");
      return view('myform',compact('medicines'));
    }

    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
      $dosages = DB::table("dosages")
      ->where("medicine_id",$id)
      ->lists("dosage_name","id");
      return json_encode($dosages);
    }

    


    // public function storeOrder(OrderRequest $request){
    //   $order = $this->order;
    //   $order->user_id = $request['user_id'];
    //   //$order->medicine_id = $request['medicine_id'];
    //   $order->totalPrice = $request['totalPrice'];
    //   $order->save();
    //   return redirect()->route('dashboard')->with('message', 'Order Sent Successfully');
    // }

    public function storeSeniorInfo(Request $request){
      $seniorinfo = $this->seniorinfo;
      $seniorinfo->scn = $request['scn'];
      $seniorinfo->first_name = $request['first_name'];
      $seniorinfo->middle_name = $request['middle_name'];
      $seniorinfo->last_name = $request['last_name'];  
      $seniorinfo->gender = $request['gender'];
      $seniorinfo->dob = $request['dob'];
      $seniorinfo->barangay_id = $request['barangay_id'];
      $seniorinfo->address = $request['address'];
      $seniorinfo->telephone = $request['telephone'];
      $seniorinfo->mobile = $request['mobile'];
      $seniorinfo->budget = $request['budget'];
      $seniorinfo->lat = $request['lat'];
      $seniorinfo->lng = $request['lng'];
      $seniorinfo->genetic_condition = $request['genetic_condition'];
      $seniorinfo->current_symptom = $request['current_symptom'];
      $seniorinfo->taking_medication = $request['taking_medication'];
      $seniorinfo->medication_allergies = $request['medication_allergies'];
      $seniorinfo->tobacco_user = $request['tobacco_user'];
      $seniorinfo->illegaldrug_user = $request['illegaldrug_user'];
      if ($seniorinfo->save()){
        $id = $seniorinfo->id;
        $info = array( 'seniorinfo_id'=>$id,
          'dosage_id'=>$request['dosage1'],
          'qty'=>$request['qty1'],
          'dailyfrequency'=>$request['dailyfrequency1'],
          // 'mfrequency'=>$request['mfrequency1'],
          'status' => '1');
        // DB::table('seniormedicines')->insert($info);
        DB::table('dosage_seniorinfo')->insert($info);
        $info = array( 'seniorinfo_id'=>$id,
          'dosage_id'=>$request['dosage2'],
          'qty'=>$request['qty2'],
          'dailyfrequency'=>$request['dailyfrequency2'],
          // 'mfrequency'=>$request['mfrequency2'],
          'status' => '1');
        // DB::table('seniormedicines')->insert($info);
        DB::table('dosage_seniorinfo')->insert($info);
        // $info = array( 'seniorinfo_id'=>$id,
        //   'dosage_id'=>$request['dosage3'],
        //   'qty'=>$request['qty3'],
        //   'dfrequency'=>$request['dfrequency3'],
        //   'mfrequency'=>$request['mfrequency3'],
        //   'status' => $request['status']);
        // DB::table('dosage_seniorinfo')->insert($info);
        // $info = array( 'seniorinfo_id'=>$id,
        //   'dosage_id'=>$request['dosage4'],
        //   'qty'=>$request['qty4'],
        //   'dfrequency'=>$request['dfrequency4'],
        //   'mfrequency'=>$request['mfrequency4'],
        //   'status' => $request['status']);
        // DB::table('dosage_seniorinfo')->insert($info);
        // $info = array( 'seniorinfo_id'=>$id,
        //   'dosage_id'=>$request['dosage5'],
        //   'qty'=>$request['qty5'],
        //   'dfrequency'=>$request['dfrequency5'],
        //   'mfrequency'=>$request['mfrequency5'],
        //   'status' => $request['status']);
        // DB::table('dosage_seniorinfo')->insert($info);
      }
      // var_dump($seniorinfo);
      return redirect()->route('dashboard')->with('message', 'New Senior Citizen Added');
    }


    public function getSeniorProfile($id)
    {
      $seniorinfos = SeniorInfo::find($id);
      foreach ($seniorinfos->dosages as $dosage) {
        $dosage->pivot->dosage_seniorinfo;
      }
      // $dosages = Dosage::lists('dosage_name', 'id');
      //dd($elderly_infos)
      // dd($seniorinfos);
      return view('socialworker.senior-profile', ['seniorinfos' => $seniorinfos]);
    }

    public function storeParcelInfo(Request $request)
    {
      $parcel = $this->parcel;
    }


    public function updateElderlyProfile(ElderlyInfoRequest $request, ElderlyInfo $elderly_info)
    {
      $elderly_info->update($request->all());
      return redirect()->route('socialworker.elderly-profile')->with('message', 'Elderly Information has been updated');
    }

    public function deleteElderlyProfile($id)
    {
      $seniorinfos = SeniorInfo::find($id);
      $seniorinfos->delete();
      return redirect()->route('dashboard')->with('message', 'Senior has been removed');
    }


    public function test(Request $request)
    {
        $data = $request->all(); // This will get all the request data.
        dd($data); // This will dump and die
      }

      public function addMedicineInfo(Request $request)
      {
        $elderly_medicine_infos = new ElderlyMedicineInfo;
        foreach ($request as $key => $v) {
          $data = array('medicine_id' => $v, );
        }
        dd($data);
      }
    }
  //   public function editPatientsProfile($id) {
  //   $dosage = $this->MedicineRepository->getDosageId($id);
  // }

  //   public function updatePatientsProfile(PatientRequest $request, $id) {
  //   $dosageWasModified = $this->MedicineRepository->updateDosage($request->all(), $id);

  //   if ($dosageWasModified) {
  //     flash('Dosage information was updated', 'success');
  //     return redirect()->route('medicineList');
  //   } else {
  //     flash('Dosage information was not updated', 'danger');
  //     return redirect()->route('medicineList');
  //   }
  // }
    // public function editPatientsProfile($id)
    // {
    //     $patient = Patient::findorFail($id);
    //     return view('patient.user-profile', compact('patients'));
    // }

    // public function updatePatientsProfile(PatientRequest $request, Patient $patient)
    // {
    //     $patient->update($request->all());
    //     return redirect()->route('client.index')->with('message', 'Information has been updated');
    // }

<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Core\MedicineEntry;

use App\Server\Entry\UserEntry;

use App\Core\Traits\ShowsViews;

use App\Dosage;

use App\User;

use App\Http\Requests\StoreUserRequest;

use App\Http\Requests\DosageRequest;

use Image;

use Illuminate\Http\File;

use Illuminate\Support\Facades\Storage;

use App\Courier ; 

use App\Filters\RoleFilters ; 

use App\Filters\UserFilters ; 

class AdministratorController extends Controller {

    use ShowsViews;

    public function storeDosage(DosageRequest $request, MedicineEntry $entry) {

        if($request->hasFile('photo')) { 

            $entry->storeData($request);

            flash()->overlay('Medicine Dosage was successfuly added to the inventory', 'Successful');

            return redirect()->route('medicines');

        }
        else {
            return redirect()->back() ; 
        }
    } 

    public function basePage() {
        return view('layouts.admin');
    } 

    public function getSocialWorkers(UserFilters $filterUser){
        $social_workers =  $filterUser->social_workers();        
        return $social_workers;
    }




    public function storeUser(StoreUserRequest $request, User $user) {


        // return response()->json($request);

        $userdata = $user->create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'barangay_id' => request('barangay_id') , 
            'role_id' => request('role_id') ,
            'status'=> request('status')
        ]);

        $userdata->save() ; 

        // if(request('role_id') == 3){
        //     $user->courier()->create([
        //         'user_id' => request('id')
        //     ]);     
        // }

        return response()->json($userdata);


    }


    public function updateDosage(MedicineEntry $entry, Request $request, Dosage $dosage) {



    }

    public function updateUser(Request $request, Dosage $dosage, User $user ) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4', 
            'role_id' => 'required|numeric',
            'barangay_id' => 'numeric',
            'status' => 'required'
        ]);

        if ($request->ajax()){
            $user = User::findOrfail($request->get('id'));
            $data = $user->update([
               'name' => $request->name  , 
               'email' => $request->email ,
               'password' => $request->password, 
               'status' => $request->status , 
               'barangay_id' => $request->barangay_id , 
               'role_id' => $request->role_id
           ]) ; 
            return response()->json($data); 

        }


    }

    public function storeBarangay(Request $request) {   

        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        return response()->json($request,200);

    }

    public function deleteUser(Request $request, User $user){
        $id = $request['id'];
        $user = User::findOrfail($id);
        $user->delete();
        return response()->json($user);
    }

    public function deleteDosage(Request $request, Dosage $dosage) {
        $id = $request['id'];
        $dosage = Dosage::findOrfail($id);

        $filePath = public_path('medicine/images/' . $dosage->file_name);
        $thumbPath = public_path('medicine/images/thumbs/' . $dosage->file_name);

        if (file_exists($filePath)) {   
            unlink($filePath);
            unlink($thumbPath);
            $dosage->delete();
        } else {
            $dosage->delete();
        }
        return response()->json($dosage);

    }

    public function emailduplicate(Request $request) {
        $email = $request['email'];
        $query = User::where('email', $email)->count();
        return response()->json($query);
    }

    public function updateUserProfile(Request $request, UserInformation $usersinfo) {

    }

    public function checkParcel() {

    }





}

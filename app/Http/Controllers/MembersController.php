<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Core\UserEntry;


use App\User;

use Image;


use Illuminate\Http\File;   

use Illuminate\Support\Facades\Storage;

use App\Courier ; 

use App\Http\Requests\StoreUserRequest;

use App\Filters\RoleFilters ; 

use App\Filters\UserFilters ; 

use App\Role ; 

use App\Barangay ; 

use App\Core\Traits\ManagesUploads;


class MembersController extends Controller
{

    use ManagesUploads ; 

    public function users() {  

    }


// Gets The Phone Numbers of The Senior Citizens who will receive deliveries.
    public function PhoneNumbersForTomorrow()
    {

    }

    public function index(){
        $members = User::activeusers()->where('status',1)->get();
        return view('admin.members.index',compact('members')) ; 
    }

    public function emailduplicate(Request $request) {
        $email = $request['email'];
        $query = User::where('email', $email)->count();
        return response()->json($query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     $roles = Role::exceptAdmin()->get();

     $barangays = Barangay::select('id','name' )->get();

     return view('admin.members.create',compact('roles','barangays'));

 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        if ( request()->role_id == 2 && request()->barangay_id == null) {     

            return redirect()->back()->withErrors(['error' => [
                'Please assign a barangay to a social worker '
            ]]) ;
            
        }

        else {
            $user = User::create(['name' => request()->name,
                'email' =>  request()->email,
                'password' => bcrypt(request()->password),
                'barangay_id' =>  $request->barangay_id , 
                'role_id' =>  $request->role_id ,
                'status'=>  $request->status]);

            if (request()->wantsJson()) { 
                return response($user,201);
            }
            return redirect()->back()->with('flash','That user was added') ; 
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $member = User::with('info')->find($id);

        // $totalDeliveries = Parcel::where('')


        return view('admin.members.show')->withMember($member);
        // $member = User::with(['info','barangay','role'])->find($id);

        // dd($members);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        // dd($user);
        return view('admin.members.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, StoreUserRequest $request)
    {
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}

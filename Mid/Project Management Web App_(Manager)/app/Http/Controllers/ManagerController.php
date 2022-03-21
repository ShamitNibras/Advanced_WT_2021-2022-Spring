<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\manager;
use App\Models\task;
use App\Models\staff;
use App\Http\Requests\StoremanagerRequest;
use App\Http\Requests\UpdatemanagerRequest;
use Session;
use Illuminate\Support\Facades\Cookie;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremanagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremanagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemanagerRequest  $request
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemanagerRequest $request, manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(manager $manager)
    {
        //
    }
    public function login(){
        return view ("login");
    }
    public function loginSubmit(Request $request){
       
        $validate=$request->validate([
            'email'=>'required',
            'password'=>'required',
           
        ],
        [
            'email.required'=>'Please put your email',
            'password.required'=>'Please put your password',
           
    
        ]);

        $manager=manager::where("email",$request->email)
        ->where("password",$request->password)
        ->first();
        if ($manager){
           
            $request->session()->put("managerid",$manager->id);


            if ($request->remember) {
                setcookie('remember',$request->email, time()+36000);
                Cookie::queue('email',$manager->email."This is for testing",time()+60);
            }else{
                setcookie('remember',"");
                Cookie::queue('name',"");
            }




            return redirect()->route("dashboard");
        }
        return back();
     }

     public function dashboard(){
        return view ("pages.manager.dashboard");
    
     }

     public function registration(){
        return view ("pages.manager.registration");
     }

     public function registrationSubmit(Request $request){
        
        $validate=$request->validate([
            'name'=>'required|min:3|max:100',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address'=>'required',
            'password'=>'required'
        ],

        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 3 charcters',
            'email'=>"Put your mail",
            'phone.required'=>"put your phone",
            'address.required'=>"put your address",
            'password.required'=>"put your password",

        ]
    );
       $manager=new manager();
       $manager->name =$request->name;
       $manager->email=$request->email;
       $manager->phone =$request->phone;
       $manager->address=$request->address;
       $manager->password=$request->password;
       $manager->save();
    
       return redirect()->route('registration');
     }

     public function logout(){
        session()->forget('managerid');
        return view ("login");
    }

    public function profile(){
        $id=Session::get("managerid");
        $t = manager::where('id',$id)->first();
        // return $t;
        return $t->managerProfileDetail();
        
    }

    public function updateProfile(){
       
        $id=Session::get("managerid");
        $user = manager::find($id);
        
        return view ("pages.manager.updateProfile")->with('user', $user);
    }

    public function updateProfileSubmit(Request $request){
        $user1 = manager::where('id', $request->id)->first();

         $user1->name = $request->name;
         $user1->email= $request->email;
         $user1->phone = $request->phone;
         $user1->address = $request->address;
         $user1->password = $request->password;
         $user1->save();

         return redirect()->route('dashboard');
     
     }

     public function seeTask(){
        //  echo "hi";
        $tasks = task::all();
        // return $task;
        return view('pages.manager.task')->with('tasks', $tasks);
     }

     public function seeStaff(){
        //  echo "hi";
        $staffs = staff::all();
        // return $staffs;
        return view('pages.manager.staff')->with('staffs', $staffs);
     }

     public function assigned(Request $request){
         $name=$request->name;
         $id=$request->id;
         $eid=$request->eid;
        //  return $eid;
        //  $id=Session::get("taskid");

        $tasks = task::find($id);
        //  return $id;
         $tasks->status="assigned";
         $tasks->assignedto= $name;
         $tasks->save();

        $tasks = staff::find($eid);
        //  return $id;
         $tasks->status="busy";
         
         $tasks->save();

         return redirect()->route('dashboard');


     }
}

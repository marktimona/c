<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
  
      return view('users.create');
     }
    public function list()

    {
$users=User::all();
return view('users.list',compact('users'));

    }

    public function insertUser(Request $request)
    {
      $this->validate($request,['name','email'=>'unique:users']);
        $user=new User();
        $user->name=ucwords($request->name);
        $user->email=$request->email;
        $user->password=123;
        $user->save();
      return redirect()->back()->with('message','New User has been registered.');
     }
    public function destroy($id)
    {
        $user=User::FindorFail($id);
        $user->delete();

               return redirect()->back()->with('message','User has been deleted!');
    }

    public function edit($id)
    {
     $user=User::FindorFail($id);
        return view('users.edit',compact('user'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,['name','email']);
        $user_update=User::FindorFail($id);
        $user_update->name=ucwords($request->name);
       $user_update->password=bcrypt($request->password);
        $user_update->email=$request->email;
       $user_update->save();

          $users=User::all();
          return redirect()->back()->with('message','User has been updated!');

       //return view('users.list',compact('users'))->with('message',"User has been updated");

      // return redirect()->back()->with('success','User has been updated!');

    }

    public function printPDF()
    {
       // This  $data array will be passed to our PDF blade
      //$data = [
         // 'title' => 'First PDF for Medium',
        //  'heading' => 'Hello from 99Points.info',
         // 'content' => 'Lorem Ipsum is simply dummy textesetting, remaining essentially unchanged.'        
         //   ];

           $users=User::all();
   //return view('users.list',compact('users'));
        
        $pdf = PDF::loadView('users.pdf', compact('users'));  
        return $pdf->stream('medium.pdf');
    }



}

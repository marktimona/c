<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administration;
use PDF;
class AdministrationController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


    public function create()
  {

    return view('administration.create');
  }

  public function post(Request $request)
  {
$this->validate($request,['county','constituency','location','sub_location','name_of_chief','chief_phone_no','name_of_subchief','sub_chief_phone_no']);
$admin=new Administration();
$admin->county=ucwords($request->county);
$admin->constituency=ucwords($request->constituency);
$admin->location=ucwords($request->location);
$admin->sub_location=ucwords($request->sub_location);
$admin->name_of_chief=ucwords($request->name_of_chief);
$admin->chief_phone_no=$request->chief_phone_no;
$admin->name_of_subchief=ucwords($request->name_of_subchief);
$admin->subchief_phone_no=$request->subchief_phone_no;
    $admin->save();
    return redirect()->back()->with('message','New administration has been added successsfully.');
   }

   public function list()

    {
$admins=Administration::all();
return view('administration.list',compact('admins'));

    }



    public function destroy($id)
    {
        $admin=Administration::FindorFail($id);
        $admin->delete();

               return redirect()->back()->with('message','Administration has been deleted!');
    }

    public function edit($id)
    {
     $admin=Administration::FindorFail($id);
        return view('administration.edit',compact('admin'));
    }

    public function update($id, Request $request)
    {
$this->validate($request,['county','constituency','location','sub_location','name_of_chief','chief_phone_no','name_of_subchief','sub_chief_phone_no']);
        $admin=Administration::FindorFail($id);
        $admin->county=ucwords($request->county);
$admin->constituency=ucwords($request->constituency);
$admin->location=ucwords($request->location);
$admin->sub_location=ucwords($request->sub_location);
$admin->name_of_chief=ucwords($request->name_of_chief);
$admin->chief_phone_no=$request->chief_phone_no;
$admin->name_of_subchief=ucwords($request->name_of_subchief);
$admin->subchief_phone_no=$request->subchief_phone_no;
            $admin->save();

          $admins=Administration::all();
          return redirect()->back()->with('message','Administration has been updated!');
   
}

public function printPDF()
{
   // This  $data array will be passed to our PDF blade
  //$data = [
     // 'title' => 'First PDF for Medium',
    //  'heading' => 'Hello from 99Points.info',
     // 'content' => 'Lorem Ipsum is simply dummy textesetting, remaining essentially unchanged.'        
     //   ];

       $admins=Administration::all();
//return view('users.list',compact('users'));
    
    $pdf = PDF::loadView('administration.pdf', compact('admins'))->setPaper('a4', 'landscape');
    return $pdf->stream('medium.pdf');
}


}
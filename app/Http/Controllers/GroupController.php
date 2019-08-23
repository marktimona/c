<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Group;
use PDF;
class GroupController extends Controller

{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function create()
  {

    return view('groups.create');
   }
   

   public function post(Request $request)
  {
 $this->validate($request,['group_name','no_of_members','group_leader','group_leader_phone_no']);
       $group=new Group();
        $group->group_name=ucwords($request->group_name);
        $group->no_of_members=ucwords($request->no_of_members);
        $group->group_leader=ucwords($request->group_leader);
        $group->group_leader_phone_no=ucwords($request->group_leader_phone_no);
   $group->save();
    return redirect()->back()->with('message','New group has been added successsfully.');
   }
   
    public function list()

    {
    $groups=Group::all();
     return view('groups.list',compact('groups'));

    }


    public function destroy($id)
    {
        $group=Group::FindorFail($id);
        $group->delete();

               return redirect()->back()->with('message','Group has been deleted!');
    }


    public function edit($id)
    {
     $group=Group::FindorFail($id);
        return view('groups.edit',compact('group'));
    }


    public function update($id, Request $request)
    {
       $this->validate($request,['group_name','no_of_members','group_leader','group_leader_phone_no']);
        $group=Group::FindorFail($id);
        $group->group_name=ucwords($request->group_name);
        $group->no_of_members=ucwords($request->no_of_members);
        $group->group_leader=ucwords($request->group_leader);
        $group->group_leader_phone_no=ucwords($request->group_leader_phone_no);
        $group->save();

          $groups=Group::all();
          return redirect()->back()->with('message','Group has been updated!');

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

           $groups=Group::all();
   //return view('users.list',compact('users'));
        
        $pdf = PDF::loadView('groups.pdf', compact('groups'));  
        return $pdf->stream('medium.pdf');
    }



}

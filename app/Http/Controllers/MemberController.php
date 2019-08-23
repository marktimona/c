<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Member;
use PDF;

class MemberController extends Controller

{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function create()
  {

    return view('members.create');
   }
   

   public function post(Request $request)
  {
$this->validate($request,['first_name','surname','other_names','phone_no','gender','nature_of_business','has_business_permit']);
$member=new Member();
$member->first_name=ucwords($request->first_name);
$member->surname=ucwords($request->surname);
$member->other_names=ucwords($request->other_names);
$member->phone_no=$request->phone_no;
$member->gender=ucwords($request->gender);
$member->nature_of_business=ucwords($request->nature_of_business);
$member->has_business_permit=ucwords($request->has_business_permit);
    $member->save();
    return redirect()->back()->with('message','New member has been added successsfully.');
   }
   
    public function list()

    {
    $members=Member::all();

     return view('members.list',compact('members'));

    }



    public function destroy($id)
    {
        $member=Member::FindorFail($id);
        $member->delete();

               return redirect()->back()->with('message','Member has been deleted!');
    }

    public function edit($id)
    {
     $member=Member::FindorFail($id);
        return view('members.edit',compact('member'));
    }

    public function update($id, Request $request)
    {
       $this->validate($request,['first_name','surname','other_names','phone_no','gender','nature_of_business','has_business_permit']);
        $member=Member::FindorFail($id);
        $member->first_name=ucwords($request->first_name);
        $member->surname=ucwords($request->surname);
        $member->other_names=ucwords($request->other_names);
        $member->phone_no=$request->phone_no;
        $member->gender=ucwords($request->gender);
        $member->nature_of_business=ucwords($request->nature_of_business);
        $member->has_business_permit=ucwords($request->has_business_permit);
            $member->save();

          $members=Member::all();
          return redirect()->back()->with('message','Member has been updated!');

       //return view('members.list',compact('members'))->with('message',"Member has been updated");

      // return redirect()->back()->with('success','Member has been updated!');

    }

    public function printPDF()
    {
       // This  $data array will be passed to our PDF blade
      //$data = [
         // 'title' => 'First PDF for Medium',
        //  'heading' => 'Hello from 99Points.info',
         // 'content' => 'Lorem Ipsum is simply dummy textesetting, remaining essentially unchanged.'        
         //   ];

           $members=Member::all();
   //return view('members.list',compact('members'));
        
        $pdf = PDF::loadView('members.pdf', compact('members'));  
        return $pdf->stream('medium.pdf');
    }



}

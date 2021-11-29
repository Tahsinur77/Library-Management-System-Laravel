<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class memberController extends Controller
{
    //

    public function memberOperation(){
        return view('Members.memberOperation');
    }

    public function memberSubmit(Request $request){
        
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|regex:/^[a-zA-Z\s]*$/',
                'password'=>'required|min:4',
                'phonenumber'=>'required|regex:/^[0-9]*$/|unique:admins',
                'email'=>'required',
                'address'=>'required',
                'dob'=>'required'
                
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters',
                'phoneNumber.unique'=>'Phone number already used',
                
                
            ]
        );

        $var = new Member();
        $var->name = $request->name;
        $var->phonenumber = $request->phonenumber;
        $var->email = $request->email;
        $var->dob = $request->dob;
        $var->password =$request->password;
        $var->address = $request->address;
        $var->userType = "Member";
        $var->save();

        return $var;

        if ($validator->passes()) {

            return response()->json(['success'=>'Added new records.']);
			
        }

        return response()->json(['error'=>$validator->errors()]);
        
    }

    public function memberList(){
        $members = Member::all();
        return json_encode($members);
    }
    
    public function edit(Request $request){
        $id = $request->id;
        $member = Member::where('id',$id)->first();
        return $member;
    }

    public function editSubmit(Request $request){
        $var = Member::where('id',$request->id)->first();
        $var->name = $request->name;
        $var->phonenumber = $request->phonenumber;
        $var->email = $request->email;
        $var->dob = $request->dob;
        $var->password =$request->password;
        $var->address = $request->address;
        $var->userType = "Member";
        $var->save();
        return $var;
    }
    public function deleteMember(Request $request){
        $id = $request->id;
        $member = Member::where('id',$id)->delete();
        return redirect()->route('memberList');
    }
}

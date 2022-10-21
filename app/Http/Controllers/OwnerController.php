<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller

{

    public function ownerDetail ($id    ) {
        
        $owner  = Owner::find($id);
        
        
    return view('owner_detail', compact('owner'));

    }


    public function edit() {


    }


    public function update($id, Request $request)
    {

        $this->validate(
            $request,
            [
                'first_name' => 'required',
                'surname' => 'required',
                'email' => 'email:rfc,dns',
                'phone' => 'required|min:9',
                'adress' => 'required'
            ],
            [
                'first_name.required' => 'Firstname is required',
                'surname.required' => 'Surname is required',
                'email.email:rfc,dns' => 'Please enter a valid email address',
                'phone.min' => 'This is not a valid phone number',
                'address.required' => 'Please enter a valid address',


            ]
        );
       

        $owner = Owner::findOrFail($id);
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');
        $owner->save();
        session()->flash('success_message', 'The Owner was successfully updated');
        return redirect()->route('owners.detail', $owner->id);
    }


    public function delete($id, Request $request)
    {
        $owner = Owner::findOrFail($id);
        $owner->delete();
        session()->flash('success_message', 'The owner was successfully deleted');
        return redirect('/');
    }


    

    
}

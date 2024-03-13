<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){
        
        return view('frontend.contact');
    }

    public function store(Request $request){
        $contact =new Contact();
        $validata = $request->validate(
            [
                'name'=>'required|min:4',
                'email'=>'required|email',
                
               
            ]);
            if($validata){
                $data = [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'subject'=>$request->subject,
                    'address'=>$request->address,
                   
                ];
                $contact->insert($data);
                return redirect()->back()->with('msg','Contact Successfully insert');
            }
    }
    public function allContact() {

        $contact = Contact::all();
        return view('backend.contact.contact', compact('contact'));
    }
}

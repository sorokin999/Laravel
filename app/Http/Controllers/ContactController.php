<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $reg){
//         $validation = $reg->validate([
//             'subject' => 'required|min:5|max:200',
//             'message' => 'required|min:5|max:1000'
//         ]);   
            $contact = new Contact();
            $contact->name = $reg->input('name');
            $contact->email = $reg->input('email');
            $contact->subject = $reg->input('subject');
            $contact->message = $reg->input('message');

            $contact->save();

            return redirect()->route('home')->with('success', 'Сообщение было отправлено'); 
    }

    public function allData() {
           $contact = new Contact;
           return view('messages', ['data' => $contact->orderBy('id', 'desc')->get() ]);
            //Contact::all() Вывод всех элементов по времени
            // dd($contact->all()); Вывод массива 
    }
    
    public function showOnMeassage($id) {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }
     
    public function updateMessageSubmit($id, ContactRequest $reg){
        //         $validation = $reg->validate([
        //             'subject' => 'required|min:5|max:200',
        //             'message' => 'required|min:5|max:1000'
        //         ]);   
                    $contact = Contact::find($id);
                    $contact->name = $reg->input('name');
                    $contact->email = $reg->input('email');
                    $contact->subject = $reg->input('subject');
                    $contact->message = $reg->input('message');
        
                    $contact->save();
        
                    return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено'); 
            }
    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }        
}

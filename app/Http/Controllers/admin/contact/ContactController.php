<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\admin\contact\AdmissionContact;
use App\Models\admin\contact\ContactForm;
use App\Models\admin\contact\Emergencycontact;
use App\Models\admin\contact\GeneralContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $managecontacts;
    protected $deletecontact;
    public function genrealContact()
    {
        return view('admin.contact.generalcontact');
    }
    public function addgeneralContact(Request $request)
    {
        GeneralContact::AddGeneralContact($request);
        return redirect()->back()->with('message','General Contact Add Successfully');
    }
    public function admissionContact()
    {
        return view('admin.contact.admissioncontact');
    }
    public function addadmissionContact(Request $request)
    {
        AdmissionContact::AddadmissionContact($request);
        return redirect()->back()->with('message','Admission Contact Add successfully');
    }
    public function emergencyContact()
    {
        return view('admin.contact.emergencycontact');
    }
    public function addemergencyContact(Request $request)
    {
       Emergencycontact::AddemergencyContact($request);
        return redirect()->back()->with('message','Emergency Contact Add successfully');
    }
    public function contactform(Request $request)
    {
        ContactForm::addcontactinfo($request);
        return redirect()->back()->with('message','Thanks we will contact with you soon');
    }
    public function managecontacts()
    {
        $this->managecontacts=ContactForm::all();
        return view('admin.contact.manage-contacts',['contactinfo'=>$this->managecontacts]);

    }
    public function deleteconttact($id)
    {
        $this->deletecontact=ContactForm::find($id);
        $this->deletecontact->delete();
        return redirect()->back()->with('message','contacts delete successfully');
    }


}

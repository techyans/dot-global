<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Models\Contact_Form_Model;

class PageController extends Controller
{
    public function PageAbout(){
        return view('about-us');
    }
    public function PageContactUs(){
        return view('contact-us');
    }
    public function PageServices(){
        return view('services');
    }
    public function PageProcess(){
        return view('work-process');
    }
    public function PageBlogs(){
        return view('blogs');
    }
    public function PageFaqs(){
        return view('faqs');
    }

    public function Contact_Form_Submit(request $req){
        $contact_details= new Contact_Form_Model;
        $contact_details->name = $req->con_cus_name;
        $contact_details->email = $req->con_cus_email;
        $contact_details->phone = $req->con_cus_phone;
        $contact_details->subject = $req->con_cus_subject;
        $contact_details->message = $req->con_cus_message;
        $contact_details->visitor_ip = $req->ip();
        if($contact_details->save()){
            return '<p class="text-success m-0 pt-3" style="font-weight:500;">Details sent successfully, We will get back to you soon!</p>';
        }else{
            return '<p class="text-dangert m-0 pt-3" style="font-weight:500;">Something went wrong, Try again!</p>';
        }
    }
    public function News_Letter_Submit(request $req){
        $email = $req->sub_email;
        $ip_add = $req->ip();
        $sql = DB::insert("INSERT INTO newsletter_email (email,ip_add) VALUES ('".$email."','".$ip_add."')");
        if($sql){
            return '<span style="color:green;">News letter successfuly subscribed.</span>';
        }else{
            return '<span style="color:red;">Something wrong, Try again!.</span>';
        }
    }
    public function Footer_Form_Submit(request $req){
        $name = $req->ff_name;
        $phone = $req->ff_phone;
        $message = $req->ff_message;
        $ip_add = $req->ip();
        $sql = DB::insert("INSERT INTO footer_form (name,phone,message,ip_add) VALUES ('".$name."','".$phone."','".$message."','".$ip_add."')");
        if($sql){
            return '<span style="color:green;font-size:12px; font-weight:500;">Your message successfully sent!</span>';
        }else{
            return '<span style="color:red;font-size:12px; font-weight:500;">Something wrong, Try again!.</span>';
        }
    }
}

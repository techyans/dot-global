<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller {
    public function index(){
        return view('admin/index');
    }
    public function admin_login(){
        return view('admin/login');
    }
    public function add_media(){
        return view('admin/add-media');
    }
    public function all_media(){
        return view('admin/all-media');
    }
}

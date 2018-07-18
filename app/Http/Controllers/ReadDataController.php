<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReadDataController extends Controller
{
    public function readIndex() {
        return view('index-content');
    }

    public function readIcon_material() {
        return view('icon-material');
    }
    public function readMap_google() {
        return view('map-google');
    }
    
    public function readPages_blank() {
        return view('pages-blank');
    }
    
    public function readPages_error_404() {
        return view('pages-error');
    }
    
    public function readPages_profile() {
        return view('pages-profile');
    }
    
    public function readTable_basic() {
        return view('table-basic');
    }
}


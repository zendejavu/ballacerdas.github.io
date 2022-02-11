<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProcessController extends Controller
{
    public function all(){
        return view('layouts.main', [
            "management" => Database::managementData(),
            "resume_we" => Database::work_experienceData(),
            "resume_awards" => Database::awardsData(),
            "portfolio" => Database::portolioData(),
        ]);    
    }

    public function Portfolio(){
        // return view('detail_portfolio');
        return "Hello";
    }

    public function store(){
        return view('partials.contact-form');
    }
}

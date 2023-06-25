<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;

use App\Models\Job;

use Auth;



class CompanyController extends Controller
{
    public function dashboard()
    {
        return view('company.dashboard');
    }

}

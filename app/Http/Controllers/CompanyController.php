<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function CompanyDashboard()
    {

        return view('company.company_dashboard');
    }
}

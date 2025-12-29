<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTotal;

class DashboardController extends Controller
{
    public function index() {
        $data = DataTotal::first();
        return view("index", compact("data"));
    }
}
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
    public function casesIndex() {
        return view("cases-dashboard");
    }
    public function inspectionsIndex() {
        return view("inspections-dashboard");
    }
    public function documentsIndex() {
        return view("documents-dashboard");
    }
}
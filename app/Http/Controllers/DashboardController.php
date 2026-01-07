<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTotal;
use App\Models\Cases;
use App\Models\Vehicles;
use App\Models\Parties;
use App\Models\Documents;
use App\Models\Inspections;
use App\Models\Users;

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
        $doc = Documents::all();
        $veh = Vehicles::all();
        $par = Parties::all();

        return view("documents-dashboard", compact("doc", "veh", "par"));
    }
}
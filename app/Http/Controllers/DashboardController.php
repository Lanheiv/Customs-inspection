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
        $case = Cases::all();
        return view("cases-dashboard", compact("case"));
    }
    public function inspectionsIndex() {
        $insp = Inspections::all();
        if(auth()->user()->role == "inspector") {
            $foryou = Inspections::where("assigned_to", "=", auth()->user()->username)->get();

            return view("inspections-dashboard", compact("foryou", "insp"));
        } else {
            return view("inspections-dashboard", compact("insp"));
        }
    }
    public function documentsIndex() {
        $doc = Documents::all();
        $veh = Vehicles::all();
        $par = Parties::all();

        return view("documents-dashboard", compact("doc", "veh", "par"));
    }
}
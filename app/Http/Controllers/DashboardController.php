<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Helpers\LogActivity;

use App\Models\DataTotal;
use App\Models\Cases;
use App\Models\Vehicles;
use App\Models\Parties;
use App\Models\Documents;
use App\Models\Inspections;
use App\Models\Users;
use App\Models\InspectionsResults;

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
    public function inspectionsResult(Request $request, $id) {
        $chack = InspectionsResults::where("inspection_id", $id)->first();
        $insp = Inspections::where("foreignId", $id)->first();
        $case = Cases::where("foreignId", "=", $insp["case_id"])->first();
        if ($case["status"] !== "closed") {
            $validated = $request->validate([
                "status" => ["required", "string"],
                "reason" => ["nullable", "string"]
            ]);
            if($chack !== null) {
                $chack->update($validated);

                LogActivity::addToLog(
                    "Edit inspection result",
                    "inspections",
                    $chack->foreignId
                ); 
            } else {
                $data = InspectionsResults::create([
                    "inspection_id" => $id,
                    "status" => $validated["status"],
                    "reason" => $validated["reason"]
                ]);

                LogActivity::addToLog(
                    "Add inspection result",
                    "inspections",
                    $data->foreignId
                ); 
            }
        }
        return redirect("data/" . $id);
    }

    public function documentsIndex() {
        $doc = Documents::all();
        $veh = Vehicles::all();
        $par = Parties::all();

        return view("documents-dashboard", compact("doc", "veh", "par"));
    }
    public function documentsCreate() {
        return view("data.documents.document-create");
    }
}
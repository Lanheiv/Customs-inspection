<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cases;
use App\Models\Vehicles;
use App\Models\Parties;
use App\Models\Documents;
use App\Models\Inspections;
use App\Models\Users;
use App\Models\WebsiterLog;
use App\Models\InspectionsResults;



class DataController extends Controller
{
    public function index(string $id) {
        $parts = explode("-", $id, 2);
        $type = $parts[0];
        $num  = $parts[1] ?? null;

        if ($type === "case") {
            return $this->casesIndex($id);
        } elseif ($type === "insp") {
            return $this->inspectionsIndex($id);
        } elseif ($type === "veh") {
            return $this->vehiclesIndex($id);
        } elseif ($type === "pty") {
            return $this->partiesIndex($id);
        } elseif ($type === "usr") {
            if (auth()->user()->foreignId == $id || auth()->user()->role == "admin") {
                return $this->usersIndex($id);
            } else {
                return back();
            }
        } elseif ($type === "doc") {
            if (auth()->user()->role == "admin") {
                return $this->documentsIndex($id);
            } else {
                return back();
            }
        } elseif($type === "log") {
            return $this->logIndex($id);
        } else {
            return redirect("/");
        }
    }
    public function casesIndex($id) {
        $data = Cases::where("foreignId", $id)->first();
        if($data !== null) {
            $vehicle = Vehicles::where("foreignId", $data->vehicle_id)->first();
            $inspres = InspectionsResults::where("inspection_id", $id)->first();
            $partie_declarant = Parties::where("foreignId", $data->declarant_id)->first();
            $partie_consignee = Parties::where("foreignId", $data->consignee_id)->first();

            $document = Documents::where("case_id", $data->foreignId)->get();
            $inspection = Inspections::where("case_id", $data->foreignId)->get();

            return view("data.cases.index", compact("data", "vehicle", "partie_declarant", "partie_consignee", "document", "inspection", "inspres"));
        }
        return redirect("/");
    }
    public function documentsIndex($id) {
        $data = Documents::where("foreignId", $id)->first();
        if($data !== null) {
            $path = \Storage::url("cases/" . $data->filename);
            $case = Cases::where("foreignId", $data->case_id)->get();
            $user = Users::where("username", $data->uploaded_by)->first();

            return view("data.documents.index", compact("data", "case", "path", "user"));
        }
        return redirect("/");
    }
    public function inspectionsIndex($id) {
        $data = Inspections::where("foreignId", $id)->first();
        if($data !== null) {
            $inspres = InspectionsResults::where("inspection_id", $id)->first();
            $case = Cases::where("foreignId", $data->case_id)->first();
            $user = Users::where("username", $data->assigned_to)->first();

            return view("data.inspections.index", compact("data", "case", "user", "inspres"));
        }
        return redirect("/");
    }
    public function partiesIndex($id) {
        $data = Parties::where("foreignId", $id)->first();
        if($data !== null) {
            return view("data.parties.index", compact("data"));
        }
        return redirect("/");
    }
    public function usersIndex($id) {
        $data = Users::where("foreignId", $id)->first();
        if($data !== null) {
            return view("data.users.user-view", compact("data"));
        }
        return redirect("/");
    }
    public function vehiclesIndex($id) {
        $data = Vehicles::where("foreignId", $id)->first();
        if($data !== null) {
            return view("data.vehicles.index", compact("data"));
        }
        return redirect("/");
    }
    public function logIndex($id) {
        $data = WebsiterLog::where("foreignId", $id)->first();
        if($data !== null) {
            return view("data.log.index", compact("data"));
        }
        return redirect("/");
    }
}

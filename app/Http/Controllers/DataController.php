<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cases;

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
            return $this->usersIndex($id);
        } elseif ($type === "doc") {
            return $this->documentsIndex($id);
        } else {
            return redirect("/");
        }
    }
    public function casesIndex($id) {
        $data = Cases::where('foreignId', $id)->first();
        if($data !== null) {
            return view("data.cases.index", compact("data"));
        }
        return redirect("/");
    }
}

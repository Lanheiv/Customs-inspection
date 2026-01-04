<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(string $id) {
        $parts = explode("-", $id, 2); // sagriež 2 daļās 
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
}

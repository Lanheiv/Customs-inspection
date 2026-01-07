<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

use App\Models\Users;

class UserController extends Controller
{
    public function index() {
        return view("auth.user");
    }

    public function adminEdit($id){
        $data = Users::where("foreignId", $id)->first();
        return view("data.users.admin-edit", compact("data"));
    }
    public function adminUpdate(Request $request, $id){
        $data = Users::where("foreignId", $id)->first();
        $validated = $request->validate([
            "username" => ["required", "string"],
            "full_name" => ["required", "string"],
            "role" => ["required", "string"],
            "active" => ["required", "boolean"],
        ]);

        if ($request->role === "admin") {
            return back();
        }

        $data->update($validated);

        return redirect("/data/" . $data->foreignId);
    }
    public function adminCreate() {
        return view("data.users.admin-create");
    }
    public function adminStore(Requset $request) {
        
    }
}

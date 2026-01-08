<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Users;

use App\Helpers\LogActivity;

class UserController extends Controller
{
    public function index() {
        return view("auth.user");
    }
    public function edit($id){
        if (auth()->user()->foreignId == $id || auth()->user()->role == "admin") {
            $data = Users::where("foreignId", $id)->first();

            return view("data.users.edit", compact("data"));
        } else {
            return back();
        }
    }
    public function update(Request $request, $id){
        if (auth()->user()->foreignId == $id || auth()->user()->role == "admin") {
            $data = Users::where("foreignId", $id)->first();
            $validated = $request->validate([
                "username" => ["required", "string"],
                "full_name" => ["required", "string"],
                "role" => ["sometimes", "string"],
                "active" => ["sometimes", "boolean"],
                "password" => ["sometimes", "string", "min:6"]
            ]);

            if (!empty($validated["password"])) { $validated["password"] = Hash::make($validated["password"]); }

            $data->update($validated);

            LogActivity::addToLog(
                "Edit user: " . $validated["username"],
                "users",
                $data->foreignId
            );

            return redirect("/data/" . $data->foreignId);
        } else {
            return back();
        }
    }
}

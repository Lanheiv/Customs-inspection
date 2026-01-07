<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

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
                "role" => ["required", "string"],
                "active" => ["required", "boolean"],
            ]);

            $data->update($validated);

            return redirect("/data/" . $data->foreignId);
        } else {
            return back();
        }
    }
}

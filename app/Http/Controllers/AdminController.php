<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

use App\Helpers\LogActivity;

use App\Models\Users;
use App\Models\WebsiterLog;

class AdminController extends Controller
{
    public function index() {
        $users = Users::all();
        $logs = WebsiterLog::all();

        return view("admin.index", compact("users", "logs"));
    }
    public function create() {
        return view("data.users.admin-create");
    }
    public function store(Request $request) {
        $request["password"] = bin2hex(random_bytes(5));

        $validated = $request->validate([
            "username" => ["required", "string"],
            "full_name" => ["required", "string"],
            "role" => ["sometimes", "required", "string"],
            "active" => ["sometimes", "required", "boolean"],
            "password" => ["sometimes", "required"],
        ]);

        if ($request->role === "admin") { return back(); }

        $data = Users::create([
            "username" => $validated["username"],
            "full_name" => $validated["full_name"],
            "role" => $validated["role"],
            "active" => $validated["active"],
            "password" => Hash::make($validated["password"])
        ]);

        LogActivity::addToLog(
            "Created new user " . $validated["username"],
            "users",
            $data->foreignId
        );

        return redirect("/admin")->with("userdata", $validated);
    }
}

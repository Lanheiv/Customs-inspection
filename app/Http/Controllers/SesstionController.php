<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Models\User;

class SesstionController extends Controller
{
    public function index() {
        return view("auth.login");
    }
    public function store(Request $data) {
        $validate = $data->validate([
            "username" => "required|string",
            "password" => "required"
        ]);

        if (Auth::attempt($validate)) {
            $data->session()->regenerate();

            return redirect("/");
        } else {
            return redirect()->back()->withErrors(['error' => 'error']);
        }
    }
    public function destroy() {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }
}

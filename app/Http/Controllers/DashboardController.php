<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // nantinya bs diakses user maupun admin, tp untuk cms nya nanti tdk bs diakses user
        return view('dasboard');
    }
}

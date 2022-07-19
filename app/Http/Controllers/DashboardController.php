<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dpt;
use App\Models\Paslon;
use App\Models\Voting;

class DashboardController extends Controller
{
    public function index() {
        $dpt = Dpt::count();
        $paslon = Paslon::count();
        $sudah = Dpt::where('status', 1)->count();
        $belum = Dpt::where('status', 0)->count();
        return view('dashboard', compact(['dpt'], ['paslon'], ['sudah'], ['belum']));
    }
}

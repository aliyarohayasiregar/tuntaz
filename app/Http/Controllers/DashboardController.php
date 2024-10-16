<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batu;

class DashboardController extends Controller
{
    public function index()
    {
        $batus = Batu::all();
        return view('dashboard.index', compact('batus'));
    }
}

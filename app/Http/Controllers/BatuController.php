<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batu;

class BatuController extends Controller
{
    public function index()
    {
        $batus = Batu::all();
        return view('dashboard.index', compact('batus')); 
    }

    public function create()
    {
        return view('batus.create');
    }

    public function store(Request $request)
    {
        Batu::create($request->all());
        return redirect()->route('batus.index');
    }

    public function show($id)
    {
        $batu = Batu::findOrFail($id);
        return view('batus.show', compact('batu'));
    }

    public function edit($id)
    {
        $batu = Batu::findOrFail($id);
        return view('batus.edit', compact('batu'));
    }

    public function update(Request $request, $id)
    {
        $batu = Batu::findOrFail($id);
        $batu->update($request->all());
        return redirect()->route('batus.index');
    }

    public function destroy($id)
    {
        $batu = Batu::findOrFail($id);
        $batu->delete(); 
        return redirect()->route('batus.index');
    }
}

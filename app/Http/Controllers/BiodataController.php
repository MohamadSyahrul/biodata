<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $bt = Biodata::all();
        return view('biodata.getall', compact('bt'));
    }
    public function create()
    {
        return view('biodata.index');
    }

    public function store(Request $request)
    {
        $bt = $request->all();
        Biodata::create($bt);
        return redirect()->route('biodata.create')->with('success', 'Data berhasil disimpan !');

    }
}

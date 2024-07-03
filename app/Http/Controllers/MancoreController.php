<?php

namespace App\Http\Controllers;

use App\Models\Mancore;
use Illuminate\Http\Request;

class MancoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mancores = Mancore::get();
        return view('pages.mancore', compact('mancores'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $mancores = Mancore::query()
            ->where('STO', 'LIKE', "%{$search}%")
            ->orWhere('ODC', 'LIKE', "%{$search}%")
            ->orWhere('ODP_Name', 'LIKE', "%{$search}%")
            ->orWhere('ODC_Out_Pnl', 'LIKE', "%{$search}%")
            ->orWhere('ODC_Out_Port', 'LIKE', "%{$search}%")
            ->orWhere('Spl_No', 'LIKE', "%{$search}%")
            ->orWhere('Spl_Port', 'LIKE', "%{$search}%")
            ->orWhere('Distribusi', 'LIKE', "%{$search}%")
            ->orWhere('DIST_Core', 'LIKE', "%{$search}%")
            ->get();

        return view('pages.mancore', compact('mancores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mancore $mancore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mancore $mancore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mancore $mancore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mancore $mancore)
    {
        //
    }
}

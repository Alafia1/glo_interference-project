<?php

namespace App\Http\Controllers\Api;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Data::where('interference', 'nok')->get();
        return response(json_encode($resources), 200);
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resources = Data::where('site_id', $id)->value('interference');
        if(!$resources){
            return response('Error in the query', 402);
        }
        return response(json_encode($resources), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        die('Hello');

        return;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        die('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        die('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        die('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        die('Edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        die('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

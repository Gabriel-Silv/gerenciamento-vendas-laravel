<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VendasService;


class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $vendasService;
    public function __construct(VendasService  $vendasService) {
        $this->vendasService = $vendasService;
    }
    public function index()
    {
        $data = $this->vendasService->getAll();
        $data=response()->json($data);
        return view('vendas.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->vendasService->create($request->all());
        return  response()->json($data);
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
    public function show()
    {
        $data = $this->vendasService->getAll();
        return  response()->json($data);
        //return view('vendas.index',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $this->vendasService->update($request->id,$request->all());
        return  response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->vendasService->delete($id);
        return  response()->json($data);
    }
}

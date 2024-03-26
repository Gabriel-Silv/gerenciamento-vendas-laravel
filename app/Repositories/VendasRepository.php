<?php

namespace App\Repositories;
use App\Models\Vendas;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class VendasRepository  
{
    public function getVendasAll()
    {
        //$vendas = Vendas::with('produtos')->get();
        $vendas = Vendas::all();
    } 
}
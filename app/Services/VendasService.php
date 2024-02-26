<?php


namespace App\Services;

use App\Models\Vendas;
use App\Repositories\VendasRepository;

class VendasService
{
    protected $vendasModel;

    public function __construct(Vendas $vendasModel)
    {
        $this->vendasModel = $vendasModel;
    }

    public function create($data)
    {
        return $this->vendasModel->create($data);
    }
    public function getById($id)
    {
        // Implemente a lógica para obter um vendas por ID
        return $this->vendasModel->find($id);
    }
    public function update($id, $data)
    {
       return  $this->vendasModel->update($id,$data);
    }

    public function delete($id)
    {
        return $this->vendasModel->delete($id);
    }
     public function getAll(){
        return $this->vendasModel->all();
     }
}
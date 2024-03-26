<?php


namespace App\Services;

use App\Models\Vendas;
use App\Repositories\VendasRepository;

class VendasService
{
    protected $vendasModel;
    protected $vendasRepository;

    public function __construct(Vendas $vendasModel, VendasRepository $vendasRepository)
    {
        $this->vendasModel = $vendasModel;
        $this->vendasRepository = $vendasRepository;
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

    public function getVendasAll()
    {
        return $this->vendasModel->all();
        //return $this->vendasRepository->getVendasAll();
    }
}
<?php


namespace App\Services;

use App\Models\Clientes;
use App\Repositories\ClienteRepository;

class ClientesService
{
    protected $clienteModel;

    public function __construct(Clientes $clienteModel)
    {
        $this->clienteModel = $clienteModel;
    }

    public function create($data)
    {
        return $this->clienteModel->create($data);
    }
    public function getById($id)
    {
        // Implemente a lógica para obter um cliente por ID
        return $this->clienteModel->find($id);
    }
    public function update($id, $data)
    {
       return  $this->clienteModel->update($id,$data);
    }

    public function delete($id)
    {
        return $this->clienteModel->delete($id);
    }
     public function getAll(){
        return $this->clienteModel->all();
     }
}


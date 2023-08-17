<?php
namespace App\Controllers;

use App\Models\TarefasModel;
use CodeIgniter\Config\Factories;

class Tarefa extends BaseController{

    private $modelTarefa;

    public function __construct()
    {
        $this->modelTarefa = new TarefasModel();
    }
    
    public function index(){
        $data['tarefas'] = $this->modelTarefa->findAll();

        return view('tarefas_view', $data);
    }

    public function create(){
        return view('tarefas_create');
    }

    public function store(){
        $data = $this->request->getPost();

        if($this->modelTarefa->insert($data, true)){
            return redirect()->to('/tarefas');
        }else{
            return redirect()->to('/tarefas/criar_tarefa');
        }
    }
}
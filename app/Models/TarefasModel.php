<?php

namespace App\Models;

use CodeIgniter\Model;

class TarefasModel extends Model{
    protected $table = 'tarefas';
    protected $allowedFields = ['titulo', 'descricao'];
}
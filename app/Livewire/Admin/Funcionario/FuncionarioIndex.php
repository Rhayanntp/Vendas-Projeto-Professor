<?php

namespace App\Livewire\Admin\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioIndex extends Component
{
    public function render()
    {
        $funcionarios = Funcionario::all(); // este comando esta pegando todos os dados do banco

        return view('livewire.admin.funcionario.funcionario-index',
        compact('funcionarios'));

    }
}

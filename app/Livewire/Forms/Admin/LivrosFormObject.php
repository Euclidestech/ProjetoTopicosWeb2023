<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Rule;
use Livewire\Form;

class LivrosFormObject extends Form
{
    //
    #[Rule('required|string|min:4')]
    public $titulo;
    #[Rule('required|string|min:4|max:10')]
    public $categoria;
    #[Rule('required|digits:4')]
    public $ano;
    #[Rule('string|nullable', as: 'Descrição')]
    public $descricao;

    #[Rule('required|string|min:8')]
    public $autor;
}

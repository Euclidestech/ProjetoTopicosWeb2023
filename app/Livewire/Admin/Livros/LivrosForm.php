<?php

namespace App\Livewire\Admin\Livros;

use App\Models\Book;
use Livewire\Component;

class LivrosForm extends Component
{
    public $titulo;
    public $categoria;
    public $ano;
    public $descricao;
    public $autor;

    public function salvar(){
        $livro = new Book();

        $livro->titulo = $this->titulo;
        $livro->categoria = $this->categoria;
        $livro->ano = $this->ano;
        $livro->descricao = $this->descricao;
        $livro->autor = $this->autor;

        $livro->save();

        session()->flash('toast','Livro cadastrado com sucesso!');

        $this-> redirect('/livros',navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.livros.livros-form');
    }
}

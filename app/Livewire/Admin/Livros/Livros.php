<?php

namespace App\Livewire\Admin\Livros;

use App\Models\Book;
use Livewire\Component;

class Livros extends Component
{
    public $livros;

    public $busca = '';

    public function filtrarDados()
    {
        if(empty($this->busca))
        {
            $this->livros = Book::all();
        }
        else
        {
            $this->livros = Book::where("titulo","like","%$this->busca%")
            ->orWhere("categoria","like","%$this->busca%")
            ->orWhere("ano","like","%$this->busca%")
            ->orWhere("autor","like","%$this->busca%")
            ->get();
        }

    }

    public function render()
    {
        $this->filtrarDados();
        return view('livewire.admin.livros.livros');
    }
}

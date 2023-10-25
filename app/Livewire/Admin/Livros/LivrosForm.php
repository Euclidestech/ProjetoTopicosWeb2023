<?php

namespace App\Livewire\Admin\Livros;

use App\Livewire\Forms\Admin\LivrosFormObject;
use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Rule;
class LivrosForm extends Component
{
    public LivrosFormObject $form;

    public function salvar(){
        $this->validate();

      Book::create(
        $this->form->all()
      );

        session()->flash('toast','Livro cadastrado com sucesso!');

        $this-> redirect('/livros',navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.livros.livros-form');
    }
}

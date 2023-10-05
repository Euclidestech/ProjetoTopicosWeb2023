<section>
    <h1 class="text-2xl text-green-500 font-medium">Livros</h1>

    <div class="flex justify-end">
        <input type="text" wire:model.live="busca" class="mt-1 block w-1/4 rounded-md
        border-green-300 shadow-sm focus:border-green-300 focus:ring
        focus:ring-green-500 focus:ring-opacity-50">
    </div>

    <table class="bg-gradient-to-r from-green-500 to-green-700 mx-auto m-5 w-5/6
    rounded-lg text-green-50">
        <thead>
            <tr class="text-left border-b border-green-300">
                <th class="px-4 py-3">Titulo</th>
                <th class="px-4 py-3">Categoria</th>
                <th class="px-4 py-3">Ano</th>
                <th class="px-4 py-3">Descrição</th>
                <th class="px-4 py-3">Autor</th>
            </tr>
        </thead>
        <tbody>

                @forelse ($livros as $livro )
                <tr class="bg-green-500 border-b border-green-300 hover:bg-green-500">
                    <td class="px-4 py-3" >{{$livro->titulo}}</td>
                    <td class="px-4 py-3" >{{$livro->Categoria}}</td>
                    <td class="px-4 py-3" >{{$livro->ano}}</td>
                    <td class="px-4 py-3" >{{$livro->descricao}}</td>
                    <td class="px-4 py-3" >{{$livro->autor}}</td>

                </tr>

                @empty
                <tr class="bg-green-600 border-b border-green-300 hover:bg-green-500">
                    <td class="px-4 py-3" colspan="5">Sem livros cadastrados</td>
                </tr>
                @endforelse
        </tbody>
    </table>
</section>

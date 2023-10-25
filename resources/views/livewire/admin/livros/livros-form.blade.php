<div>
    <h1 class="text-2xl text-green-500 font-medium">Livros - Formulario</h1>

    <form class="mt-4 flex-col space-y-4 " wire:submit.prevent="salvar">

        <label>
            <span class="text-green-500">Titulo</span>
            <x-admin.input wire:model.live="form.titulo" type="text"/>

            @error('form.titulo')
                <span class="text-red-700  "><small>{{$message}}</small></span>
            @enderror
        </label>
        <br>
        <label>
            <span class="text-green-500">categoria</span>
            <x-admin.input wire:model="form.categoria" type="text"/>

            @error('form.categoria')
                <span class="text-red-700  "><small>{{$message}}</small></span>
            @enderror
        </label>
        <br>
        <label>
            <span class="text-green-500">Ano</span>
            <x-admin.input wire:model="form.ano" type="number"/>

            @error('ano')
                <span class="text-red-700  "><small>{{$message}}</small></span>
            @enderror
        </label>
        <br>
        <label>
            <span class="text-green-500">Descição</span>
            <x-admin.textarea wire:model="form.descricao"/>

            @error('form.descricao')
                <span class="text-red-700  "><small>{{$message}}</small></span>
            @enderror
        </label>
        <br>
        <label>
            <span class="text-green-500">Autor</span>
            <x-admin.input wire:model="form.autor" type="text"/>

            @error('form.autor')
                <span class="text-red-700  "><small>{{$message}}</small></span>
            @enderror
        </label>
        <div class="self-end">
            <x-admin.botao-salvar/>
        </div>
    </form>
</div>

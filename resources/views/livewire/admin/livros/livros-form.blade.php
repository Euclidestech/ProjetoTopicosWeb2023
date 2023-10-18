<div>
    <h1 class="text-2xl text-green-500 font-medium">Livros - Formulario</h1>

    <form class="mt-4 flex-col space-y-4 " wire:submit.prevent="salvar">

        <label>
            <span class="text-gray-700">Titulo</span>
            <x-admin.input wire:model="titulo" type="text"/>
        </label>

        <label>
            <span class="text-gray-700">categoria</span>
            <x-admin.input wire:model="categoria" type="text"/>
        </label>

        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input wire:model="ano" type="number"/>
        </label>

        <label>
            <span class="text-gray-700">Descição</span>
            <x-admin.textarea wire:model="descricao"/>
        </label>

        <label>
            <span class="text-gray-700">Autor</span>
            <x-admin.input wire:model="autor" type="text"/>
        </label>
        <div class="self-end">
            <x-admin.botao-salvar/>
        </div>
    </form>
</div>

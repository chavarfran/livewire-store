@slot('header')
    {{ __('Categorias') }}
@endslot
<x-card class="container">

    <x-jet-action-message on="deleted">
        <div class="box-action-message">
            {{ __('Category eliminada satisfactoriamente') }}
        </div>
    </x-jet-action-message>
    
    @slot('title')
        Listado de categorias
    @endslot


   
    <table class="table w-full border">
        <thead class="text-left bg-gray-100">
            <tr class="border-b">
                <th>
                    Titulo
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
            <tr class="border-b">
                <td class="p-2">
                    {{ $c->id }}
                </td>
                <td class="p-2">
                    {{ $c->title }}
                </td>
                <td class="p-2">
                    <x-jet-nav-link href="{{ route('d-category-edit', $c) }}" class="mr-2">EDITAR</x-jet-nav-link>
                    <x-jet-danger-button 
                        wire:click="seletedCategoryToDelete({{ $c }})">
                        Eliminar
                    </x-jet-danger-button>
                </td>              
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a class="btn-secondary mb-3" href="{{ route('d-category-create') }}">Crear categoria</a>
    {{ $categories->links() }}

    <x-jet-confirmation-modal wire:model="confirmingDeleteCategory">
        <x-slot name="title">
            {{ __('Eliminar Categoria') }}
        </x-slot>

        <x-slot name="content">
            {{ __('¿Estás seguro de que quieres eliminar esta categoría?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingDeleteCategory')" wire:loading.attr="disabled">
                {{ __('Cancelar') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete()"
                wire:loading.attr="disabled">
                {{ __('Eliminar') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</x-card>
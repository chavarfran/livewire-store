<div>
    <x-jet-action-message on="deleted">
        <div class="box-action-message">
            {{ __('Category deleted success') }}
        </div>
    </x-jet-action-message>
    
    <h1>Listado</h1>
    <table class="table w-full">
        <thead>
            <tr>
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
            <tr>
                <td>
                    {{ $c->title }}
                </td>
                <td>
                    <a href="{{ route('d-category-edit', $c) }}">Editar</a>
                    <x-jet-danger-button 
                    onclick="confirm('Seguro que deseas eliminar el registro seleccionado?') || 
                    event.stopImmediatePropagation()"
                    wire:click="delete({{ $c }})">
                        Eliminar
                    </x-jet-danger-button>
                </td>              
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    {{ $categories->links() }}
</div>
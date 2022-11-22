<form wire:submit.prevent="submit" class="flex flex-col max-w-sm mx-auto">

    <x-jet-label>{{ __('Nombre') }}</x-jet-label>
    <x-jet-input-error for="name" />
    <x-jet-input type="text" wire:model="name" />

    <x-jet-label>{{ __('NOmbre de usuario') }}</x-jet-label>
    <x-jet-input-error for="surname" />
    <x-jet-input type="text" wire:model="surname" />

    <x-jet-label>{{ __('Opciones') }}</x-jet-label>
    <x-jet-input-error for="choices" />
    <select wire:model="choices">
        <option value="">Seleccione</option>
        <option value="adverd">{{ __('Adverd') }}</option>
        <option value="post">{{ __('Post') }}</option>
        <option value="course">{{ __('Curso') }}</option>
        <option value="movie">{{ __('Video') }}</option>
        <option value="other">{{ __('Otros') }}</option>
    </select>

    <x-jet-label>{{ __('Otros') }}</x-jet-label>
    <x-jet-input-error for="other" />
    <textarea wire:model="other"></textarea>

    <div class="flex mt-5 gap-3">
        <x-jet-secondary-button wire:click="$emit('stepEvent',1)">Atrás</x-jet-secondary-button>
        <x-jet-button type="submit">Enviar</x-jet-button>
    </div>
</form>

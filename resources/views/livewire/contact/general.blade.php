<div class="container">
    <div class="flex">
        <div x-data="{ active: @entangle('step') }" class="flex mx-auto flex-col sm:flex-row">
            <div class="step active" :class="{ 'active': active == 1 }">
                Primer paso
            </div>
            <div class="step" :class="{ 'active': parseInt(active) == 2 }">
                Segundo paso
            </div>
            <div class="step" :class="{ 'active': active == 3 }">
                Tercer paso
            </div>
        </div>

    </div>
    <br>
    @if ($step == 1)
        <form wire:submit.prevent="submit" class="flex flex-col max-w-sm mx-auto">

            <x-jet-label>{{ __('Subject') }}</x-jet-label>
            <x-jet-input-error for="subject" />
            <x-jet-input type="text" wire:model="subject" />

            <x-jet-label>{{ __('Tipo') }}</x-jet-label>
            <x-jet-input-error for="type" />
            <select wire:model="type">
                <option value="">Seleccione</option>
                <option value="company">{{ __('Empresa') }}</option>
                <option value="person">{{ __('Persona') }}</option>
            </select>

            <x-jet-label>{{ __('Mensaje') }}</x-jet-label>
            <x-jet-input-error for="message" />
            <textarea wire:model="message"></textarea>
            <div class="flex mt-5">
                <x-jet-button type="submit">Enviar</x-jet-button>
            </div>
        </form>
    @elseif($step == 2)
        @livewire('contact.company')
    @elseif($step == 2.5)
        @livewire('contact.person')
    @elseif($step == 3)
        @livewire('contact.detail')
        {{-- @elseif($step == 4) --}}
    @else
        FIN
    @endif

</div>

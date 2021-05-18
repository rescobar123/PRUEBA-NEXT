<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-blue-800 leading-tight">
           Buscador de Ppelis
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('find-pelis', ['title' => 'Buscador'])
            </div>
        </div>
    </div>
</x-app-layout>

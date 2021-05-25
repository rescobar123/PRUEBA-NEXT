<div>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-blue-800 leading-tight">
            Ppelis
           
        </h2>
    </x-slot>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="px-6 py-4">
            <label>Buscar mis peliculas favoritas</label>
            <input type="text" wire:model="search">
        </div>
        <x-table>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Poster
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Titulo
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Anio
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ratings
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($pelis as $peli)
                    <tr>
                        <td class="px-6 py-4\">
                            <div class="flex-shrink-0 h-40 w-40">
                                <img class="h-40 w-40 rounded-full" src=" {{ $peli->poster}}" alt="">
                            </div>
                            </td>
                        <td class="px-6 py-4\">
                            <div class="text-sm text-gray-900">
                                {{ $peli->imdbID}}
                            </div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-900">
                                {{ $peli->title}}
                            </div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-900">
                                {{ $peli->year}}
                            </div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-sm text-gray-900">
                                {{ $peli->ratings}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </x-table>
    </div>

</div>

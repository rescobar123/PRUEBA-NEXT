<div>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-blue-800 leading-tight">
            Ppelis
        </h2>
    </x-slot>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="px-6 py-4">
            <label>Buscador de Ppelis</label>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-10 gap-12">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="title"
                                                class="block text-sm font-medium text-gray-700">Title</label>
                                            <input type="text" wire:model="title" name="title" id="title"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="year"
                                                class="block text-sm font-medium text-gray-700">Year</label>
                                            <input type="number" wire:model="year" name="year" id="year"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="plot" class="block text-sm font-medium text-gray-700">Plot</label>
                                            <select id="plot" wire:model="plot" name="plot" autocomplete="plot" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                              <option selected disabled>Plot</option>
                                              <option value="full">Full</option>
                                              <option value="short">Short</option>
                                            </select>
                                          </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rated
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4\">
                            <div class="flex-shrink-0 h-40 w-40">
                                @if (isset($pelisArray['Poster']))
                                <img class="h-40 w-40 rounded-full" src="{{$pelisArray['Poster']}}" alt="">
                                @endif
                            </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    @if (isset($pelisArray['Title']))
                                    {{$pelisArray['Title']}}
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    @if (isset($pelisArray['Year']))
                                    {{$pelisArray['Year']}}
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    @if (isset($pelisArray['Ratings']))
                                        @foreach ($pelisArray['Ratings'] as $raiting)
                                            <ul>
                                                <li><b>Source: </b>{{ $raiting['Source'] }}</li>
                                                <li><b>Value: </b>{{ $raiting['Value'] }}</li>
                                            </ul>
                                        @endforeach
                                    @endif

                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    @if (isset($pelisArray['Rated']))
                                    {{$pelisArray['Rated']}}
                                    @endif
                                </div>
                            </td>
                            <td>
                                @if (isset($pelisArray['imdbID']))
                                    @if ($idPeliDB  != $pelisArray['imdbID'] )
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <form action="add" method="post">
                                            <input type="hidden" name="title" value="{{ $pelisArray['Title'] }}">
                                            <input type="hidden" name="year" value="{{ $pelisArray['Year'] }}">
                                            <input type="hidden" name="imdbID" value="{{ $pelisArray['imdbID'] }}">
                                            <input type="hidden" name="poster" value="{{ $pelisArray['Poster'] }}">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Agregar a Favoritos</button>
                                        </form>
                                    </td>
                                    @else
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <form action="delete" method="post">
                                            <input type="" name="idDB" value="{{ $id }}">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Eliminar de Favoritos</button>
                                        </form>
                                    </td>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </x-table>

        </div>
    </div>
</div>

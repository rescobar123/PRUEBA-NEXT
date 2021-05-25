<div>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-blue-800 leading-tight">
            Algoritmos
        </h2>
    </x-slot>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="px-6 py-4">
            <label>Algoritmo 1</label>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-0">
                <div class="md:grid md:grid-cols-1 md:gap-4">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="algo1" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-8 py-5 bg-white sm:p-12">
                                    <div class="grid grid-cols-10 gap-12">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="matriz"
                                                class="block text-sm font-medium text-gray-700">Matriz(Numeros separados por coma)</label>
                                            <input type="text" wire:model="matriz" name="matriz" id="matriz"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="elemento"
                                                class="block text-sm font-medium text-gray-700">Elemento a Buscar</label>
                                            <input type="number" wire:model="elemento" name="elemento" id="elemento"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
								           <div class="hidden sm:block" aria-hidden="true">
                                                <div class="">
                                                    <div class="border-t border-gray-200">
                                                      <b> Posiciones: </b> {{ $resultados['algo1'] }}
                                                    </div>
                                                </div>
                                            </div>
								        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="px-6 py-4">
            <label>Algoritmo 2</label>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-0">
                <div class="md:grid md:grid-cols-1 md:gap-4">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="algo1" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-8 py-5 bg-white sm:p-12">
                                    <div class="grid grid-cols-6 gap-12">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="matriz2"
                                                class="block text-sm font-medium text-gray-700">Matriz(Numeros enteros separados por coma)</label>
                                            <input type="text" wire:model="matriz2" name="matriz2" id="matriz2"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                           <div class="hidden sm:block" aria-hidden="true">
                                                <div class="">
                                                    <div class="border-t border-gray-200">
                                                     <b> Resultados: </b> {{ $resultados['algo2'] }}                                         
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="px-6 py-4">
            <label>Algoritmo 3</label>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-0">
                <div class="md:grid md:grid-cols-1 md:gap-4">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="algo1" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-8 py-5 bg-white sm:p-12">
                                    <div class="grid grid-cols-6 gap-12">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="numero"
                                                class="block text-sm font-medium text-gray-700">Numero a comprobar</label>
                                            <input type="text" wire:model="numero" name="numero" id="numero"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                           <div class="hidden sm:block" aria-hidden="true">
                                                <div class="">
                                                    <div class="border-t border-gray-200">
                                                     <b> Resultados: </b> {{ $resultados['algo3'] }}                                         
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="px-6 py-4">
            <label>Algoritmo 3</label>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    
                    </div>
                </div>
            </div>
            <div class="mt-12 sm:mt-0">
                <div class="md:grid md:grid-cols-1 md:gap-4">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="algo1" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-8 py-5 bg-white sm:p-12">
                                    <div class="grid grid-cols-6 gap-12">
                                        <div class="col-span-6 sm:col-span-3">
                                           <div class="hidden sm:block" aria-hidden="true">
                                                <div class="">
                                                    <div class="border-t border-gray-200">
                                                     <b> Array Aleatorio: </b> {{ $resultados['arrayAleatorio'] }}                                         
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                           <div class="hidden sm:block" aria-hidden="true">
                                                <div class="">
                                                    <div class="border-t border-gray-200 justify-center">
                                                        @for ($i = 0; $i <  count($arrayFinal); $i++ )
                                                            <div class="flex justify-evenly  ">
                                                                    @foreach ($arrayFinal[$i] as $numero )
                                                                    <div>
                                                                        {{ $numero }}
                                                                    </div>
                                                                    @endforeach
                                                            </div>
                                                        @endfor                                    
                                                  </div>
                                                  
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

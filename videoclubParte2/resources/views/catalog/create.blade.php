<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            VIDEOCLUB
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="title" :value="__('Título')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Año -->
                        <div>
                            <x-input-label for="year" :value="__('Año')" />
                            <x-text-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" required autofocus />
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>

                        <!-- Dirctor -->
                        <div>
                            <x-input-label for="director" :value="__('Director')" />
                            <x-text-input id="director" class="block mt-1 w-full" type="text" name="director" :value="old('director')" required autofocus />
                            <x-input-error :messages="$errors->get('director')" class="mt-2" />
                        </div>

                        <!-- Poster -->
                        <div>
                            <x-input-label for="poster" :value="__('Poster')" />
                            <x-text-input id="poster" class="block mt-1 w-full" type="text" name="poster" :value="old('poster')" required autofocus />
                            <x-input-error :messages="$errors->get('poster')" class="mt-2" />
                        </div>

                        <!-- Resumen -->
                        <div>
                            <x-input-label for="synopsis" :value="__('Resumen')" />
                            <textarea id="synopsis" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" name="synopsis" :value="old('synopsis')" required autofocus></textarea>
                            <x-input-error :messages="$errors->get('synopsis')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ml-4">
                                {{ __('Añadir película') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

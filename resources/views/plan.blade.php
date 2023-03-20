<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white ">
            {{ __('Plan') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center bg-gray-100 sm:justify-center sm:pt-0">
        <div
            class="mt-6 w-full overflow-hidden px-2 py-4 shadow-md dark:bg-gray-800 sm:max-w-md sm:rounded-lg">
            <form method="POST" action="{{ route('plano.store') }}">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Nome')" />

                    <x-text-input id="name" class="mt-1d block w-full" type="text" name="name" :value="old('name')"
                        autofocus />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="short_description" :value="__('Pequena Descrição')" />

                    <x-text-input id="short_description" class="mt-1 block w-full" type="text"
                        name="short_description" :value="old('short_description')" />

                    <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="price" :value="__('Preço (em centavos)')" />

                    <x-text-input id="price" class="mt-1 block w-full" type="number" name="price"
                        min="1" />

                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="cod" :value="__('Código')" />

                    <x-text-input id="cod" class="mt-1 block w-full" type="text" name="cod"
                        :value="old('cod')" />

                    <x-input-error :messages="$errors->get('cod')" class="mt-2" />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <x-primary-button class="ml-4">
                        {{ __('Cadastrar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

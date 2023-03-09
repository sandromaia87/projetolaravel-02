<x-app-layout>
    <x-slot>
        <h3> Test </h3>
    </x-slot>

    <ul class="text-white">
        <li>Nome: {{ $name }}</li>
        <li>Documento: {{ $document }}</li>
        <li>Status de assinatura: {{ $status }}</li>
    </ul>
</x-app-layout>

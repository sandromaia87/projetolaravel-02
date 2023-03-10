<x-app-layout>
    <x-slot>
        <h3> Test </h3>
    </x-slot>
    <ul>
        <li>Nome: {{ $name }}</li>
        <li>Documento: {{ $document }}</li>
        <li>Status de assinatura: {{ $status }}</li>
        <li>teste get: {{ $teste }}</li>
    </ul>

</x-app-layout>
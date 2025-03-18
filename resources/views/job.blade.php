<x-layout>
    <x-slot:title>
        Jobs page
    </x-slot:title>
    <strong>{{$data['id']}}</strong>
    <br>
    <strong>{{$data['title']}}</strong>
    <p>{{ $data['description'] }}</p>
</x-layout>

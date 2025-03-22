<x-layout>
    <x-slot:title>
        Jobs page
    </x-slot:title>
    <strong>{{$data['id']}}</strong>
    <br>
    <strong>{{$data['title']}}</strong>
    <p>{{ $data['description'] }}</p>
    <div>
        <a href="{{ $data->id }}/edit"><button class="border border-gray-300 rounded-lg bg-green-300 m-3 p-3 pl-8 pr-8 text-xl" style="cursor: pointer">Edit</button></a>
    </div>
</x-layout>

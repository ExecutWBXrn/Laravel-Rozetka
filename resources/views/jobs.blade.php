<x-layout>
    <x-slot:title>
        Jobs page
    </x-slot:title>
    @foreach($data as $job)
        <li>
            <strong>{{ $job['title'] }} </strong> <a href="jobs/{{ $job['id'] }}">{{ $job['description'] }}</a>
        </li>
    @endforeach
</x-layout>

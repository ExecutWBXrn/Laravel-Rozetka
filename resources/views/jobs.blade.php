<x-layout>
    <x-slot:title>
        Jobs page
    </x-slot:title>
    @foreach($data as $job)
        <li>
            <h1><strong>{{ $job->employer->name }}</strong></h1>
            <strong>{{ $job['title'] }} </strong> <a href="jobs/{{ $job['id'] }}">{{ $job['description'] }}</a>
        </li>
    @endforeach
    <div>
        {{ $data->links() }}
    </div>
</x-layout>

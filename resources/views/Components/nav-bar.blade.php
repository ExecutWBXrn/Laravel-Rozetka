@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'bg-green-300' : 'bg-red-300'}}">{{ $slot }}</a>

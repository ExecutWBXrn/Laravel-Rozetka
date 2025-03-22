<x-layout>
    <x-slot:title>
        Edit: {{ $data->title }}
    </x-slot:title>
    <form action="/jobs/{{ $data->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="title" id="title"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       placeholder="Laravel developer"
                                       value="{{ $data->title }}"
                                       required>
                            </div>
                        </div>
                        @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">description</label>
                        <div class="mt-2">
                            <textarea name="description"
                                      id="description"
                                      rows="3"
                                      class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                      required>{{ $data->description }}</textarea>
                        </div>
                        @error('description')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="m-3">
                <button form="delete-form" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
            </div>
            <div class="m-3">
                <a href="/jobs/{{ $data->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>
    <form id="delete-form" method="POST" action="/jobs/{{ $data->id }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>

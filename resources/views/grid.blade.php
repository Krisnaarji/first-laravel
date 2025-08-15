git<x-layout>
    <x-slot:headings>
        Driver Detail
    </x-slot:headings>

    <img src="{{ asset($grid->path) }}" alt="{{ $grid->driver_name }}" class="w-48 h-auto rounded-lg">
    <span class="block text-2xl text-gray-600">{{ $grid->racing_number }}</span>
    <h2 class="text-2xl font-bold mt-4">{{ $grid->driver_name }}</h2>
    <p>{{ $grid->constructor->constructor_name}}</p>
    @foreach ($grid->sponsors as $sponsor)
    <p>{{ $sponsor->sponsor_brand}}</p>
     @endforeach
    <a href="/grids"
       class="inline-block mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg
              hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        Go back
    </a>
</x-layout>

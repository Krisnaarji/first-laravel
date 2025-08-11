<x-layout>

    <x-slot:headings>
        Driver Detail
    </x-slot:headings>  

  <img src="{{ asset($grid->path) }}" alt="{{ $grid->driver_name }}">
    <h2>{{ $grid->driver_name }}</h2>

</x-layout>
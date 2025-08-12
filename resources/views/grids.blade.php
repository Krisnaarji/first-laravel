<x-layout>

    <x-slot:headings>
        Drivere Page
    </x-slot:headings>


    <ul>
    @foreach ($grids as $grid)
        <a href="grid/ {{$grid->id }}">
            <li><strong>{{ $grid->driver_name }}</strong>, {{ $grid->racing_number }}</li>
        </a>
    @endforeach
    </ul>


</x-layout>

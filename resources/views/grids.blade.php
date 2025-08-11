<x-layout>

    <x-slot:headings>
        Drivere Page
    </x-slot:headings>


    <ul>
    @foreach ($grids as $grids )

       <a href="grid/{{ $grids['driver_id'] }}"><li><strong>{{$grids['driver_name']}}</strong>, {{$grids['racing_number']}} </li>
        </a>

    @endforeach
    </ul>

</x-layout>

<x-layout>

    <x-slot:headings>
        Drivere Page
    </x-slot:headings>  


    <ul>
    @foreach ($grids as $grids )

       <a href="grid/{{ $grids['driverId'] }}"><li><strong>{{$grids['driverName']}}</strong>, {{$grids['constructor']}} </li>
        </a> 
        
    @endforeach
    </ul>

</x-layout>
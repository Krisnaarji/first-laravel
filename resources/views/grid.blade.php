<x-layout>

    <x-slot:headings>
        Driver Detail
    </x-slot:headings>  

    <img src="{{ $grid['image'] }}" alt="{{ $grid['driverName'] }}">
    <h2>{{ $grid['driverName'] }}</h2>

</x-layout>
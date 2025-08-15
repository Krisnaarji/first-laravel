<x-layout>

    <x-slot:headings>
        Drivere Page
    </x-slot:headings>

    <ul class="grid grid-cols-2 gap-8">

        @foreach ($grids as $grid)
            <li class="{{ config('constructor_colors')[$grid->constructor_id] ?? 'bg-white text-black' }} shadow-2xl rounded-2xl p-8 flex items-center gap-8 min-h-[260px]">
                <a href="/grid/{{ $grid->id }}" class="flex items-center gap-8 w-full">
                    <img src="{{ asset($grid->path) }}" alt="{{ $grid->driver_name }}"
                    class="w-40 h-40 object-cover rounded-full border-4 border-gray-200">
                    <div>
                        <strong class="text-3xl font-bold">{{ $grid->driver_name }}</strong>
                        <p>{{ $grid->constructor->constructor_name}}</p>
                        <span class="block text-2xl text-gray-600">{{ $grid->racing_number }}</span>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>

    <div class="pt-4">{{$grids->links()}} </div>


</x-layout>

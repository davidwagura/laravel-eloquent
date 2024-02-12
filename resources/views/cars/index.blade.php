@extends('layouts.app')

@section('content')
        <div class="text-right pr-8 mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 mt-12 text-white h-10 font-bold px-4 border border-blue-700 rounded">
                <a href="{{ route('cars.create') }}">Add New Car</a>
            </button>
        </div>
    
        <div  class="overflow-x-auto">
            <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
                <tr class="px-4 py-3">
                    <th>Name</th>
                    <th class="pl-6">Founded</th>
                    <th class="pl-6">Description</th>
                </tr>
                @foreach ($cars as $car)

                <tr class="px-4 py-2">
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->founded }}</td>
                    <td>{{ $car->description }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
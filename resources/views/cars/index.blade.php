@extends('layouts.app')

@section('content')
        <div class="text-right pr-8 mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 mt-12 text-white h-10 font-bold px-4 border border-blue-700 rounded">
                <a href="{{ route('cars.create') }}">Add New Car</a>
            </button>
        </div>
        <div class="text-left pr-8 mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 -mt-12 ml-6 text-white h-10 font-bold px-4 border border-blue-700 rounded">
                <a href="{{ route('brands.create') }}">Add New Brand</a>
            </button>
        </div>

    
        <div  class="overflow-x-auto">
            <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
                <tr class="px-4 py-3">
                    <th>Name</th>
                    <th class="pl-6">Founded</th>
                    <th class="pl-6">Brand</th>
                    <th class="pl-6">Description</th>
                    <th class="pl-6">Delete</th>
                </tr>
                @foreach ($cars as $car)

                <tr class="px-4 py-2">
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->founded }}</td>
                    <td>{{ $car->brand_id }}</td>
                    <td>{{ $car->description }}</td>
                    <td>
                        <div>
                            <button class="bg-red-500 hover:bg-red-300 h-8 px-4 mt-2 ml-10 pt-2 rounded pr-4">
                                <form class="text-white" action="{{route('cars.destroy', ['car' => $car ]) }}" method="delete">
                                    @csrf
                                    @method('delete')
                
                                    <input type="submit" value="delete"/>
                                 </form>
                            </button>
                        </div>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
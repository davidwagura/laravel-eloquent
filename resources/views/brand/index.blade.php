@extends('layouts.app')

@section('content')
        <div class="text-right pr-8 mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 mt-12 text-white h-10 font-bold px-4 border border-blue-700 rounded">
                <a href="{{ route('brands.create') }}">Add New Brand</a>
            </button>
        </div>
        <div class="text-left pr-8 mt-0">
            <button class="bg-blue-500 hover:bg-blue-700 mt-0 text-white h-10 font-bold px-4 border border-blue-700 rounded">
                <a href="{{ route('cars.create') }}">Add New Car</a>
            </button>
        </div>

    
        <div  class="overflow-x-auto">
            <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
                <tr class="px-4 py-3">
                    <th>Name</th>
                    <th class="pl-6">Year</th>
                </tr>
                @foreach ($brands as $brand)

                <tr class="px-4 py-2">
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->year }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
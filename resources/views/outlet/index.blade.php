@extends('layouts.app')

{{-- css script --}}
@section('style')
    
@endsection

@section('content')
@include('outlet.create')
@foreach ($items as $item)
@include('outlet.update')
@include('outlet.delete')
@endforeach
{{-- tools --}}
<div class="m-4 flex justify-between">
    {{-- create  button --}}
    <div>
        <button id="showCreate" class="py-2 px-3 bg-blue-400 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-300 transform hover:-translate-y-1 duration-100">
            <span class="font-semibold text-blue-50"><i class="fas fa-plus"></i> Tambahkan</span>
        </button>
    </div>
    {{-- print --}}
    <div>
        <button class="py-2 px-3 bg-blue-400 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-300 transform hover:-translate-y-1 duration-100">
            <span class="font-semibold text-blue-50"><i class="fas fa-file-export"></i> Export</span>
        </button>
    </div>
</div>


{{-- table --}}
{{-- if (ga dapat data) --}}
@if ($items->count() < 1)
<div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
    <table class="bg-white rounded-xl overflow-hidden min-w-full">
        <thead class="bg-gray-700">
            <tr class="text-white">
                <th class="h-10">No.</th>
                <th class=" border-r-2 border-gray-700">Nama</th>
                <th class=" border-r-2 border-gray-700">Alamat</th>
                <th class=" border-r-2 border-gray-700">No.tlp</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center h-64" colspan="100">
                    <span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- else (dapat data) --}}
@else
<div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
    <table class="bg-white rounded-xl overflow-hidden min-w-full">
        <thead class="bg-gray-700">
            <tr class="text-white">
                <th class="px-4 h-10">No.</th>
                <th class="px-12 border-r-2 border-gray-700">Nama</th>
                <th class="px-16 border-r-2 border-gray-700">Alamat</th>
                <th class="px-12 border-r-2 border-gray-700">No.tlp</th>
                <th class="px-12 w-20"></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = ( $items->currentPage() - 1 ) * $items->PerPage() + 1
            @endphp
            @foreach ($items as $item)
            <tr class="h-12 text-center text-gray-700
            @if ($i%2 == 0)
                bg-blue-50
            @endif
            ">
                <td>{{$i}}.</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->tlp }}</td>
                <td style="user-select: none;">
                    <button id="showUpdate{{ $item->id }}" class="font-semibold px-1 text-lg text-green-400 hover:text-green-300 duration-100">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button id="showDelete{{ $item->id }}" class="font-semibold px-1 text-lg text-red-400 hover:text-red-300 duration-100">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

<div class="m-4 rounded-xl overflow-hidden bg-white w-max shadow-xl flex items-center text-gray-600">
    @if ( $items->currentPage() == 1 )
    <span class="p-4 text-white bg-gray-400"><i class="fas fa-chevron-left"></i></span>
    @else
    <a class="p-4 text-white bg-gray-600" href="{{ $items->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a>
    @endif

    <div class="w-28 h-full flex justify-center items-center text-xl font-semibold">
        @if ($items->currentPage() == 1)
        <span class="text-blue-400">1</span>
        <div class="mx-4">...</div>
        <span>{{ $items->lastPage() }}</span>
        @elseif ($items->currentPage() == $items->lastPage() )
        <span>1</span>
        <div class="mx-4">...</div>
        <span class="text-blue-400">{{ $items->lastPage() }}</span>
        @else
        <span>1</span>
        <span class="text-blue-400 mx-4">{{ $items->currentPage() }}</span>
        <span>{{ $items->lastPage() }}</span>
        @endif
    </div>

    @if ( $items->currentPage() == $items->lastPage() )
    <span class="p-4 text-white bg-gray-400"><i class="fas fa-chevron-right"></i></span>
    @else
    <a class="p-4 text-white bg-gray-600" href="{{ $items->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a>
    @endif
</div>

<div class="m-4 rounded-xl">
    
</div>
@endif


      
@endsection
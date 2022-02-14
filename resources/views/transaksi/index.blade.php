@extends('layouts.app')

@section('content')

    {{-- Heading --}}
    <div class="flex flex-col md:flex-row m-4 min-h-max">
        @include('outlet.create')<div class="mt-4 md:mt-0 md:ml-4 rounded-xl w-full md:w-1/2 h-max md:h-auto flex flex-col justify-between">

            {{-- Quick Button --}}
            <div class="md:h-full bg-white shadow-xl mb-4 rounded-xl text-gray-600">
                <div class="flex items-center mt-8 ml-10">
                    <span class="mr-2 text-xl font-semibold">Status:</span>
                    <span class="font-semibold bg-green-300 py-1 px-3 rounded-full uppercase">proses</span>
                </div>
                <div class="flex items-center my-4 ml-10">
                    <span class="mr-2 text-xl font-semibold">Total Bayar:</span>
                    <span class="text-2xl font-bold">Rp.100000</span>
                </div>
            </div>
        
            <div>
                {{-- Search | tampilan doang :D --}}
                <form class="w-full flex rounded-xl overflow-hidden shadow-xl transform hover:-translate-y-1 hover:shadow-2xl duration-300">
                    <input type="text" placeholder="Search" class="w-full pl-4" title="ga bisa di pake :D">
                    <div class="bg-gray-600 w-0.5"></div>
                    <button class="text-gray-600 py-2 px-4 bg-white" title="ga bisa di pake :D"><i class="fas fa-search"></i></button>
                </form>
            
                {{-- Links --}}
                @if ( $items->lastPage() !== 1 )
                    <div class="rounded-xl overflow-hidden bg-white w-full flex items-center justify-between text-gray-600 shadow-xl mt-4">
                        
                        {{-- Left Arrow Button --}}
                        @if ( $items->currentPage() == 1 )
                            <span class="p-3 text-white bg-gray-400"><i class="fas fa-chevron-left"></i></span>
            
                        @else
                            <a class="p-3 text-white bg-gray-600 hover:bg-gray-500 duration-100" href="{{ $items->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a>
            
                        @endif
            
                        {{-- Link Numbers --}}
                        <div class="w-24 h-full flex justify-center items-center font-semibold">
                            @if ($items->currentPage() == 1)
                                <span class="text-blue-400 mr-2">1</span>
                                @if ($items->lastPage() > 2)
                                    <span class="mx-4" id="dot-search">
                                        <input class="w-3 font-semibold" type="text" onkeypress="return num(event)"  maxlength="1" value="..." title="ga bisa di pake :D">
                                    </span>
                                @endif
                                <a href="?page={{ $items->lastPage() }}" class="ml-2">{{ $items->lastPage() }}</a>
                        
                            @elseif ($items->currentPage() == $items->lastPage() )
                                <a href="?page=1" class="mr-2">1</a>
                                @if ($items->lastPage() > 2)
                                    <span class="mx-4" id="dot-search">
                                        <input class="w-3 font-semibold" type="text" onkeypress="return num(event)"  maxlength="1" value="..." title="ga bisa di pake :D">
                                    </span>
                                @endif
                                <span class="text-blue-400 ml-2">{{ $items->lastPage() }}</span>
                        
                            @else
                                <a href="?page=1" class="mr-2">1</a>
                                @if ($items->lastPage() > 2)
                                    <span class="text-blue-400 mx-4" id="dot-search">
                                        <input class="w-3 font-semibold" type="text" onkeypress="return num(event)"  maxlength="1" value="{{ $items->currentPage() }}" title="ga bisa di pake :D">
                                    </span>
                                @endif
                                <a href="?page={{ $items->lastPage() }}" class="ml-2">{{ $items->lastPage() }}</a>
                        
                            @endif
                        </div>
            
                        {{-- Right Arrow Button --}}
                        @if ( $items->currentPage() == $items->lastPage() )
                            <span class="p-3 text-white bg-gray-400"><i class="fas fa-chevron-right"></i></span>
            
                        @else
                            <a class="p-3 text-white bg-gray-600 hover:bg-gray-500 duration-100" href="{{ $items->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a>
                        
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Table --}}
    @if ($items->count() < 1)
        <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
            <table class="bg-white rounded-xl overflow-hidden min-w-full">
                <thead class="bg-gray-700">
                    <tr class="text-white">
                        <th class="h-10">No.</th>
                        <th class=" border-r-2 border-gray-700">Nama</th>
                        <th class=" border-r-2 border-gray-700">Alamat</th>
                        <th class=" border-r-2 border-gray-700">No. Telp</th>
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
    @else
        {{-- <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
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
                    @foreach ($items as $item)
                    <tr class="h-12 text-center text-gray-700 {{ ( $loop->index%2 == 1) ? 'bg-blue-50' : '' }}">
                        <td>{{ ($items->currentpage()-1) * $items->perpage() + $loop->index + 1 }}.</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->tlp }}</td>
                        <td style="user-select: none;">
                            <button id="update-btn-{{ $item->getKey() }}" class="font-semibold px-1 text-lg text-green-400 hover:text-green-300 duration-100">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button id="delete-btn-{{ $item->getKey() }}" class="font-semibold px-1 text-lg text-red-400 hover:text-red-300 duration-100">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
        
    @endif
    
@endsection
@extends('layouts.app')

@section('content')

    {{-- CRUD Modals --}}
    @foreach ($items as $item)
        @include('paket.update')
        @include('paket.delete')
    @endforeach

    {{-- Heading --}}
    <div class="flex flex-col md:flex-row m-4 min-h-max">
        @include('paket.create')
        @include('layouts.tools')
    </div>

    {{-- Table --}}
    @if ($items->count() < 1)
        <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
            <table class="bg-white rounded-xl overflow-hidden min-w-full">
                <thead class="bg-gray-700">
                    <tr class="text-white">
                        <th class="h-10">No.</th>
                        <th class="border-r-2 border-gray-700">Outlet</th>
                        <th class="border-r-2 border-gray-700">Jenis</th>
                        <th class="border-r-2 border-gray-700">Nama Paket</th>
                        <th class="border-r-2 border-gray-700">Harga</th>
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
        <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
            <table class="bg-white rounded-xl overflow-hidden min-w-full">
                <thead class="bg-gray-700">
                    <tr class="text-white">
                        <th class="px-4 h-10">No.</th>
                        <th class="border-r-2 border-gray-700">Outlet</th>
                        <th class="border-r-2 border-gray-700">Jenis</th>
                        <th class="border-r-2 border-gray-700">Nama Paket</th>
                        <th class="border-r-2 border-gray-700">Harga</th>
                        <th class="px-12 w-20"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr class="h-12 text-center text-gray-700 {{ ($loop->index%2 == 1) ? 'bg-blue-50' : '' }}">
                        <td>{{ ($items->currentpage()-1) * $items->perpage() + $loop->index + 1 }}.</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @if ($item->jenis == 'kiloan')
                                Kiloan
                            @elseif ($item->jenis == 'selimut')
                                Selimut
                            @elseif ($item->jenis == 'bed_cover')
                                Bed Cover
                            @elseif ($item->jenis == 'kaos')
                                Kaos
                            @elseif ($item->jenis == 'lain')
                                Lain lain
                            @endif
                        </td>
                        <td>{{ $item->nama_paket }}</td>
                        <td>{{ $item->harga }}</td>
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
        </div>
        
    @endif
    
@endsection

@push('script')
    {{-- Number Only Function --}}
    <script>
        function num(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
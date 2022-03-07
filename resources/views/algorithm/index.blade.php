@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row m-4 min-h-max justify-center">
        {{-- create modal --}}
        <div class="overflow-x-scroll rounded-xl shadow-xl w-full h-max md:w-1/2">
            <form action="" method="post" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
                @csrf
        
                <table class="w-full">
                    <tr>
                        <td>
                            <label class="font-bold text-2xl text-gray-600" for="nama">Nama</label>
                        </td>
                        <td class="h-8 flex items-end justify-end">
                            @error('nama')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama" value="{{ old('nama') }}">
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                            <label class="font-bold text-2xl text-gray-600" for="email">Email</label>
                        </td>
                        <td class="h-8 flex items-end justify-end">
                            @error('email')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="email" name="email" id="email" autocomplete="off" placeholder="Masukan Email" value="{{ old('email') }}">
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                            <label class="font-bold text-2xl text-gray-600" for="jenis_kelamin">Jenis Kelamin</label>
                        </td>
                        <td class="h-8 flex items-end justify-end">
                            @error('jenis_kelamin')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="outline-none w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>
                
                <div class="flex">
                    <button class="px-3 py-2 rounded-md bg-yellow-400 hover:bg-yellow-300 duration-100 font-semibold text-white mr-2" type="reset">Reset</button>
                    <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
                </div>
            
            </form>
            
        </div>
    </div>

    {{-- table --}}
    {{-- @if ($items->count() < 1) --}}
        {{-- <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
            <table class="bg-white rounded-xl overflow-hidden min-w-full">
                <thead class="bg-gray-700">
                    <tr class="text-white">
                        <th class="h-10">No.</th>
                        <th class=" border-r-2 border-gray-700">Nama</th>
                        <th class=" border-r-2 border-gray-700">Alamat</th>
                        <th class=" border-r-2 border-gray-700">Jenis Kelamin</th>
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
        </div> --}}
    {{-- @else --}}
        <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
            <table id="tbl-simulasi" class="bg-white rounded-xl overflow-hidden min-w-full">
                <thead class="bg-gray-700">
                    <tr class="text-white">
                        <th class="px-4 h-10">No.</th>
                        <th class="border-r-2 border-gray-700">Nama</th>
                        <th class="border-r-2 border-gray-700">Email</th>
                        <th class="border-r-2 border-gray-700">Jenis Kelamin</th>
                        <th class="px-12 w-20"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($items as $item) --}}
                    <tr class="h-12 text-center text-gray-700 {{-- ($loop->index%2==1)?'bg-blue-50':'' --}}">
                        <td>{{-- ($items->currentpage()-1)*$items->perpage()+$loop->index+1 --}}.</td>
                        <td>{{-- $item->nama --}}</td>
                        <td>{{-- $item->email --}}</td>
                        <td>{{-- $item->jenis_kelamin --}}</td>
                        <td style="user-select: none;">
                            <button id="update-btn-{{-- $item->getKey() --}}" class="font-semibold px-1 text-lg text-green-400 hover:text-green-300 duration-100">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button id="delete-btn-{{-- $item->getKey() --}}" class="font-semibold px-1 text-lg text-red-400 hover:text-red-300 duration-100">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
        
    {{-- @endif --}}
@endsection

@push('script')
    $(function(){
        
    })
@endpush
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
                            <label class="font-bold text-2xl text-gray-600" for="alamat">Alamat</label>
                        </td>
                        <td class="h-8 flex items-end justify-end">
                            @error('alamat')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukan Alamat" value="{{ old('alamat') }}">
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
                
                <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
            
            </form>
            
        </div>
    </div>

    {{-- table --}}
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
@endsection
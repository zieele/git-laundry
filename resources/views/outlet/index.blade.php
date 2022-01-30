@extends('layouts.app')

{{-- css script --}}
@section('style')
    
@endsection

@section('content')
{{-- tools --}}
<div class="m-4 flex justify-between">
    {{-- create  button --}}
    <div>
        <button class="py-2 px-3 bg-blue-400 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-300 transform hover:-translate-y-1 duration-100">
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
            <tr class="h-12 text-center text-gray-700">
                <td>1.</td>
                <td>Ziel Alfino Akbar</td>
                <td>Cipanas, Cianjur, Jawa Barat, Indonesia</td>
                <td>081298762345</td>
                <td>
                    <a href="" class="font-semibold px-1 text-lg text-green-400 hover:text-green-300 duration-100"><i class="fas fa-edit"></i></a>
                    <a href="" class="font-semibold px-1 text-lg text-red-400 hover:text-red-300 duration-100"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr class="h-12 text-center text-gray-700 bg-blue-50">
                <td>2.</td>
                <td>Byandra Andyesa Syafirllah</td>
                <td>..., Bekasi, Jawa Barat, Indonesia</td>
                <td>081298762345</td>
                <td>
                    <a href="" class="font-semibold px-1 text-lg text-green-400 hover:text-green-300 duration-100"><i class="fas fa-edit"></i></a>
                    <a href="" class="font-semibold px-1 text-lg text-red-400 hover:text-red-300 duration-100"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
      {{-- @if ( $items->count() < 1 )
      <tbody>
        <tr>
          <td class="text-center bg-gray-100 h-16  text-gray-400" colspan="7">data kosong</td>
        </tr>
      </tbody>
      @else
      <tbody id="tableBarang">
        @php
            $i = ( $items->currentPage() - 1 ) * 15 + 1
        @endphp
        @foreach ($items as $item)
        <tr class="
        @if ($i%2 == 1)
          bg-gray-100
        @endif
        ">
          <td class="text-center border-r-2 border-gray-800">{{ $i }}.</td>
          <td class="text-center border-r-2 border-gray-800">{{ $item->kode_barang }}</td>  
          <td class="text-center border-r-2 border-gray-800">{{ $item->nama_barang }}</td>
          <td class="text-center border-r-2 border-gray-800">{{ $item->satuan }}</td>
          <td class="text-center border-r-2 border-gray-800">{{ $item->stok }}</td>
          <td class="text-center border-r-2 border-gray-800 p-2">
            <form action="">
              @csrf
              <label class="switch">
                <input type="checkbox" data-id="{{ $item->id }}" class="cekBarang" {{ $item->status==1?"checked":"" }}>
                <span class="slider round"></span>
              </label>
            </form>
          </td>
          <td class="text-center border-r-2 border-gray-800">{{ $item->harga_jual }}</td>
          <td class="text-center flex justify-evenly h-8">
            <button type="button" id="edit{{ $item->id }}" class="text-green-400 hover:text-green-300 duration-150"><i class="fas fa-pen"></i></button>
            <button type="button" id="delete{{ $item->id }}" class="text-red-400 hover:text-red-300 duration-150"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        @php
            $i++;
        @endphp
        @endforeach
      </tbody>
      @endif --}}
    {{-- </table> --}}
    {{-- @if ($items->lastPage() > 1)
    <div class="mt-8 mx-2">
      {{ $items->links() }}
    </div>
    @else
    <div class="mt-4"></div>
    @endif --}}
@endsection

{{-- js script --}}
@push('script')
    
@endpush
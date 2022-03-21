@extends('layouts.app')

@section('content')

    {{-- Modals --}}
    @include('penjemputan.create')
    @foreach ($items as $item)
        @include('penjemputan.update')
        @include('penjemputan.delete')
    @endforeach
    @include('layouts.export')

    {{-- buttons --}}
        <div class="m-4 flex">
            <button type="button" onclick="createModal()" class="mr-2 px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white">
                <i class="fas fa-plus"></i>
                <span class="ml-2">Tambah Data</span>
            </button>
            <button type="button" onclick="exportModal()" class="mr-2 px-3 py-2 rounded-md bg-green-400 hover:bg-green-300 duration-100 font-semibold text-white">
                <i class="fas fa-download"></i>
                <span class="ml-2">Export</span>
            </button>
            <form method="post" action="{{ $export }}/import/xls" enctype="multipart/form-data">
                {{ csrf_field() }}
                <button type="button"onclick="$('#getFile').click()" class="mr-2 px-3 py-2 rounded-md bg-cyan-400 hover:bg-cyan-300 duration-100 font-semibold text-white">
                    <i class="fas fa-upload"></i>
                    <span class="ml-2">Import</span>
                </button>
                <input id="getFile" type="file" name="file" onchange="form.submit()" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="hidden">
            </form>
        </div>
    {{-- Table --}}
        <div class="m-4 p-4 overflow-x-scroll rounded-xl shadow-xl bg-white">   
            <table id="tbl-penjemputan">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Tlp</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($items as $item)
                    <tr>
                        {{-- {{ dd($item) }} --}}
                        <td>{{ $loop->index+1 }}.</td>
                        <td>{{ $item->nama_member }}</td>
                        <td>{{ $item->alamat_member }}</td>
                        <td>{{ $item->tlp_member }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <form action="{{ route('penjemputan.update', $item->getKey()) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id_outlet" value="{{ $item->id_outlet }}">
                                <select class="appearance-none" name="status" onchange="form.submit()">
                                    <option {{ $item->status === 'tercatat' ? 'selected':'' }} value="tercatat">Tercatat</option>
                                    <option {{ $item->status === 'penjemputan' ? 'selected':'' }} value="penjemputan">Penjemputan</option>
                                    <option {{  $item->status === 'selesai' ? 'selected':'' }} value="selesai">Selesai</option>
                                </select>
                            </form>
                        </td>
                        <td style="user-select: none;">
                            <button class="font-semibold px-1 text-lg text-green-400 hover:text-green-300 duration-100" onclick="updateModal{{ $item->getKey() }}()">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="font-semibold px-1 text-lg text-red-400 hover:text-red-300 duration-100" onclick="deleteModal{{ $item->getKey() }}()">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
    
@endsection

@push('script')
    {{-- Number Only Function --}}
    <script>
        $('#tbl-penjemputan').DataTable({
            "responsive": true,
            "bLengthChange": false,
            "bInfo": false, 
            // "ordering": false,
            "bAutoWidth": false 
        })

        function num(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
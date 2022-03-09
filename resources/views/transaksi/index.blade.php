@extends('layouts.app')

@section('content')

    <div>
        <ul>
            <li><a href="#data-laundry">Data Laundry</a></li>
            <li><a href="#form-laundry"><i class="fas fa-plus"></i><span>Cucian Baru</span></a></li>
        </ul>
        <form action="{{ route('transaksi.store') }}" method="post">
            @csrf
            @include('transaksi.form')
            @include('transaksi.data')
            <input type="hidden" name="id_member" id="member-id">
        </form>
    </div>
    @error('id_member')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
    @error('tgl')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
    @error('batas_waktu')
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
    
@endsection

@push('script')
    <script>
        // $('#data-laundry').collapse('show')

        // $('#data-laundry').on('show.bs.collapse', function(){
        //     $('#form-laundry').collapse('hide');
        //     $('#nav-form').removeClass('active');
        //     $('#nav-data').addClass('active');
        // })

        // $('#data-laundry').on('show.bs.collapse', function(){
        //     $('#form-laundry').collapse('hide');
        //     $('#nav-data').removeClass('active');
        //     $('#nav-form').addClass('active');
        // })
    </script>
@endpush
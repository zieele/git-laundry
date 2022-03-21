@extends('layouts.app')

@section('content')

    <form action="{{ route('transaksi.store') }}" method="post">
        @csrf
        @include('transaksi.form')
        @include('transaksi.data')
        <input type="hidden" name="id_member" id="member-id">
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span class="text-sm text-red-600">{{ $error }}</span>
        @endforeach    
    @endif
    
@endsection
@extends('layouts.app')

{{-- css script --}}
@section('style')
    
@endsection

@section('content')
{{-- blank card --}}
<div class="flex justify-center items-center m-4 rounded-xl overflow-hidden shadow-md hover:shadow-xl transform hover:-translate-y-1 duration-300 bg-white"
style="min-height: 16rem;">
    <a href="" class="w-full h-full flex flex-col justify-center items-center"
    style="min-height: 16rem;"
    title="ini dibikin biar bisa di pencet, tapi ini ga bisa di pencet. cuman prototype aja :D">
        <div class="max-w-2xl flex flex-col justify-center items-center">
            <span class="font-bold text-3xl text-gray-600">Hemlo World</span>
        </div>
    </a>
</div>

{{-- pic card --}}
<div class="flex justify-center items-center m-4 rounded-xl bg-cover bg-center overflow-hidden shadow-md hover:shadow-xl transform hover:-translate-y-1 duration-300"
style="
background-image: url('https://wallpapercave.com/wp/wp6980738.jpg');
min-height: 16rem;">
    <a href="" class="w-full h-full flex flex-col justify-center items-center"
    style="
    background: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
    min-height: 16rem;" 
    title="ini dibikin biar bisa di pencet, tapi ini ga bisa di pencet. cuman prototype aja :D">
        <div class="max-w-2xl flex flex-col justify-center items-center">
            <span class="font-bold text-3xl text-gray-200">This Is Card</span>
        </div>
    </a>
</div>

{{-- paragraph card --}}
<div class="flex justify-center items-center m-4 rounded-xl overflow-hidden shadow-md bg-white"
style="min-height: 16rem;">
    <div class="w-full h-full flex flex-col justify-center items-center py-4">
        <div class="max-w-2xl flex flex-col justify-center items-center">
            <span class="font-bold text-3xl text-gray-600">Lorem Ipsum Dolor</span>
            <span class="text-center m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, sapiente harum voluptatum a perferendis eos explicabo veniam dolorum eaque iste ullam voluptate aut excepturi? Voluptatum perferendis, accusamus hic nisi dolores odit aut vel dolorum, repellendus ullam eligendi ipsam voluptates, molestiae quae. Labore corporis consequatur hic dolorum veniam! Incidunt, impedit eos.</span>
        </div>
    </div>
</div>
@endsection

{{-- js script --}}
@push('script')
    
@endpush
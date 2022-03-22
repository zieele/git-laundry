<!doctype html>
<html lang="en">

<head>
    {{-- meta tags --}}
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ $title ?? 'Index'}} | git-laundry</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- awesome font --}}
    	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    {{-- font --}}
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    {{-- css style --}}
    @stack('style')
    <style>
		/*Overrides for Tailwind CSS */

		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .5rem;
			/*pl-2*/
			padding-bottom: .5rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .25rem;
			border-color: #edf2f7;
			/*border-gray-200*/
			background-color: #edf2f7;
			/*bg-gray-200*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #60a5fa !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #60a5fa !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}
    </style>
</head>

<body class="w-full bg-blue-50">
	<div class="fixed w-full flex justify-center z-50">
		@if ($message = Session::get('success'))
			<div id="msg" class="px-4 py-2 bg-blue-50 font-semibold text-gray-600 rounded-xl border-2 border-gray-800 shadow-lg mt-2 duration-500">
				<span class="ml-1">{{ $message }}</span>
				<button onclick="$('#msg').remove()" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
			</div>
			@push('script')
				<script>
					setTimeout(() => {
						$('#msg').addClass('opacity-0')
					}, 3000);
					setTimeout(() => {
						$('#msg').remove('')
					}, 3500);
				</script>
			@endpush
		@endif
		
		@if($errors->any())
			@foreach ($errors->all() as $message)
				<div id="err{{ $loop }}" class="px-4 py-2 bg-red-100 font-semibold text-stone-600 rounded-xl border-2 border-stone-600 shadow-lg mt-2">
					<span class="ml-1">{{ $message }}</span>
					<button onclick="$('#err{{ $loop }}').remove()" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
				</div>
				@push('script')
					<script>
						setTimeout(() => {
							$('#err{{ $loop }}').addClass('opacity-0')
						}, 3000);
						setTimeout(() => {
							$('#err{{ $loop }}').remove('')
						}, 3500);
					</script>
				@endpush
			@endforeach
		@endif
	</div>

    {{-- layouts --}}
    @include('layouts.header')
    @include('layouts.sidebar')

    {{-- content --}}
    <div class="pt-20 pb-10 lg:pl-64 xl:pl-96 min-h-screen">
        @yield('content')
    </div>

    @include('layouts.footer')
    
    {{-- js script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    {{-- <script src="{{asset('assets/jquery.js')}}"></script>
    <script src="{{asset('assets/datatable.js')}}"></script> --}}
    @stack('script')
</body>
</html>
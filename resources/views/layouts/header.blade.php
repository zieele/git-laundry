<div id="nav" class="fixed h-20 w-full bg-blue-400 flex justify-center items-center lg:pl-64 xl:pl-96 z-10 shadow-lg">
    <button id="sidebar-btn" class="absolute left-6 h-8 w-8 rounded-full lg:hidden">
        <span class="text-blue-50 font-bold text-2xl flex justify-center"><i class="fas fa-bars"></i></span>
    </button>
    @if ($title == 'Dashboard')
    <a id="ltext" class="text-blue-50 text-2xl">Git-Laundry</a>
    @else
    <a href="/" id="ltext" class="text-blue-50 text-2xl">Git-Laundry</a>
    @endif
    {{-- <a href="login" class="font-semibold text-blue-50 text-lg absolute right-6 hidden lg:block"><i class="fas fa-sign-out-alt"></i> Log In</a>
    <form action="logout" method="post" class="absolute right-32 hidden lg:block">
        @csrf
        <button type="submit" class="font-semibold text-blue-50 text-lg"><i class="fas fa-sign-out-alt"></i> Log Out</button>
    </form> --}}
</div>
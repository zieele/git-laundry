<div id="sidebar" class="fixed w-full h-full duration-500 transform -translate-x-full z-40 lg:block lg:-translate-x-0 lg:w-64 xl:w-96">
    <div id="bodySidebar" class="w-64 h-full bg-blue-50 lg:bg-white fixed flex flex-col text-gray-600 shadow-2xl lg:shadow-lg lg:w-64 xl:w-96 justify-between lg:justify-start">

        {{-- sidebar header --}}
        <div class="flex items-center p-4 h-20 bg-gray-700 text-gray-200">
            {{-- @if (auth()->role = 'admin') --}}
                <div class="h-12 w-12 bg-red-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold">
                    {{-- @php
                        dd(auth()->user());
                    @endphp --}}
                    {{-- @if (Auth()->user()->role = 'admin')
                        admin
                    @elseif (Auth()->user()->role = 'kasir')
                        kasir
                    @elseif (Auth()->user()->role = 'owner')
                        owner
                    @else
                        guest
                    @endif --}}
                </span>
            {{-- @elseif (auth()->role = 'kasir')
                <div class="h-12 w-12 bg-yellow-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold">Kasir</span>
            @elseif (auth()->role = 'owner')
                <div class="h-12 w-12 bg-green-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold">Owner</span>
            @else
                <div class="h-12 w-12 bg-gray-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold">Guest</span>
            @endif --}}
            <button id="close-sidebar-btn" class="absolute right-4 text-3xl h-8 w-8 flex justify-center items-center rounded-full duration-700 transform -translate-x-8 rotate-90 lg:hidden">
                <i class="fas fa-times"></i>
            </button>
        </div>

        {{-- hyperlinnk list --}}
        <div class="flex flex-col mt-8 h-3/4 lg:h-auto">

            {{-- first category --}}
            <div class="mb-4">
                <span class="font-bold text-xl ml-2">Category 1</span>
                @if ($title == 'Daftar Outlet')
                <a class="bg-blue-200 lg:bg-blue-100 rounded-xl m-2 p-4 flex">
                    <div class="w-8"><i class="fas fa-plus"></i></div>
                    <span class="font-semibold">Outlet</span>
                </a>
                @else
                <a href="outlet" class="bg-blue-100 lg:bg-blue-50 rounded-xl m-2 p-4 flex hover:bg-blue-200 hover:lg:bg-blue-100 duration-100">
                    <div class="w-8"><i class="fas fa-plus"></i></div>
                    <span class="font-semibold">Outlet</span>
                </a>
                @endif

                @if ($title == 'Daftar Member')
                <a class="bg-blue-200 lg:bg-blue-100 rounded-xl m-2 p-4 flex">
                    <div class="w-8"><i class="fas fa-user-plus"></i></div>
                    <span class="font-semibold">Member</span>
                </a>
                @else
                <a href="member" class="bg-blue-100 lg:bg-blue-50 rounded-xl m-2 p-4 flex hover:bg-blue-200 hover:lg:bg-blue-100 duration-100">
                    <div class="w-8"><i class="fas fa-user-plus"></i></div>
                    <span class="font-semibold">Member</span>
                </a>
                @endif

                @if ($title == 'Daftar Paket')
                <a class="bg-blue-200 lg:bg-blue-100 rounded-xl m-2 p-4 flex">
                    <div class="w-8"><i class="fas fa-box"></i></div>
                    <span class="font-semibold">Paket</span>
                </a>
                @else
                <a href="paket" class="bg-blue-100 lg:bg-blue-50 rounded-xl m-2 p-4 flex hover:bg-blue-200 hover:lg:bg-blue-100 duration-100">
                    <div class="w-8"><i class="fas fa-box"></i></div>
                    <span class="font-semibold">Paket</span>
                </a>
                @endif

                @if ($title == 'Daftar Barang')
                <a class="bg-blue-200 lg:bg-blue-100 rounded-xl m-2 p-4 flex">
                    <div class="w-8"><i class="fas fa-box"></i></div>
                    <span class="font-semibold">Barang</span>
                </a>
                @else
                <a href="barang" class="bg-blue-100 lg:bg-blue-50 rounded-xl m-2 p-4 flex hover:bg-blue-200 hover:lg:bg-blue-100 duration-100">
                    <div class="w-8"><i class="fas fa-box"></i></div>
                    <span class="font-semibold">Barang</span>
                </a>
                @endif
            </div>

            {{-- second category --}}
            <div class="mb-4">
                <span class="font-bold text-xl ml-2">Category 2</span>
                @if ($title == 'Page Transaksi')
                <a class="bg-blue-200 lg:bg-blue-100 rounded-xl m-2 p-4 flex">
                    <div class="w-8"><i class="fas fa-money-check-alt"></i></div>
                    <span class="font-semibold">Transaksi</span>
                </a>
                @else
                <a href="transaksi" class="bg-blue-100 lg:bg-blue-50 rounded-xl m-2 p-4 flex hover:bg-blue-200 hover:lg:bg-blue-100 duration-100">
                    <div class="w-8"><i class="fas fa-money-check-alt"></i></div>
                    <span class="font-semibold">Transaksi</span>
                </a>
                @endif
            </div>

        </div>

        {{-- sidebar footer --}}
        <div class="flex items-center p-4 bg-gray-700 text-gray-200 lg:hidden">
            <span class="font-semibold"><i class="fas fa-sign-out-alt"></i> Login</span>
            <form action="logout" method="post">
                @csrf
                <button type="submit" class="font-semibold"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </div>
    </div>
</div>

@push('script')
<script>
    window.addEventListener('DOMContentLoaded', () =>{
        const body = document.querySelector('body')
        const sidebarBtn = document.querySelector('#sidebar-btn')
        const closeBtn = document.querySelector('#close-sidebar-btn')
        const sidebar = document.querySelector('#sidebar')

        const toggleSidebar = () => {
            sidebar.classList.toggle('-translate-x-full')
            closeBtn.classList.toggle('rotate-90')
            closeBtn.classList.toggle('-translate-x-8')
            body.classList.toggle('overflow-y-hidden')
        }
        
        sidebarBtn.addEventListener('click', toggleSidebar)
        closeBtn.addEventListener('click', toggleSidebar)
    })
</script>
@endpush
    <div id="sidebar" class="fixed w-full h-full duration-500 transform -translate-x-full z-50 lg:block lg:-translate-x-0 lg:w-64 xl:w-96">
        <div id="bodySidebar" class="w-64 h-full bg-blue-50 fixed flex flex-col text-gray-600 shadow-2xl lg:w-64 xl:w-96 justify-between lg:justify-start">

            {{-- sidebar header --}}
            <div class="flex items-center p-4 h-20 bg-gray-700 text-gray-200">
                <div class="h-12 w-12 bg-red-400 rounded-full mr-2"></div>
                <span class="text-lg font-bold">Admin</span>
                <button id="closeSidebar" class="absolute right-4 text-3xl h-8 w-8 flex justify-center items-center rounded-full duration-700 transform -translate-x-8 rotate-90 lg:hidden">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- hyperlinnk list --}}
            <div class="flex flex-col mt-8 h-3/4 lg:h-auto">

                {{-- first category --}}
                <div class="mb-4">
                    <span class="font-bold text-xl ml-2">Category 1</span>
                    <a href="outlet" class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-plus"></i></div>
                        <span class="font-semibold">Tambahkan Outlet</span>
                    </a>
    
                    <a href="member" class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-user-plus"></i></div>
                        <span class="font-semibold">Tambahkan Member</span>
                    </a>
    
                    <a href="paket" class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-box"></i></div>
                        <span class="font-semibold">Tambahkan Paket</span>
                    </a>
                </div>

                {{-- second category --}}
                <div class="mb-4">
                    <span class="font-bold text-xl ml-2">Category 2</span>
                    <a href="transaksi" class="bg-blue-100 rounded-xl m-2 p-4 flex hover:bg-blue-200 duration-100">
                        <div class="w-8"><i class="fas fa-money-check-alt"></i></div>
                        <span class="font-semibold">Transaksi</span>
                    </a>
                </div>

            </div>

            {{-- sidebar footer --}}
            <div class="flex items-center p-4 bg-gray-700 text-gray-200 lg:hidden">
                <span class="font-semibold"><i class="fas fa-sign-out-alt"></i> Logout</span>
            </div>
        </div>
    </div>
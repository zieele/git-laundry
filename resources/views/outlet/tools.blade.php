<div class="mt-4 md:mt-0 md:ml-4 rounded-xl w-full md:w-1/2 h-max md:h-auto flex flex-col justify-between">

    {{-- Quick Button --}}
    <div class="md:h-full bg-white shadow-xl mb-4 rounded-xl flex flex-col justify-evenly items-center">

        <div class="mt-6 md:my-0 font-bold text-2xl text-gray-600">
            <span>Quick Button</span>
        </div>

        <div class="flex justify-evenly items-center w-full">

            <button class="my-6 md:my-0 w-20 h-20 md:w-24 md:h-24 xl:w-32 xl:h-32 bg-green-400 flex flex-col items-center justify-center rounded-xl text-white hover:bg-green-300 duration-100" title="ga bisa di pake :D">
                <span class="text-xl md:text-2xl xl:text-3xl"><i class="fas fa-upload"></i></span>
                <span class="font-semibold text-sm md:text-md xl:text-lg">Export</span>
            </button>

            <button class="my-6 md:my-0 w-20 h-20 md:w-24 md:h-24 xl:w-32 xl:h-32 bg-blue-400 flex flex-col items-center justify-center rounded-xl text-white hover:bg-blue-300 duration-100" title="ga bisa di pake :D">
                <span class="text-xl md:text-2xl xl:text-3xl"><i class="fas fa-download"></i></span>
                <span class="font-semibold text-sm md:text-md xl:text-lg">Import</span>
            </button>

            <button class="my-6 md:my-0 w-20 h-20 md:w-24 md:h-24 xl:w-32 xl:h-32 bg-red-400 flex flex-col items-center justify-center rounded-xl text-white hover:bg-red-300 duration-100" title="ga bisa di pake :D">
                <span class="text-xl md:text-2xl xl:text-3xl"><i class="fas fa-trash"></i></span>
                <span class="font-semibold text-sm md:text-md xl:text-lg">Drop</span>
            </button>

        </div>
    </div>

    <div>
        {{-- Search | tampilan doang :D --}}
        <form class="w-full flex rounded-xl overflow-hidden shadow-xl transform hover:-translate-y-1 hover:shadow-2xl duration-300">
            <input type="text" placeholder="Search" class="w-full pl-4" title="ga bisa di pake :D">
            <div class="bg-gray-600 w-0.5"></div>
            <button class="text-gray-600 py-2 px-4 bg-white" title="ga bisa di pake :D"><i class="fas fa-search"></i></button>
        </form>
    
        {{-- Links --}}
        @if ( $items->lastPage() !== 1 )
            <div class="rounded-xl overflow-hidden bg-white w-full flex items-center justify-between text-gray-600 shadow-xl mt-4">
                
                {{-- Left Arrow Button --}}
                @if ( $items->currentPage() == 1 )
                    <span class="p-3 text-white bg-gray-400"><i class="fas fa-chevron-left"></i></span>
    
                @else
                    <a class="p-3 text-white bg-gray-600 hover:bg-gray-500 duration-100" href="{{ $items->previousPageUrl() }}"><i class="fas fa-chevron-left"></i></a>
    
                @endif
    
                {{-- Link Numbers --}}
                <div class="w-24 h-full flex justify-center items-center font-semibold">
                    @if ($items->currentPage() == 1)
                        <span class="text-blue-400 mr-2">1</span>
                        @if ($items->currentPage() > 2)
                            <span class="mx-4" id="dot-search">
                                <input class="w-3 font-semibold" type="text" onkeypress="return num(event)"  maxlength="1" value="..." title="ga bisa di pake :D">
                            </span>
                        @endif
                        <a href="?page={{ $items->lastPage() }}" class="ml-2">{{ $items->lastPage() }}</a>
                
                    @elseif ($items->currentPage() == $items->lastPage() )
                        <a href="?page=1" class="mr-2">1</a>
                        @if ($items->currentPage() > 2)
                            <span class="mx-4" id="dot-search">
                                <input class="w-3 font-semibold" type="text" onkeypress="return num(event)"  maxlength="1" value="..." title="ga bisa di pake :D">
                            </span>
                        @endif
                        <span class="text-blue-400 ml-2">{{ $items->lastPage() }}</span>
                
                    @else
                        <a href="?page=1" class="mr-2">1</a>
                        @if ($items->currentPage() > 2)
                            <span class="text-blue-400 mx-4" id="dot-search">
                                <input class="w-3 font-semibold" type="text" onkeypress="return num(event)"  maxlength="1" value="{{ $items->currentPage() }}" title="ga bisa di pake :D">
                            </span>
                        @endif
                        <a href="?page={{ $items->lastPage() }}" class="ml-2">{{ $items->lastPage() }}</a>
                
                    @endif
                </div>
    
                {{-- Right Arrow Button --}}
                @if ( $items->currentPage() == $items->lastPage() )
                    <span class="p-3 text-white bg-gray-400"><i class="fas fa-chevron-right"></i></span>
    
                @else
                    <a class="p-3 text-white bg-gray-600 hover:bg-gray-500 duration-100" href="{{ $items->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a>
                
                @endif
            </div>
        @endif
    </div>
</div>

{{-- @push('script')
<script>
    window.addEventListener('DOMContentLoaded', () =>{
        const dot = document.querySelector('dot-search')

        const onClick = () => {
            sidebar.classList.toggle('-translate-x-full')
            closeBtn.classList.toggle('rotate-90')
            closeBtn.classList.toggle('-translate-x-8')
            body.classList.toggle('overflow-y-hidden')
        }
        
        sidebarBtn.addEventListener('click', toggleSidebar)
        closeBtn.addEventListener('click', toggleSidebar)
    })
</script>
@endpush --}}
<div id="export-modal" class="z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96 hidden flex-col">
    <div class="flex flex-col items-end bg-white rounded-xl p-4">
        <div class="h-12">
            <button type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300" onclick="exportModal()"><i class="fas fa-times"></i></button>
        </div>
        <div class="flex mb-12 mx-4">
            <a  href="{{ $export }}/export/xls" class="my-6 md:my-0 w-20 h-20 md:w-24 md:h-24 xl:w-32 xl:h-32 bg-blue-400 flex flex-col items-center justify-center rounded-xl text-white hover:bg-blue-300 duration-100 m-5">
                <span class="text-xl md:text-2xl xl:text-3xl"><i class="fas fa-file-pdf"></i></span>
                <span class="font-semibold text-sm md:text-md xl:text-lg">PDF</span>
            </a>
            
            <a  href="{{ $export }}/export/xls" class="my-6 md:my-0 w-20 h-20 md:w-24 md:h-24 xl:w-32 xl:h-32 bg-green-400 flex flex-col items-center justify-center rounded-xl text-white hover:bg-green-300 duration-100 m-5">
                <span class="text-xl md:text-2xl xl:text-3xl"><i class="fas fa-file-excel"></i></span>
                <span class="font-semibold text-sm md:text-md xl:text-lg">Excel</span>
            </a>
        </div>
    </div>
</div>

@push('script')
 <script>
    function exportModal(){
        $('#export-modal').toggleClass('hidden')
        $('#export-modal').toggleClass('flex')
    }    
 </script>
@endpush
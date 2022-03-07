<div id="modal-export" class="z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96 hidden flex-col">
    <div class="flex flex-col items-end">
    <button id="close-export" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
        <div class="flex">
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
     window.addEventListener('DOMContentLoaded', () =>{
         const body = document.querySelector('body')
         const ModalExport = document.querySelector('#modal-export')
         const CloseExport = document.querySelector('#close-export')
         const BtnExport = document.querySelector('#btn-export')

         const ModalToggle = () => {
             body.classList.toggle('overflow-y-hidden')
             ModalExport.classList.toggle('hidden')
             ModalExport.classList.toggle('flex')
         }

         CloseExport.addEventListener('click', ModalToggle)
         BtnExport.addEventListener('click', ModalToggle)
     })
 </script>
@endpush
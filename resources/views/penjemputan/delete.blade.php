<div id="delete-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('penjemputan.destroy', $item->getKey()) }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600">
        @csrf
        @method('DELETE')
        <div class="flex items-center justify-between m-4">
            <span class="font-bold text-2xl">Confirm Delete?</span>
            <button type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300" onclick="deleteeModal{{ $item->getKey() }}()"><i class="fas fa-times"></i></button>
        </div>
        <div class="mx-4"><span>Jika anda menghapus data <span class="text-red-400 font-semibold lowercase">{{strtok( $item->nama , " ")}}</span>, maka data akan dihilangkan dari database.</span></div>
        <div class="flex justify-end items-center m-4 mt-2">
            <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" type="button" onclick="deleteModal{{ $item->getKey() }}()">cancel</button>
            <button class="bg-red-400 hover:bg-red-300 duration-100 py-2 px-4 text-white rounded-lg font-semibold" type="submit">Hapus</button>
        </div>
    </form>
</div>

@push('script')
    <script>
        function deleteModal{{ $item->getKey() }}(){
            $('#delete-modal-{{ $item->getKey() }}').toggleClass('hidden')
            $('#delete-modal-{{ $item->getKey() }}').toggleClass('flex')
        }    
    </script>
@endpush
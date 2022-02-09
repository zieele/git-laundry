<div id="delete-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('member.destroy', $item->getKey()) }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600">
        @csrf
        @method('DELETE')
        <div class="flex items-center justify-between m-4">
            <span class="font-bold text-2xl">Confirm Delete?</span>
            <button id="delete-close-{{ $item->getKey() }}" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
        </div>
        <div class="mx-4"><span>Jika anda menghapus data <span class="text-red-400 font-semibold lowercase">{{strtok( $item->nama , " ")}}</span>, maka data akan dihilangkan dari database.</span></div>
        <div class="flex justify-end items-center m-4 mt-2">
            <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" id="delete-close-{{ $item->getKey() }}-btn" type="button">cancel</button>
            <button class="bg-red-400 hover:bg-red-300 duration-100 py-2 px-4 text-white rounded-lg font-semibold" type="submit">Hapus</button>
        </div>
    </form>
</div>
@push('script')
    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const body = document.querySelector('body')
            const deleteModal{{ $item->getKey() }} = document.querySelector('#delete-modal-{{ $item->getKey() }}')
            const deleteClose{{ $item->getKey() }} = document.querySelector('#delete-close-{{ $item->getKey() }}')
            const deleteCloseBtn{{ $item->getKey() }} = document.querySelector('#delete-close-{{ $item->getKey() }}-btn')
            const deleteBtn{{ $item->getKey() }} = document.querySelector('#delete-btn-{{ $item->getKey() }}')

            const deleteModalToggle = () => {
                body.classList.toggle('overflow-y-hidden')
                deleteModal{{ $item->getKey() }}.classList.toggle('hidden')
                deleteModal{{ $item->getKey() }}.classList.toggle('flex')
            }

            deleteCloseBtn{{ $item->getKey() }}.addEventListener('click', deleteModalToggle)
            deleteClose{{ $item->getKey() }}.addEventListener('click', deleteModalToggle)
            deleteBtn{{ $item->getKey() }}.addEventListener('click', deleteModalToggle)
        })
    </script>
@endpush
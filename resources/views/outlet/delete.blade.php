<div id="delete-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('outlet.destroy', $item->getKey()) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">hapus</button>
        <button id="delete-close-{{ $item->getKey() }}" type="button">cancel</button>
    </form>
</div>
@push('script')
    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const body = document.querySelector('body')
            const deleteModal{{ $item->getKey() }} = document.querySelector('#delete-modal-{{ $item->getKey() }}')
            const deleteClose{{ $item->getKey() }} = document.querySelector('#delete-close-{{ $item->getKey() }}')
            const deleteBtn{{ $item->getKey() }} = document.querySelector('#delete-btn-{{ $item->getKey() }}')

            const deleteModalToggle = () => {
                body.classList.toggle('overflow-y-hidden')
                deleteModal{{ $item->getKey() }}.classList.toggle('hidden')
                deleteModal{{ $item->getKey() }}.classList.toggle('flex')
            }

            deleteClose{{ $item->getKey() }}.addEventListener('click', deleteModalToggle)
            deleteBtn{{ $item->getKey() }}.addEventListener('click', deleteModalToggle)
        })
    </script>
@endpush
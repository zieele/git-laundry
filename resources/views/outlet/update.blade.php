<div id="update-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('outlet.update', $item->getKey()) }}" method="post">
        @csrf
        @method('PATCH')
    
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required placeholder="Tulis Nama" value="{{ $item->nama }}" value="{{ old('nama') }}">
        </div>
    
        <div>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required placeholder="Tulis Alamat" value="{{ $item->alamat }}" value="{{ old('alamat') }}">
        </div>
    
        <div>
            <label for="tlp">No. Tlp</label>
            <input type="year" name="tlp" id="tlp" required placeholder="Tulis No. Tlp" value="{{ $item->tlp }}" value="{{ old('tlp') }}" onkeypress="return num(event)">
        </div>
    
        <button type="submit">Simpan</button>
        <button id="update-close-{{ $item->getKey() }}" type="button">cancel</button>
    
    </form>
</div>

@push('script')
    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const body = document.querySelector('body')
            const updateModal{{ $item->getKey() }} = document.querySelector('#update-modal-{{ $item->getKey() }}')
            const updateClose{{ $item->getKey() }} = document.querySelector('#update-close-{{ $item->getKey() }}')
            const updateBtn{{ $item->getKey() }} = document.querySelector('#update-btn-{{ $item->getKey() }}')

            const updateModalToggle = () => {
                body.classList.toggle('overflow-y-hidden')
                updateModal{{ $item->getKey() }}.classList.toggle('hidden')
                updateModal{{ $item->getKey() }}.classList.toggle('flex')
            }

            updateClose{{ $item->getKey() }}.addEventListener('click', updateModalToggle)
            updateBtn{{ $item->getKey() }}.addEventListener('click', updateModalToggle)
        })
    </script>
@endpush
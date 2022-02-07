<div id="update-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('member.update', $item->getKey()) }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600 p-4">
        @csrf
        @method('PATCH')
        <div class="flex items-center justify-between mb-4">
            <span class="font-bold text-2xl">Ubah Data {{strtok( $item->nama , " ")}}</span>
            <button id="update-close-{{ $item->getKey() }}" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
        </div>

        <div>
            <label class="font-semibold text-lg text-gray-600" for="nama">Nama</label>
            <input class="mb-4 mt-1 outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-full bg-blue-50 rounded-lg px-3 py-2" type="text" name="nama" id="nama" autocomplete="off" required placeholder="Masukan Nama" value="{{ $item->nama }}">
    
            <label class="font-semibold text-lg text-gray-600" for="alamat">Alamat</label>
            <input class="mb-4 mt-1 outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-full bg-blue-50 rounded-lg px-3 py-2" type="text" name="alamat" id="alamat" autocomplete="off" required placeholder="Tulis Alamat" value="{{ $item->alamat }}">
    
            <label class="font-semibold text-2xl text-gray-600" for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="mb-4 mt-1 outline-none shadow-md w-full bg-blue-50 rounded-lg px-3 py-2 appearance-none">
                <option 
                    @if ($item->jenis_kelamin == 'L')
                        selected
                    @endif
                value="L">Laki-Laki</option>
                <option 
                    @if ($item->jenis_kelamin == 'P')
                        selected
                    @endif
                value="P">Perempuan</option>
            </select>
    
            <label class="font-semibold text-lg text-gray-600" for="tlp">No. Tlp</label>
            <input class="mb-4 mt-1 outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-full bg-blue-50 rounded-lg px-3 py-2" type="year" name="tlp" id="tlp" autocomplete="off" required placeholder="Tulis No. Tlp" value="{{ $item->tlp }}"  onkeypress="return num(event)">
        </div>

        <div class="flex justify-end items-center mt-2">
            <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" id="update-close-{{ $item->getKey() }}-btn" type="button">cancel</button>
            <button class="bg-green-400 hover:bg-green-300 duration-100 py-2 px-4 text-white rounded-lg font-semibold" type="submit">Ubah</button>
        </div>
    </form>
</div>

@push('script')
    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const body = document.querySelector('body')
            const updateModal{{ $item->getKey() }} = document.querySelector('#update-modal-{{ $item->getKey() }}')
            const updateClose{{ $item->getKey() }} = document.querySelector('#update-close-{{ $item->getKey() }}')
            const updateCloseBtn{{ $item->getKey() }} = document.querySelector('#update-close-{{ $item->getKey() }}-btn')
            const updateBtn{{ $item->getKey() }} = document.querySelector('#update-btn-{{ $item->getKey() }}')

            const updateModalToggle = () => {
                body.classList.toggle('overflow-y-hidden')
                updateModal{{ $item->getKey() }}.classList.toggle('hidden')
                updateModal{{ $item->getKey() }}.classList.toggle('flex')
            }

            updateCloseBtn{{ $item->getKey() }}.addEventListener('click', updateModalToggle)
            updateClose{{ $item->getKey() }}.addEventListener('click', updateModalToggle)
            updateBtn{{ $item->getKey() }}.addEventListener('click', updateModalToggle)
        })
    </script>
@endpush
<div id="update-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('barang.update', $item->getKey()) }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600 p-4">
        @csrf
        @method('PATCH')
        <div class="flex items-center justify-between mb-8">
            <span class="font-bold text-2xl">Ubah Data {{strtok( $item->nama_barang , " ")}}</span>
            <button id="update-close-{{ $item->getKey() }}" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
        </div>

        <div>
            <label class="font-semibold text-gray-600" for="nama_barang">Nama</label>
            <input class="mb-4 mt-1 outline-none duration-300 w-full bg-white focus:bg-blue-50 border border-gray-600 rounded-lg px-3 py-2" type="text" name="nama_barang" id="nama_barang" autocomplete="off" required placeholder="Masukan Nama" value="{{ $item->nama_barang }}">
            
            <label class="font-semibold text-gray-600" for="merk_barang">Merk</label>
            <input class="mb-4 mt-1 outline-none duration-300 w-full bg-white focus:bg-blue-50 border border-gray-600 rounded-lg px-3 py-2" type="text" name="merk_barang" id="merk_barang" autocomplete="off" required placeholder="Masukan Merk" value="{{ $item->merk_barang }}">
        
            <label class="font-semibold text-gray-600" for="qty">Jumlah</label>
            <input class="mb-4 mt-1 outline-none duration-300 w-full bg-white focus:bg-blue-50 border border-gray-600 rounded-lg px-3 py-2" type="number" name="qty" id="qty" autocomplete="off" required placeholder="Masukan Jumlah" value="{{ $item->qty }}">

            <label class="font-semibold text-gray-600" for="kondisi">Kondisi</label>
            <select name="kondisi" id="kondisi" class="mb-4 mt-1 outline-none w-full bg-white focus:bg-blue-50 duration-300 border border-gray-600 rounded-lg px-3 py-2 appearance-none">
                <option 
                    @if ($item->kondisi == 'layak_pakai')
                        selected
                    @endif
                value="layak_pakai">Layak Pakai</option>
                <option 
                    @if ($item->kondisi == 'rusak_ringan')
                        selected
                    @endif
                value="rusak_ringan">Rusak Ringan</option>
                <option 
                    @if ($item->kondisi == 'rusak_berat')
                        selected
                    @endif
                value="rusak_berat">Rusak Berat</option>
            </select>
            
            <label class="font-semibold text-gray-600" for="tanggal_pengadaan">Tanggal</label>
            <input class="mb-4 mt-1 outline-none duration-300 w-full bg-white focus:bg-blue-50 border border-gray-600 rounded-lg px-3 py-2" type="date" name="tanggal_pengadaan" id="tanggal_pengadaan" autocomplete="off" required placeholder="Masukan Tanggal" value="{{ $item->tanggal_pengadaan }}">
        </div>

        <div class="flex justify-end items-center mt-4">
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
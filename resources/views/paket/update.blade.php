<div id="update-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('outlet.update', $item->getKey()) }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600 p-4">
        @csrf
        @method('PATCH')
        <div class="flex items-center justify-between mb-4">
            <span class="font-bold text-2xl">Ubah Data {{strtok( $item->nama_paket , " ")}}</span>
            <button id="update-close-{{ $item->getKey() }}" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
        </div>

        <div>
            <label class="font-semibold text-2xl text-gray-600" for="outlet">Outlet</label>
            <select name="outlet" id="outlet" class="mb-4 mt-1 outline-none shadow-md w-full bg-blue-50 rounded-lg px-3 py-2 appearance-none">
                    {{-- HEREEEEEEEEEEEEEEEEEEEEEEEEEE --}}
                    {{-- @foreach ($outlets as $item)
                        <option value="">{{ $item->nama }}</option>
                    @endforeach --}}
            </select>
    
            <label class="font-semibold text-2xl text-gray-600" for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="mb-4 mt-1 outline-none shadow-md w-full bg-blue-50 rounded-lg px-3 py-2 appearance-none">
                <option  
                    @if ($item->jenis == 'kiloan')
                        selected
                    @endif
                value="kiloan">Kiloan</option>
                <option  
                    @if ($item->jenis == 'selimut')
                        selected
                    @endif
                value="selimut">Selimut</option>
                <option  
                    @if ($item->jenis == 'bed_cover')
                        selected
                    @endif
                value="bed_cover">Bed Cover</option>
                <option  
                    @if ($item->jenis == 'kaos')
                        selected
                    @endif
                value="kaos">Kaos</option>
                <option  
                    @if ($item->jenis == 'lain')
                        selected
                    @endif
                value="lain">Lain Lain</option>
            </select>

            <label class="font-semibold text-lg text-gray-600" for="nama_paket">Nama Paket</label>
            <input class="mb-4 mt-1 outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-full bg-blue-50 rounded-lg px-3 py-2" type="text" name="nama_paket" id="nama_paket" autocomplete="off" required placeholder="Tulis Nama Paket" value="{{ $item->nama_paket }}">
    
            <label class="font-semibold text-lg text-gray-600" for="harga">Harga</label>
            <input class="mb-4 mt-1 outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-full bg-blue-50 rounded-lg px-3 py-2" type="year" name="harga" id="harga" autocomplete="off" required placeholder="Tulis Harga" value="{{ $item->harga }}"  onkeypress="return num(event)">
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
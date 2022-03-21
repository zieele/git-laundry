<div id="create-modal" class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('penjemputan.store') }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600 p-4">
        @csrf
        <div class="flex items-center justify-between mb-8">
            <span class="font-bold text-2xl">Tambahkan Data</span>
            <button id="create-close" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300" onclick="createModal()"><i class="fas fa-times"></i></button>
        </div>

        <div>
            <label class="font-semibold text-gray-600" for="id_outlet">Pilih Member</label>
            <select name="id_member" id="id_member" class="mb-4 mt-1 outline-none w-full bg-white focus:bg-blue-50 border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                @foreach ($members as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_member }}</option>
                @endforeach
            </select>

            <label class="font-semibold text-gray-600" for="id_outlet">Pilih Outlet</label>
            <select name="id_outlet" id="id_outlet" class="outline-none w-full bg-white focus:bg-blue-50 border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                @foreach ($outlets as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>

            <input type="hidden" name="status" value="tercatat">
        </div>
        
        <div class="flex justify-end items-center mt-4">
            <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" id="crate-close-btn" type="button" onclick="createModal()">cancel</button>
            <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
        </div>
    
    </form>
    
</div>

@push('script')
    <script>
        function createModal(){
            $('#create-modal').toggleClass('hidden')
            $('#create-modal').toggleClass('flex')
        }    
    </script>
@endpush
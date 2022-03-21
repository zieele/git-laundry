<div id="update-modal-{{ $item->getKey() }}"
    class="hidden z-50 bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form action="{{ route('penjemputan.update', $item->getKey()) }}" method="post" class="bg-white w-96 flex flex-col rounded-xl text-gray-600 p-4">
        @csrf
        @method('PATCH')
        <div class="flex items-center justify-between mb-8">
            <span class="font-bold text-2xl">Ubah Data {{strtok( $item->nama_member , " ")}}</span>
            <button type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300" onclick="updateModal{{ $item->getKey() }}()"><i class="fas fa-times"></i></button>
        </div>

        <div>
            <label class="font-semibold text-gray-600" for="id_outlet">Pilih Outlet</label>
            <select name="id_outlet" id="id_outlet" class="outline-none w-full bg-white focus:bg-blue-50 border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                @foreach ($outlets as $outlet)
                    <option value="{{ $outlet->id }}" {{ $outlet->id === $item->id_outlet ? 'selected':'' }} >{{ $outlet->nama }}</option>
                @endforeach
            </select>
            <input type="hidden" name="id_member" value="{{ $item->id_member }}">
            <input type="hidden" name="status" value="{{ $item->status }}">
        </div>

        <div class="flex justify-end items-center mt-4">
            <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" type="button" onclick="updateModal{{ $item->getKey() }}()">cancel</button>
            <button class="bg-green-400 hover:bg-green-300 duration-100 py-2 px-4 text-white rounded-lg font-semibold" type="submit">Ubah</button>
        </div>
    </form>
</div>

@push('script')
    <script>
        function updateModal{{ $item->getKey() }}(){
            $('#update-modal-{{ $item->getKey() }}').toggleClass('hidden')
            $('#update-modal-{{ $item->getKey() }}').toggleClass('flex')
        }    
    </script>
@endpush
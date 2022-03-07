<div class="overflow-x-scroll rounded-xl shadow-xl w-full md:w-1/2 h-max">
    <form action="{{ route('outlet.store') }}" method="post" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
        @csrf

        <table class="w-full">
            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="nama">Nama</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('nama')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama" value="{{ old('nama') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="alamat">Alamat</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('alamat')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukan Alamat" value="{{ old('alamat') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="tlp">No. Telp</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('tlp')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="year" name="tlp" id="tlp" autocomplete="off" placeholder="Masukan No. Telp" value="{{ old('tlp') }}" onkeypress="return num(event)">
                </td>
            </tr>
        </table>
        
        <div class="flex">
            <button class="px-3 py-2 rounded-md bg-yellow-400 hover:bg-yellow-300 duration-100 font-semibold text-white mr-2" type="reset">Reset</button>
            <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
        </div>
    
    </form>
    
</div>
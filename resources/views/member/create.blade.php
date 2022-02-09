<div class="overflow-x-scroll rounded-xl shadow-xl w-full md:w-1/2 h-max">
    <form action="{{ route('member.store') }}" method="post" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
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
                    <input class="outline-none duration-300 w-full focus:bg-blue-50 bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama" value="{{ old('nama') }}">
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
                    <input class="outline-none duration-300 w-full focus:bg-blue-50 bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukan Alamat" value="{{ old('alamat') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="jenis_kelamin">Jenis Kelamin</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('jenis_kelamin')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="outline-none w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
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
                    <input class="outline-none duration-300 w-full focus:bg-blue-50 bg-white border border-gray-600 rounded-lg px-3 py-2" type="year" name="tlp" id="tlp" autocomplete="off" placeholder="Masukan No. Telp" value="{{ old('tlp') }}" onkeypress="return num(event)">
                </td>
            </tr>
        </table>
        
        <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
    
    </form>
    
</div>
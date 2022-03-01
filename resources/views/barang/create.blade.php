<div class="overflow-x-scroll rounded-xl shadow-xl w-full md:w-1/2 h-max">
    <form action="{{ route('barang.store') }}" method="post" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
        @csrf

        <table class="w-full">
            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="nama_barang">Nama</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('nama_barang')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="nama_barang" id="nama_barang" autocomplete="off" placeholder="Masukan Nama" value="{{ old('nama_barang') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="merk_barang">Merk</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('merk_barang')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="merk_barang" id="merk_barang" autocomplete="off" placeholder="Masukan Merk" value="{{ old('merk_barang') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="qty">Jumlah</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('qty')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="number" name="qty" id="qty" autocomplete="off" placeholder="Masukan Jumlah" value="{{ old('qty') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="kondisi">Kondisi</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('kondisi')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <select name="kondisi" id="kondisi" class="outline-none w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                        <option value="layak_pakai">Layak Pakai</option>
                        <option value="rusak_ringan">Rusak Ringan</option>
                        <option value="rusak_berat">Rusak Berat</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="tanggal_pengadaan">Tanggal pengadaan</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('tanggal_pengadaan')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="date" name="tanggal_pengadaan" id="tanggal_pengadaan" value="{{ old('tanggal_pengadaan') }}">
                </td>
            </tr>

        </table>
        
        <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
    
    </form>
    
</div>
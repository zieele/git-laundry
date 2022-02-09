<div class="overflow-x-scroll rounded-xl shadow-xl w-full md:w-1/2 h-max">
    <form action="{{ route('paket.store') }}" method="post" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
        @csrf

        <table class="w-full">
            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="id_outlet">Outlet</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('id_outlet')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <select name="id_outlet" id="id_outlet" class="outline-none w-full bg-white focus:bg-blue-50 border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                        @foreach ($outlets as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="jenis">Jenis</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('jenis')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <select name="jenis" id="jenis" class="outline-none w-full bg-white focus:bg-blue-50 border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                        <option value="lain">Lain lain</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="nama_paket">Nama Paket</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('nama_paket')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none duration-300 border border-gray-600 w-full bg-white focus:bg-blue-50 rounded-lg px-3 py-2" type="text" name="nama_paket" id="nama_paket" autocomplete="off" placeholder="Masukan Nama Paket" value="{{ old('nama_paket') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <label class="font-bold text-2xl text-gray-600" for="harga">Harga</label>
                </td>
                <td class="h-8 flex items-end justify-end">
                    @error('harga')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" class="pb-4 pt-1">
                    <input class="outline-none duration-300 border border-gray-600 w-full bg-white focus:bg-blue-50 rounded-lg px-3 py-2" type="year" name="harga" id="harga" autocomplete="off" placeholder="Masukan Harga" value="{{ old('harga') }}" onkeypress="return num(event)">
                </td>
            </tr>
        </table>
        
        <button class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
    
    </form>
    
</div>
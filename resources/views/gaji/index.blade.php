@extends('layouts.app')

@section('content')
    {{-- Create Modal --}}
        <div class="flex flex-col md:flex-row m-4 min-h-max justify-center">
            <div class="overflow-x-scroll rounded-xl shadow-xl w-full h-max">
                <form id="form-karyawan" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
                    <div class="flex flex-col md:flex-row w-full mb-4">
                        <div class="w-1/2 md:mr-4">
                            <div class="mb-4">
                                <label for="id_karyawan" class="font-bold text-2xl text-gray-600">ID Karyawan</label>
                                <input required type="text" name="id_karyawan" id="id_karyawan" onkeypress="return num(event)" class="outline-none mt-2 focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" value="1">
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin" class="font-bold text-2xl text-gray-600">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="outline-none mt-2 w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="jumlah_anak" class="font-bold text-2xl text-gray-600">Jumlah Anak</label>
                                <input type="number" name="jumlah_anak" id="jumlah_anak" class="outline-none mt-2 focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" value="0" min="0">
                            </div>
                        </div>
                        <div class="w-1/2 md:ml-4">
                            <div class="mb-4">
                                <label for="nama_karyawan" class="font-bold text-2xl text-gray-600">Nama Karyawan</label>
                                <input required type="text" name="nama_karyawan" id="nama_karyawan" class="outline-none mt-2 focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" value="asep">
                            </div>
                            <div class="mb-4">
                                <label for="status_menikah" class="font-bold text-2xl text-gray-600">Status Menikah</label>
                                <select name="status_menikah" id="status_menikah" class="outline-none mt-2 w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                                    <option value="single">Single</option>
                                    <option value="couple">Couple</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="mulai_kerja" class="font-bold text-2xl text-gray-600">Tanggal Mulai Kerja</label>
                                <input type="date" name="mulai_kerja" id="mulai_kerja" class="outline-none mt-2 focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <button class="px-3 py-2 rounded-md bg-yellow-400 hover:bg-yellow-300 duration-100 font-semibold text-white mr-2" type="reset">Reset</button>
                        <button id="btn-simpan" class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
                    </div>
                
                </form>
                
            </div>
        </div>

    {{-- searchbar --}}
        <div class="px-4">
            <div class="w-full flex rounded-xl overflow-hidden shadow-xl transform hover:-translate-y-1 hover:shadow-2xl duration-300">
                <input id="search" type="text" placeholder="Search" class="w-full pl-4">
                <div class="bg-gray-600 w-0.5"></div>
                <button id="btn-search" class="text-gray-600 py-2 px-4 bg-white"><i class="fas fa-search"></i></button>
            </div>
        </div>

    {{-- Table --}}
        {{-- @if ($items->count() < 1) --}}
            <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
                <table id="tabel-karyawan" class="bg-white rounded-xl overflow-hidden min-w-full">
                    <thead class="bg-gray-700 text-white">
                        <tr>
                            <th class="h-10 w-12" rowspan="2">ID</th>
                            <th class=" border-r-2 border-gray-700" rowspan="2">Nama</th>
                            <th class=" border-r-2 border-gray-700" rowspan="2">JK</th>
                            <th class=" border-r-2 border-gray-700" rowspan="2">Status</th>
                            <th class=" border-r-2 border-gray-700" rowspan="2">Jumlah Anak</th>
                            <th class="bg-gray-600 border-b-2 border-gray-700" colspan="3">Gaji</th>
                        </tr>
                        <tr class="bg-gray-600">
                            <th class="border-r-2 border-gray-700">Awal</th>
                            <th class="border-r-2 border-gray-700">Tunjangan</th>
                            <th class="border-r-2 border-gray-700">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center h-64" colspan="100">
                                <span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class=" font-semibold text-center">
                            <td colspan="5" class="bg-gray-700 text-white"><div class="w-full flex justify-end"><span class="my-2 mx-4">Total</span></div></td>
                            <td><span id="total-awal">total_gaji_awal</span></td>
                            <td><span id="total-tunjangan">total_gaji_tunjangan</span></td>
                            <td><span id="total-akhir">total_gaji_akhir</span></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
@endsection

@push('script')
    <script>
        function insert()
        {
            const data = $('#form-karyawan').serializeArray()
            let newData = {}
            data.forEach(function(item, index)
            {
                let name = item['name']
                let value = (name === 'id' ? Number(item['value']):item['value'])
                newData[name] = value
            })
            return newData
        }

        function tunjangan(ja, sm, mk)
        {
            mk = new Date(mk) //mengubah string menjadi date
            ws = Date.now() //mengambil waktu sekarang

            var wmk = mk.getTime() //mengubah date menjadi time
            var tk = new Date(wmk).getUTCFullYear() //mengambil tahun dari time
            var ts = new Date(ws).getUTCFullYear() //mengmbil tahun dari time
            var lk = ts - tk //tahun sekarang dikurangi tahun kerja

            let tja = (ja > 2 ? 2:ja) * 150000
            let tsm = (sm === 'couple' ? 250000:0)
            let tlk = lk * 150000

            let tunjangan = tja + tsm + tlk

            return tunjangan
        }

        function totalGaji(ja, sm, mk)
        {
            let total = tunjangan(ja, sm, mk) + 2000000

            return total
        }

        function showData(arr)
        {
            let row = ''

            if (arr.length == null)
            {
                return row = `<tr><td class="text-center h-64" colspan="100"><span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span></td></tr>`
            }
            arr.forEach(function(item, index)
            {
                row += `<tr class="h-12 text-center text-gray-700 border-b-2">`
                row += `<td>${item['id_karyawan']}</td>`
                row += `<td>${item['nama_karyawan']}</td>`
                row += `<td>${item['jenis_kelamin']}</td>`
                row += `<td>${item['status_menikah']}</td>`
                row += `<td>${item['jumlah_anak']}</td>`
                row += `<td>2000000</td>`
                row += `<td>${tunjangan(item['jumlah_anak'], item['status_menikah'], item['mulai_kerja'])}</td>`
                row += `<td>${totalGaji(item['jumlah_anak'], item['status_menikah'], item['mulai_kerja'])}</td>`
                row += `<td></td>`
                row += `<td></td>`
                row += `</tr>`
            })
            return row
        }

        $(function()
            {
                // property
                    let dataKaryawan = []
                    // totalAwal += 2000000

                // event
                    $('#btn-simpan').click(function(e){
                        e.preventDefault()
                        dataKaryawan.push(insert())
                        $('#tabel-karyawan tbody').html(showData(dataKaryawan))
                        console.log(dataKaryawan)

                        $('#total-awal').text(totalAwal)
                    })
            }
        )

        function num(evt)
        {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
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
                                <input type="number" name="jumlah_anak" id="jumlah_anak" class="outline-none mt-2 focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2 bg-gray-200" value="0" min="0" disabled>
                                <input type="hidden" name="jumlah_anak" id="jumlah_anak_hidden" value="0">
                            </div>
                        </div>
                        <div class="w-1/2 md:ml-4">
                            <div class="mb-4">
                                <label for="nama_karyawan" class="font-bold text-2xl text-gray-600">Nama Karyawan</label>
                                <input required type="text" name="nama_karyawan" id="nama_karyawan" class="outline-none mt-2 focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" value="asep">
                            </div>
                            <div class="mb-4">
                                <label for="status_kawin" class="font-bold text-2xl text-gray-600">Status Kawin</label>
                                <select name="status_kawin" id="status_kawin" class="outline-none mt-2 w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none">
                                    <option value="belum_kawin">Belum Kawin</option>
                                    <option value="kawin">Kawin</option>
                                    <option value="kawin_cerai">Kawin Cerai</option>
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
            <form class="w-full flex rounded-xl overflow-hidden shadow-xl transform hover:-translate-y-1 hover:shadow-2xl duration-300">
                <input id="search-val" type="text" placeholder="Search" class="w-full pl-4">
                <div class="bg-gray-600 w-0.5"></div>
                <button type="submit" id="search-btn" class="text-gray-600 py-2 px-4 bg-white"><i class="fas fa-search"></i></button>
            </form>
        </div>

    {{-- Table --}}
        <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
            <table id="tabel-karyawan" class="bg-white rounded-xl overflow-hidden min-w-full">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="h-10 w-12" rowspan="2"><button class="sorting-btn" id="id_karyawan"><i class="fas fa-sort"></i></button> ID</th>
                        <th class=" border-r-2 border-gray-700" rowspan="2"><button class="sorting-btn" id="nama_karyawan"><i class="fas fa-sort"></i></button> Nama</th>
                        <th class=" border-r-2 border-gray-700" rowspan="2"><button class="sorting-btn" id="jenis_kelamin"><i class="fas fa-sort"></i></button> JK</th>
                        <th class=" border-r-2 border-gray-700" rowspan="2"><button class="sorting-btn" id="status_kawin"><i class="fas fa-sort"></i></button> Status</th>
                        <th class=" border-r-2 border-gray-700" rowspan="2"><button class="sorting-btn" id="jumlah_anak"><i class="fas fa-sort"></i></button> Jumlah Anak</th>
                        <th class="bg-gray-600 border-b-2 border-gray-700" colspan="3">Gaji</th>
                    </tr>
                    <tr class="bg-gray-600">
                        <th class="border-r-2 border-gray-700"><button><i class="fas fa-sort"></i></button> Awal</th>
                        <th class="border-r-2 border-gray-700"><button class="sorting-btn" id="gaji_tunjangan"><i class="fas fa-sort"></i></button> Tunjangan</th>
                        <th class="border-r-2 border-gray-700"><button><i class="fas fa-sort"></i></button> Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center h-64" colspan="100">
                            <span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span>
                        </td>
                    </tr>
                    <tr class=" font-semibold text-center">
                        <td colspan="5" class="bg-gray-700 text-white"><div class="w-full flex justify-end"><span class="my-2 mx-4">Total</span></div></td>
                        <td><span id="total-awal">Rp 0,00</span></td>
                        <td><span id="total-tunjangan">Rp 0,00</span></td>
                        <td><span id="total-akhir">Rp 0,00</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection

@push('script')
    <script>
        function insert()
        {
            const data = $('#form-karyawan').serializeArray()
            let dataKaryawan = JSON.parse(localStorage.getItem('dataKaryawan')) || []
            let newData = {}
            data.forEach(function(item, index)
            {
                let name = item['name']
                let value = (name === 'id' ? Number(item['value']):item['value'])
                newData[name] = value
            })
            newData['gaji_awal'] = 2000000
            newData['gaji_tunjangan'] = tunjangan(newData['jumlah_anak'], newData['status_kawin'], newData['mulai_kerja'])
            newData['gaji_akhir'] = 2000000 + newData['gaji_tunjangan']
            localStorage.setItem('dataKaryawan', JSON.stringify([ ... dataKaryawan, newData]))
            return newData
        }

        function status(status)
        {
            return (status === 'kawin' ? 'Kawin' : status === 'kawin_cerai' ? 'Kawin Cerai' : 'Belum Kawin')
        }

        function tunjangan(ja, sm, mk)
        {
            mk = new Date(mk) //mengubah string menjadi date
            ws = Date.now() //mengambil waktu sekarang

            let wmk = mk.getTime() //mengubah date menjadi time
            let tk = new Date(wmk).getUTCFullYear() //mengambil tahun dari time
            let ts = new Date(ws).getUTCFullYear() //mengmbil tahun dari time
            let lk = ts - tk //tahun sekarang dikurangi tahun kerja

            let tja = (ja > 2 ? 2:ja) * 150000
            let tsm = (sm === 'kawin' ? 250000:0) //(sm === 'kawin' ? 250000 : sm === 'kawin_cerai' && ja > 0  ? 250000:0)
            let tlk = lk * 150000

            let tunjangan = tja + tsm + tlk

            return tunjangan
        }

        function idrFormat(n)
        {
            return Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(n)
        }

        function showData(arr)
        {
            let row = ''

            if (arr.length == [])
            {
                return row = `<tr><td class="text-center h-64" colspan="100"><span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span></td></tr>`
            }
            gajiAwal = 0
            gajiTunjangan = 0
            gajiAkhir = 0
            arr.forEach(function(item, index)
            {
                row += `<tr class="h-12 text-center text-gray-700 border-b-2">`
                row += `<td>${item['id_karyawan']}</td>`
                row += `<td>${item['nama_karyawan']}</td>`
                row += `<td>${item['jenis_kelamin']}</td>`
                row += `<td>${status(item['status_kawin'])}</td>`
                row += `<td>${item['jumlah_anak']}</td>`
                row += `<td>${idrFormat(item['gaji_awal'])}</td>`
                row += `<td>${idrFormat(item['gaji_tunjangan'])}</td>`
                row += `<td>${idrFormat(item['gaji_akhir'])}</td>`
                row += `</tr>`
                gajiAwal += item['gaji_awal']
                gajiTunjangan += item['gaji_tunjangan']
                gajiAkhir += item['gaji_akhir']
            })
            row += `<tr class=" font-semibold text-center">`
            row += `<td colspan="5" class="bg-gray-700 text-white"><div class="w-full flex justify-end"><span class="my-2 mx-4">Total</span></div></td>`
            row += `<td><span>${idrFormat(gajiAwal)}</span></td>`
            row += `<td><span>${idrFormat(gajiTunjangan)}</span></td>`
            row += `<td><span>${idrFormat(gajiAkhir)}</span></td>`
            row += `</tr>`
            return row
        }
        
        function sorting(arr, key) 
        { 
            let i, j, id, value; 
            for (i = 1; i < arr.length; i++)
            { 
                value = arr[i]; 
                id = arr[i][key]
                j = i - 1; 
        
                while (j >= 0 && arr[j][key] > id)
                { 
                    arr[j + 1] = arr[j]; 
                    j = j - 1; 
                } 
                arr[j + 1] = value; 
            }
            return arr
        }
        
        function revsorting(arr, key) 
        { 
            let i, j, id, value; 
            for (i = 1; i < arr.length; i++)
            { 
                value = arr[i]; 
                id = arr[i][key]
                j = i - 1; 
        
                while (j >= 0 && arr[j][key] < id)
                { 
                    arr[j + 1] = arr[j]; 
                    j = j - 1; 
                } 
                arr[j + 1] = value; 
            }
            return arr
        }
        function uniqueArray(arr) {
            var a = [];
            for (var i=0, l=arr.length; i<l; i++)
                if (a.indexOf(arr[i]) === -1 && arr[i] !== '')
                    a.push(arr[i]);
            return a;
        }

        $(function()
            {
                // property
                    let dataKaryawan = JSON.parse(localStorage.getItem('dataKaryawan')) || []
                    let totalAwal = dataKaryawan.length * 2000000
                    let totalTunjangan = 0
                    dataKaryawan.forEach(function(item, index)
                    {
                        totalTunjangan += Number(item['gaji_tunjangan'])
                    })
                    let totalAkhir = 0
                    dataKaryawan.forEach(function(item, index)
                    {
                        totalAkhir += Number(item['gaji_akhir'])
                    })
                    $('#total-awal').text(idrFormat(totalAwal))
                    $('#total-tunjangan').text(idrFormat(totalTunjangan))
                    $('#total-akhir').text(idrFormat(totalAkhir))

                // event
                    $('#tabel-karyawan tbody').html(showData(dataKaryawan))
                    $('#btn-simpan').click(function(e)
                    {
                        e.preventDefault()
                        dataKaryawan.push(insert())
                        $('#tabel-karyawan tbody').html(showData(dataKaryawan))
                        // console.log(dataKaryawan)
                    })
                    $( "#status_kawin" ).change(function()
                    { 
                        if ($('#status_kawin').val() == 'belum_kawin')
                        {
                            $("#jumlah_anak").prop('disabled', true)
                            $("#jumlah_anak_hidden").prop('disabled', false)
                            $( "#jumlah_anak" ).val('0')
                            $( "#jumlah_anak" ).addClass('bg-gray-200')
                        }
                        else 
                        {
                            $("#jumlah_anak").prop('disabled', false)
                            $("#jumlah_anak_hidden").prop('disabled', true)
                            $( "#jumlah_anak" ).removeClass('bg-gray-200')
                        }
                    })
                    $('#tabel-karyawan').on('click', '.sorting-btn', function()
                    {
                        let a = $(this).attr('id')
                        $(this).toggleClass('a')

                        if ($(this).hasClass('a') == true)
                        {
                            dataKaryawan = revsorting(dataKaryawan, a)
                            // console.log('benar')
                        }
                        else 
                        {
                            dataKaryawan = sorting(dataKaryawan, a)
                            // console.log('salah')
                        }
                        

                        $('#tabel-karyawan tbody').html(showData(dataKaryawan))

                        // console.log($(this).attr('id'))
                        // console.log(dataKaryawan)
                    })
                    $('#search-btn').on('click', function(e){
                        e.preventDefault()
                        const text = $('#search-val').val()
                        const data = searching(dataKaryawan, text)
                        $('#tabel-karyawan tbody').html(showData(data))
                        console.log(data)
                    })
                    const searching = (arr, text) => {
                        if (text !== '') {
                            let data = []
                            for (let idx = 0; idx < arr.length; idx++) {
                                for (const key in arr[idx]) {
                                    const value = arr[idx][key].toString()
                                    for (let x = 0; x < value.length; x++) {
                                        if (value.substring(x, x + text.length).toLowerCase() == text.toLowerCase()) {
                                            data.push(dataKaryawan[idx])
                                            break;
                                        }
                                    }
                                }
                            }
                            return uniqueArray(data)
                            // return data
                        } else {
                            return dataKaryawan
                        }
                    }
            }
        )

        function num(evt)
        {
            let ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
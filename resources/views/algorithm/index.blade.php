@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row m-4 min-h-max justify-center">
        {{-- Create Modal --}}
        <div class="overflow-x-scroll rounded-xl shadow-xl w-full h-max md:w-1/2">
            <form id="form-simulasi" class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col items-end">
                <table class="w-full">
                    <tr>
                        <td>
                            <label class="font-bold text-2xl text-gray-600" for="id">ID</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="id" id="id" autocomplete="off" placeholder="Masukan id" required onkeypress="return num(event)">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="font-bold text-2xl text-gray-600" for="nama">Nama</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <input class="outline-none focus:bg-blue-50 duration-300 w-full bg-white border border-gray-600 rounded-lg px-3 py-2" type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama" required>
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                            <label class="font-bold text-2xl text-gray-600" for="jenis_kelamin">Jenis Kelamin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pb-4 pt-1">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="outline-none w-full focus:bg-blue-50 bg-white border border-gray-600 duration-300 rounded-lg px-3 py-2 appearance-none" required>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>
                
                <div class="flex">
                    <button class="px-3 py-2 rounded-md bg-yellow-400 hover:bg-yellow-300 duration-100 font-semibold text-white mr-2" type="reset">Reset</button>
                    <button id="btn-simpan" class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">Simpan</button>
                </div>
            
            </form>
            
        </div>
        
    </div>
    <div class="px-4">
        <div class="w-full flex rounded-xl overflow-hidden shadow-xl transform hover:-translate-y-1 hover:shadow-2xl duration-300">
            <input id="search" type="text" placeholder="Search" class="w-full pl-4">
            <div class="bg-gray-600 w-0.5"></div>
            <button id="btn-search" class="text-gray-600 py-2 px-4 bg-white"><i class="fas fa-search"></i></button>
        </div>
    </div>

    {{-- table --}}
    <div class="m-4 overflow-x-scroll rounded-xl shadow-xl">
        <table id="tbl-simulasi" class="bg-white rounded-xl overflow-hidden min-w-full">
            <thead class="bg-gray-700">
                <tr class="text-white">
                    <th class="border-r-2 border-gray-700 h-10 px-4">
                        <div></div>
                        <span>ID</span>
                        <button id="btn-sort"><i class="fas fa-sort"></i></button>
                    </th>
                    <th class="border-r-2 border-gray-700 h-10 px-4">
                        <div></div>
                        <span>nama</span>
                        <button><i class="fas fa-sort"></i></button>
                    </th>
                    <th class="border-r-2 border-gray-700 h-10 px-4">
                        <div></div>
                        <span>Jenis Kelamin</span>
                        <button><i class="fas fa-sort"></i></button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center h-64" colspan="100">
                        <span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@push('script')
    <script>
        function insert()
        {
            const data = $('#form-simulasi').serializeArray()
            let newData = {}
            data.forEach(function(item, index)
            {
                let name = item['name']
                let value = (name === 'id' ? Number(item['value']):item['value'])
                newData[name] = value
            })
            return newData
        }        

        function showData(arr){
            let row = ''
            
            if (arr.length == null)
            {
                return row = `<td class="text-center h-64" colspan="100"><span class="text-gray-300 font-semibold text-xl uppercase">tidak ada data</span></td>`
            }
            arr.forEach(function(item, index)
            {
                row += `<tr class="h-12 text-center text-gray-700 border-b-2">`
                row += `<td>${item['id']}</td>`
                row += `<td>${item['nama']}</td>`
                row += `<td>${item['jenis_kelamin']}</td>`
                row += `</tr>`
            })
            return row
        }
        
        function insertionSort(arr, key) 
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

        function searching(arr, key, text)
        {
            for(let i = 0; i < arr.length; i++)
            {
                if(arr[i][key] = text)
                    return i
            }
            return -1
        }

        $(function()
        {
            // property
            let dataSimulasi = []
                
            // event
            $('#btn-simpan').on('click', function(e)
            {
                e.preventDefault()
                dataSimulasi.push(insert())
                $('#tbl-simulasi tbody').html(showData(dataSimulasi))
                // console.log(dataSimulasi)
            })

            $('#btn-sort').on('click', function()
            {
                dataSimulasi = insertionSort(dataSimulasi, 'id')

                $('#tbl-simulasi tbody').html(showData(dataSimulasi))
                // console.log(dataSimulasi)
            })

            $('#btn-search').on('click', function(e){
                let searchText = $('#search').val()
                let id = searching(dataSimulasi, 'id', searchText)
                let data = []
                if(id >= 0)
                    data.push(dataSimulasi[id])
                    // console.log(id)
                    // console.log(data)
                $('#tbl-simulasi tbody').html(showData(data))
            })
        })

        function num(evt)
        {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
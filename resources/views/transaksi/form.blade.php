{{-- modal member --}}
    <div id="member-modal" class="hidden bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-32 xl:-translate-x-48">
        <div class="bg-white rounded-xl text-gray-600 p-4 flex flex-col">
            {{-- modal header --}}
            <div class="flex items-center h-10">
                <button id="member-close-btn" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
                <span id="label-modal" class="ml-2 font-bold text-2xl">Pilih Pelanggan</span>
            </div>
            {{-- modal content --}}
            <table id="tbl-member">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($member as $item)
                        <tr>
                            <td>
                                {{ $loop->index+1 }}.
                                <input type="hidden" name="id_member" id="id_member" class="member-id" value="{{ $item->id }}">
                            </td>
                            <td>{{ $item->nama_member }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tlp_member }}</td>
                            <td>{{ $item->alamat_member }}</td>
                            <td>
                                <button type="button" class="btn-select-member hover:bg-gray-200 duration-100 h-10 w-10 rounded-full font-semibold"><i class="fas fa-check"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- modal footer --}}
            <div>
                <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" id="member-close" type="button">Close</button>
            </div>
        </div>
    </div>

{{-- modal paket --}}
    <div id="paket-modal" class="hidden bg-black bg-opacity-30 fixed justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-32 xl:-translate-x-48">
        <div class="bg-white rounded-xl text-gray-600 p-4 flex flex-col w-1/2 max-w-xl">
            {{-- modal header --}}
            <div class="flex items-center h-10">
                <button id="paket-close-btn" type="button" class="text-xl rounded-full h-8 w-8 transform hover:rotate-90 duration-300"><i class="fas fa-times"></i></button>
                <span id="label-modal" class="ml-2 font-bold text-2xl">Pilih Paket</span>
            </div>
            {{-- modal content --}}
            <div>
                <table id="tbl-paket" class="min-w-full">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($paket as $item)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}.
                                    <input type="hidden" id="paket-id" class="paket-id" value="{{ $item->id }}">
                                </td>
                                <td>{{ $item->nama_paket }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                    <button type="button" class="btn-select-paket hover:bg-gray-200 duration-100 h-10 w-10 rounded-full font-semibold"><i class="fas fa-check"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- modal footer --}}
            <div>
                <button class="hover:bg-gray-200 duration-100 py-2 px-4 rounded-lg font-semibold mr-2" id="paket-close" type="button">close</button>
            </div>
        </div>
    </div>

{{-- tabel transaksi --}}
    <div class="flex flex-col md:flex-row m-4 min-h-max">
        <div class="overflow-x-scroll rounded-xl shadow-xl w-full h-max bg-white">
            <div class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex flex-col">
                <div>
                    <button id="paket-btn" class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="button">
                        <i class="fas fa-plus"></i><span class="ml-2">Tambah Cucian</span>
                    </button>
                </div>
                <table id="tbl-transaksi" class="bg-white rounded-xl overflow-hidden min-w-full mt-4">
                    <thead class="bg-gray-700 h-8 font-semibold text-center">
                        <tr class="text-white">
                            <td>Nama Paket</td>
                            <td>Harga</td>
                            <td>Qty</td>
                            <td>Total</td>
                            <td class="w-20"></td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Jumlah Bayar</td>
                            <td><span id="subtotal">0</span></td>
                            <td rowspan="4" class="flex flex-col">
                                <label for="bayar">Pembayaran</label>
                                <input value="1000" type="text" name="bayar" id="bayar" value="0" onkeypress="return num(event)">
                                <button id="paket-btn" class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="submit">
                                    <span class="ml-2">Bayar</span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Diskon</td>
                            <td><input type="number" name="diskon" id="diskon" value="0"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Pajak <input type="number" name="pajak" id="pajak-persen" class="qty" value="0" min="0" size="2"></td>
                            <td><span id="pajak-harga">0</span></td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Bayar Akhir</td>
                            <td><span id="total">0</span></td>
                        </tr>
                        <tr>
                            <td colspan="3">Biaya Tambahan</td>
                            <td><input type="number" name="biaya_tambahan" value="0"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@push('script')
    <script>
        $( function(){
            $('#tbl-member').DataTable({
				"responsive": true,
                "bLengthChange": false,
                "bInfo": false, 
                "ordering": false,
                "bAutoWidth": false 
            });
            $('#tbl-paket').DataTable({
				"responsive": true,
                "bLengthChange": false,
                "bInfo": false, 
                "ordering": false,
                "bAutoWidth": false 
            });
        })

        $('#tbl-member').on('click','.btn-select-member', function(){
            selectMember(this)
            memberModalToggle()
        })

        $('#tbl-paket').on('click','.btn-select-paket', function(){
            selectPaket(this)
            paketModalToggle()
        })  

        $('#tbl-transaksi').on('click','.btn-remove-paket', function(){
            removePaket(this)
        })
        
        $('#tbl-transaksi').on('change','.qty', function(){
            hitungTotalAkhir(this)
        })
        
        $('#paket-close').click(function(){
            paketModalToggle()
        })

        $('#paket-close-btn').click(function(){
            paketModalToggle()
        })

        $('#paket-btn').click(function(){
            paketModalToggle()
        })
        
        $('#member-close').click(function(){
            memberModalToggle()
        })

        $('#member-close-btn').click(function(){
            memberModalToggle()
        })

        $('#member-btn').click(function(){
            memberModalToggle()
        })
        
        let subTotal = total = 0;
        $(function(){
            $('#tbl-member').DataTable();
        })

        function paketModalToggle(){
            $('#paket-modal').toggleClass('hidden')
            $('#paket-modal').toggleClass('flex')
        }

        function memberModalToggle(){
            $('#member-modal').toggleClass('hidden')
            $('#member-modal').toggleClass('flex')
        }

        function selectMember(x){
            const tr = $(x).closest('tr')
            const nama = tr.find('td:eq(1)').text()+" ("+tr.find('td:eq(2)').text()+")"
            const biodata = tr.find('td:eq(4)').text()+" "+tr.find('td:eq(3)').text()
            const memberID = tr.find('.member-id').val()

            $('#nama-pelanggan').text(nama)
            $('#biodata-pelanggan').text(biodata)
            $('#member-id').val(memberID)
        }

        function selectPaket(x){
            const tr = $(x).closest('tr')
            const namaPaket = tr.find('td:eq(1)').text()
            const harga = tr.find('td:eq(2)').text()
            const paketID = tr.find('.paket-id').val()

            let tbody = $('#tbl-transaksi tbody tr td').text()
            let data = ''
            data += `<tr class="bg-stone-50 h-8 border-b-2 border-gray-100">`
            data += `<td> ${namaPaket} </td>`
            data += `<td> ${harga} </td>`
            data += `<input type="hidden" name="id_paket[]" value="${paketID}">`
            data += `<td><input type="number" name="qty[]" value="1" min="1" class="qty bg-stone-50 text-center"></td>`
            data += `<td><label name="sub_total[]" class="subtotal">${harga}</label></td>`
            data += `<td><button type="button" class="btn-remove-paket"><i class="fas fa-trash"></i>Delete</button></td>`
            data += `</tr>`

            if(tbody === 'belum ada data ')
                $('#tbl-transaksi tbody tr').remove();
            $('#tbl-transaksi tbody').append(data);

            subTotal += Number(harga)
            total = subTotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
            $('#subtotal').text(subTotal)
            $('#total').text(total)
        }

        function removePaket(x) {
            let subTotalAwal = parseFloat($(x).closest('tr').find('.subtotal').text())

            subTotal -= subTotalAwal
            total -= subTotalAwal

            $currentRow = $(x).closest('tr').remove();
            $('#subtotal').text(subTotal)
            $('#total').text(total) 
        }

        function hitungTotalAkhir(a){
            let qty = Number($(a).closest('tr').find('.qty').val())
            let harga = Number($(a).closest('tr').find('td:eq(1)').text())
            let subTotalAwal = Number($(a).closest('tr').find('.subtotal').text())
            let count = qty * harga
            
            subTotal = subTotal - subTotalAwal + count
            total = subTotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
            $(a).closest('tr').find('.subtotal').text(count)
            $('#subtotal').text(subTotal)
            $('#total').text(total)
        }

        
        function num(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
@endpush
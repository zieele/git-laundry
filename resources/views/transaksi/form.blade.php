{{-- modal member --}}
<div class="bg-red-200">
    {{-- modal header --}}
    <div>
        <span id="label-modal">Pilih Pelanggan</span>
        <button type="button">&times;</button>
    </div>
    {{-- modal content --}}
    <div>
        <table id="tbl-member">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jelas Kelamin</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member as $item)
                    <tr>
                        <td>
                            {{ $loop->index+1 }}.
                            <input type="hidden" name="id-member" id="id-member" class="member-id" value="{{ $item->id }}">
                        </td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->tlp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <button type="button" class="btn-select-member">pilih</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- modal footer --}}
    <div>
        <button type="button">close</button>
    </div>
</div>

{{-- tabel transaksi --}}
<div>
    <div>
        <button type="button" id="btn-tambah-paket">Tambah Cucian</button>
    </div>
    <table id="tbl-transaksi">
        <thead>
            <tr>
                <td>Nama Paket</td>
                <td>Harga</td>
                <td>Qty</td>
                <td>Total</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="5">belum ada data</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Jumlah Bayar</td>
                <td><span id="subtotal">0</span></td>
                <td rowspan="4" class="flex flex-col">
                    <label for="bayar">Pembayaran</label>
                    <input type="text" name="bayar" id="bayar" value="0" onkeypress="return num(event)">
                    <button     type="submit">Bayar</button>
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

{{-- modal member --}}
<div class="bg-red-200">
    {{-- modal header --}}
    <div>
        <span id="label-modal">Pilih Paket</span>
        <button type="button">&times;</button>
    </div>
    {{-- modal content --}}
    <div>
        <table id="tbl-paket">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paket as $item)
                    <tr>
                        <td>
                            {{ $loop->index+1 }}.
                            <input type="hidden" name="id-paket" id="id-paket" class="paket-id" value="{{ $item->id }}">
                        </td>
                        <td>{{ $item->nama_paket }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>
                            <button type="button" class="btn-select-paket">pilih</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

    {{-- modal footer --}}
    <div>
        <button type="button">close</button>
    </div>
</div>
@push('script')
    <script>
        $( function(){
            $('#tbl-member').DataTable();
            $('#tbl-paket').DataTable();
        })

        $('#tbl-member').on('click','.btn-select-member', function(){
            selectMember(this)
        })

        $('#tbl-paket').on('click','.btn-select-paket', function(){
            selectPaket(this)
        })  

        $('#tbl-transaksi').on('click','.btn-remove-paket', function(){
            removePaket(this)
        })
        
        $('#tbl-transaksi').on('change','.qty', function(){
            hitungTotalAkhir(this)
        })
        
        let subTotal = total = 0;
        $(function(){
            $('#tbl-member').DataTable();
        })

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
            data += `<tr>`
            data += `<td> ${namaPaket} </td>`
            data += `<td> ${harga} </td>`
            data += `<input type="hidden" name="paket-id[]" value="${paketID}">`
            data += `<td><input type="number" name="qty[]" value="1" min="1" class="qty"></td>`
            data += `<td><label name="sub_total[]" class="subtotal">${harga}</label></td>`
            data += `<td><button type="button" class="btn-remove-paket"><i class="fas fa-times"></i></button></td>`
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
<div id="data-laundry" class="bg-cyan-200">
    <div>
        <div>
            <div>
                <label for="staticEmail">Tanggal Transaksi</label>
                <div>
                    <input type="date" name="tgl" id="tgl" value="{{ date('Y-m-d') }}">
                </div>
            </div>
            <div>
                <label for="inuptPassword">Estimasi Selesai</label>
                <div>
                    <input type="date" name="batas_waktu" id="" value="{{ date('Y-m-d', strtotime(date('Y-m-d'). '+3 day')) }}">
                </div>
            </div>
        </div>
        <div>
            <div>
                <label for="">
                    <button><i class="fas fa-plus"></i></button>
                    <span>Nama pelanggan / Jenis Kelamin</span>
                </label>
                <label id="nama-pelanggan">
                    -
                </label>
            </div>
            <div>
                <label for="">Biodata</label>
                <label id="biodata-pelanggan">
                    -
                </label>
            </div>
        </div>
    </div>
</div>
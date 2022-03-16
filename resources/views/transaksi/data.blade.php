<div id="data-laundry" class="flex flex-col md:flex-row m-4 min-h-max">
    <div class="overflow-x-scroll rounded-xl shadow-xl w-full h-max bg-white">
        <div class="bg-white rounded-xl overflow-hidden min-w-full h-full py-6 px-4 flex justify-between">
            <div>
                <div class="flex h-16 items-center">
                    <label for="staticEmail" class="mr-4 font-semibold">Tanggal Transaksi</label>
                    <div>
                        <input type="date" name="tgl" id="tgl" value="{{ date('Y-m-d') }}" class="bg-gray-100 rounded-lg p-2">
                    </div>
                </div>
                <div class="flex h-16 items-center">
                    <label for="inuptPassword" class="mr-4 font-semibold">Estimasi Selesai</label>
                    <div>
                        <input type="date" name="batas_waktu" id="" value="{{ date('Y-m-d', strtotime(date('Y-m-d'). '+3 day')) }}" class="bg-gray-100 rounded-lg p-2">
                    </div>
                </div>
            </div>
            <div class="w-1/2 flex flex-col justify-around">
                <div>
                    <button id="member-btn" class="px-3 py-2 rounded-md bg-blue-400 hover:bg-blue-300 duration-100 font-semibold text-white" type="button">
                        <i class="fas fa-plus"></i><span class="ml-2">Tambah Member</span>
                    </button>
                </div>
                <div>
                    <label for="">
                        <span class="font-semibold mr-2">Nama pelanggan (JK): </span>
                    </label>
                    <label id="nama-pelanggan" class="text-gray-700">
                        -
                    </label>
                </div>
                <div>
                    <label for="">
                        <span class="font-semibold mr-2">Biodata: </span>
                    </label>
                    <label id="biodata-pelanggan" class="text-gray-700">
                        -
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
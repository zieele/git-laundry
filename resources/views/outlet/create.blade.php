<div id="modalCreate" class="hidden z-50 bg-black bg-opacity-30 fixed flex justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form class="rounded-xl bg-blue-50 overflow-hidden text-gray-700" action="{{ route('outlet.index') }}" method="POST">
        @csrf
        <h1 class="text-2xl font-semibold tracking-wide text-white text-center mb-4 bg-gray-700 px-8 py-4 shadow-lg">Tambahkan Outlet</h1>
        <div class="px-4 flex flex-col justify-center items-end">
          <table>   
            <tr>
              <td><label for="nama">Nama</label></td>
              <td><input class="outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="nama" id="nama" autocomplete="off" placeholder="Nama lengkap" required></td>
            </tr>
            <tr>
              <td><label for="alamat">Alamat</label></td>
              <td><input class="outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Jalan, ..., kota, provinsi" required></td>
            </tr>
            <tr>
              <td><label for="tlp">No.Tlp</label></td>
              <td><input class="outline-none shadow-md focus:shadow-xl duration-300 transform focus:-translate-y-1 w-64 my-2 ml-2 bg-white rounded-lg px-3 py-2" type="text" name="tlp" id="tlp" autocomplete="off" onkeypress="return numInp(event)" placeholder="0812345678" required></td>
            </tr>
          </table>
          <div class="my-4 float-right">
            <button type="button" id="closeCreate" class="shadow-md hover:shadow-xl px-2 py-1 rounded-lg bg-red-400 text-white hover:bg-red-300 duration-300 font-semibold transform hover:-translate-y-1">
                <span>Cancel</span>
            </button>
            <button type="submit" class="shadow-md hover:shadow-xl px-2 ml-2 py-1 rounded-lg bg-green-400 text-white hover:bg-green-300 duration-300 font-semibold transform hover:-translate-y-1">
                <span>Submit</span>
            </button>
          </div>
        </div>
    </form>   
</div>

{{-- js script --}}
@push('script')
<script>
    document.getElementById("closeCreate").onclick = function() {
        document.getElementById("modalCreate").classList.toggle("hidden");
        document.getElementById("body").classList.toggle("overflow-y-hidden");
    }
    document.getElementById("showCreate").onclick = function() {
        document.getElementById("modalCreate").classList.toggle("hidden");
        document.getElementById("body").classList.toggle("overflow-y-hidden");
    }
</script>
@endpush
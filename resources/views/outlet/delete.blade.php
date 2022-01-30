<div id="modalDelete{{ $item->id }}" class="hidden z-50 bg-black bg-opacity-30 fixed flex justify-center items-center w-screen h-screen transform -translate-y-20 lg:-translate-x-64 xl:-translate-x-96">
    <form class="rounded-xl bg-blue-50 overflow-hidden text-gray-700" action="{{ route('outlet.destroy',$item->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <h1 class="text-2xl font-semibold tracking-wide text-white text-center bg-gray-700 px-8 py-4 shadow-lg">
            Hapus data 
            {{strtok( $item->nama , " ")}}
        </h1>
        <div class="py-4 flex justify-center items-center">
            <button type="button" id="closeDelete{{ $item->id }}" class="shadow-md hover:shadow-xl px-2 py-1 rounded-lg bg-green-400 text-white hover:bg-green-300 duration-300 font-semibold transform hover:-translate-y-1">
                <span>Cancel</span>
            </button>
            <button type="submit" class="shadow-md hover:shadow-xl px-2 ml-2 py-1 rounded-lg bg-red-400 text-white hover:bg-red-300 duration-300 font-semibold transform hover:-translate-y-1">
                <span>Submit</span>
            </button>
        </div>
    </form>   
</div>

{{-- js script --}}
@push('script')
<script>
    document.getElementById("closeDelete{{ $item->id }}").onclick = function() {
        document.getElementById("modalDelete{{ $item->id }}").classList.toggle("hidden");
        document.getElementById("body").classList.toggle("overflow-y-hidden");
    }
    document.getElementById("showDelete{{ $item->id }}").onclick = function() {
        document.getElementById("modalDelete{{ $item->id }}").classList.toggle("hidden");
        document.getElementById("body").classList.toggle("overflow-y-hidden");
    }
</script>
@endpush
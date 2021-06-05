<form action="{{ route('dokter.store')}}" method="post">
    @csrf
    id: <input type="text" name="id">
    nama: <input type="text" name="nama">
    jabatan: <input type="text" name="harga">
    <button type="submit">Simpan</button>
</form>
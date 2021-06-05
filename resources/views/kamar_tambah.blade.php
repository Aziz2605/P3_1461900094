<form action="{{ route('kamar.store')}}" method="post">
    @csrf
    id: <input type="text" name="id">
    id_pasien: <input type="text" name="id_pelanggan">
    id_dokter: <input type="text" name="id_barang">
    <button type="submit">Simpan</button>
</form>
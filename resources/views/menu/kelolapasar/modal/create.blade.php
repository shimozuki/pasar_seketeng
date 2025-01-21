<div class="modal fade" id="addPasarModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pedagang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pasar.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="nama_pedagang" class="form-label">Nama Pedagang</label>
                                <input type="text" class="form-control @error('nama_pedagang') is-invalid @enderror"
                                    name="nama_pedagang" id="nama_pedagang" value="{{ old('nama_pedagang') }}"
                                    placeholder="Masukkan nama lapak..">

                                @error('nama_pedagang')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_dagangan" class="form-label">Jenis Dagangan</label>
                                <input type="text" class="form-control @error('jenis_dagangan') is-invalid @enderror"
                                    name="jenis_dagangan" id="jenis_dagangan" value="{{ old('jenis_dagangan') }}"
                                    placeholder="Masukkan jenis dagangan..">

                                @error('jenis_dagangan')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

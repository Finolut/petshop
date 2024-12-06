@extends('layouts.admin')

@section('content')
<div class="container card my-4 p-4 shadow-sm">
    <h1 class="mb-4 text-center text-success">Data Pengadaan</h1>

    <!-- Tombol Tambah Pengadaan -->
    <div class="text-center mb-4">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPengadaanModal">Tambah Pengadaan</button>
    </div>

    <!-- Tabel Data Pengadaan -->
    <div class="table-responsive">
        <table class="table  table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Pengadaan</th>
                    <th>Vendor</th>
                    <th>Subtotal</th>
                    <th>PPN</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>User</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengadaans as $pengadaan)
                <tr>
                    <td>{{ $pengadaan->idpengadaan }}</td>
                    <td>{{ $pengadaan->nama_vendor }}</td>
                    <td>{{ number_format($pengadaan->subtotal_nilai, 0, ',', '.') }}</td>
                    <td>{{ number_format($pengadaan->ppn, 0, ',', '.') }}</td>
                    <td>{{ number_format($pengadaan->total_nilai, 0, ',', '.') }}</td>
                    <td>
                        @if ($pengadaan->status == 1)
                            <span class="badge bg-success">Selesai</span>
                        @else
                            <span class="badge bg-warning">Belum Selesai</span>
                        @endif
                    </td>
                    <td>{{ $pengadaan->nama_user }}</td>
                    <td>{{ $pengadaan->timestamp }}</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal" data-idpengadaan="{{ $pengadaan->idpengadaan }}">Detail</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Detail Pengadaan -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center text-primary" id="detailModalLabel">Detail Pengadaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="detailContent"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Pengadaan -->
<div class="modal fade" id="addPengadaanModal" tabindex="-1" aria-labelledby="addPengadaanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center text-success" id="addPengadaanModalLabel">Tambah Pengadaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPengadaanForm" action="{{ route('pengadaan.store') }}" method="POST">
                    @csrf
                    <!-- Vendor -->
                    <div class="form-group">
                        <label for="vendor_id">Vendor</label>
                        <select class="form-control" id="vendor_id" name="vendor_id" required>
                            <option value="">-- Pilih Vendor --</option>
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor->idvendor }}">{{ $vendor->nama_vendor }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Detail Barang -->
                    <div id="barang-container">
                        <div class="form-group row barang-row">
                            <div class="col-md-4">
                                <label>Barang</label>
                                <select class="form-control barang-select select2" name="items[0][idbarang]" required>
                                    <option value="">-- Pilih Barang --</option>
                                    @foreach ($barangs as $barang)
                                        <option value="{{ $barang->idbarang }}" data-harga="{{ $barang->harga }}">{{ $barang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Harga Satuan</label>
                                <input type="number" class="form-control harga-satuan" name="items[0][harga]" readonly required>
                            </div>
                            <div class="col-md-3">
                                <label>Jumlah</label>
                                <input type="number" class="form-control jumlah-barang" name="items[0][jumlah]" value="1" min="1" required>
                            </div>
                            <div class="col-md-2 mt-4">
                                <button type="button" class="btn btn-danger remove-item">Hapus</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success mt-3" id="add-new-barang">Tambah Barang</button>

                    <!-- Ringkasan -->
                    <div class="mt-4">
                        <h5>Ringkasan</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal:</span>
                                <span id="subtotal">Rp 0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>PPN (10%):</span>
                                <span id="ppn">Rp 0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total:</span>
                                <span id="total">Rp 0</span>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="addPengadaanForm">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>



<!-- JavaScript -->
<script>

    let itemIndex = 1;

    document.getElementById('add-new-barang').addEventListener('click', function () {
        const container = document.getElementById('barang-container');
        const newBarangRow = document.createElement('div');
        newBarangRow.classList.add('form-group', 'row', 'barang-row');
        newBarangRow.innerHTML = `
            <div class="col-md-4">
                <label>Barang</label>
                <select class="form-control barang-select" name="items[${itemIndex}][idbarang]" data-index="${itemIndex}" required>
                    <option value="">-- Pilih Barang --</option>
                    @foreach ($barangs as $barang)
                        <option value="{{ $barang->idbarang }}" data-harga="{{ $barang->harga }}">{{ $barang->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>Harga Satuan</label>
                <input type="number" class="form-control harga-satuan" name="items[${itemIndex}][harga]" placeholder="Harga Satuan" readonly required>
            </div>
            <div class="col-md-3">
                <label>Jumlah</label>
                <div class="input-group">
                    <button type="button" class="btn btn-outline-danger btn-sm minus-qty" data-index="${itemIndex}">-</button>
                    <input type="number" class="form-control jumlah-barang" name="items[${itemIndex}][jumlah]" placeholder="Jumlah" value="1" min="1" data-index="${itemIndex}" required>
                    <button type="button" class="btn btn-outline-success btn-sm plus-qty" data-index="${itemIndex}">+</button>
                </div>
            </div>
            <div class="col-md-2 mt-4">
                <button type="button" class="btn btn-danger remove-item">Hapus</button>
            </div>
        `;

        container.appendChild(newBarangRow);

        // Tambah event listener
        newBarangRow.querySelector('.barang-select').addEventListener('change', updateRingkasan);
        newBarangRow.querySelector('.jumlah-barang').addEventListener('input', updateRingkasan);
        newBarangRow.querySelector('.plus-qty').addEventListener('click', incrementQty);
        newBarangRow.querySelector('.minus-qty').addEventListener('click', decrementQty);
        newBarangRow.querySelector('.remove-item').addEventListener('click', function () {
            newBarangRow.remove();
            updateRingkasan();
        });

        itemIndex++;
    });

    function incrementQty(event) {
        const input = event.target.parentElement.querySelector('.jumlah-barang');
        input.value = parseInt(input.value) + 1; // Tambah 1 ke jumlah
        updateRingkasan();
    }

    function decrementQty(event) {
        const input = event.target.parentElement.querySelector('.jumlah-barang');
        if (parseInt(input.value) > 1) { // Cegah jumlah menjadi kurang dari 1
            input.value = parseInt(input.value) - 1;
            updateRingkasan();
        }
    }

        document.querySelectorAll('.jumlah-barang').forEach(function (input) {
        input.addEventListener('input', function () {
            // Cegah input negatif
            if (parseInt(this.value) < 0) {
                this.value = 0; // Set ke 0 jika pengguna mencoba memasukkan angka negatif
            }
        });
    });


    function updateRingkasan() {
        let subtotal = 0;

        document.querySelectorAll('.barang-row').forEach((row, index) => {
            const barangSelect = row.querySelector('.barang-select');
            const hargaInput = row.querySelector('.harga-satuan');
            const jumlahInput = row.querySelector('.jumlah-barang');

            if (barangSelect && hargaInput && jumlahInput) {
                const selectedOption = barangSelect.selectedOptions[0];
                const harga = selectedOption ? parseFloat(selectedOption.getAttribute('data-harga')) || 0 : 0;
                const jumlah = parseFloat(jumlahInput.value) || 0;

                hargaInput.value = harga; // Perbarui harga satuan jika ada perubahan
                subtotal += harga * jumlah;
            }
        });

        const ppn = subtotal * 0.1;
        const total = subtotal + ppn;

        // Update UI untuk ringkasan
        document.getElementById('subtotal').textContent = `Rp ${subtotal.toLocaleString()}`;
        document.getElementById('ppn').textContent = `Rp ${ppn.toLocaleString()}`;
        document.getElementById('total').textContent = `Rp ${total.toLocaleString()}`;
    }

    // Pastikan barang pertama memiliki listener
    document.querySelector('.barang-select').addEventListener('change', updateRingkasan);
    document.querySelector('.jumlah-barang').addEventListener('input', updateRingkasan);
    document.querySelector('.plus-qty').addEventListener('click', incrementQty);
    document.querySelector('.minus-qty').addEventListener('click', decrementQty);


</script>

<script>
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: "Cari Barang",
            allowClear: true
        });
    });

    // Re-initialize Select2 setiap kali elemen baru ditambahkan
    document.getElementById('add-new-barang').addEventListener('click', function () {
        setTimeout(() => {
            $('.select2').select2({
                placeholder: "Cari Barang",
                allowClear: true
            });
        }, 100);
    });
</script>
<script>
    // Script untuk memuat data detail pengadaan ke modal
    document.addEventListener('DOMContentLoaded', function () {
        const detailButtons = document.querySelectorAll('[data-bs-target="#detailModal"]');
        detailButtons.forEach(button => {
            button.addEventListener('click', function () {
                const idPengadaan = button.getAttribute('data-idpengadaan');
                fetch(`{{ url('/pengadaan/detail') }}/${idPengadaan}`)
                    .then(response => response.json())
                    .then(data => {
                        let content = `
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah Pesan</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                        `;
                        data.forEach(item => {
                            content += `
                                <tr>
                                    <td>${item.nama_barang}</td>
                                    <td>${item.harga_satuan}</td>
                                    <td>${item.jumlah}</td>
                                    <td>${item.sub_total}</td>
                                </tr>
                            `;
                        });
                        content += `</tbody></table>`;
                        document.getElementById('detailContent').innerHTML = content;
                    })
                    .catch(error => {
                        document.getElementById('detailContent').innerHTML = `
                            <div class="alert alert-danger">Gagal memuat data.</div>
                        `;
                    });
            });
        });
    });
</script>

@endsection
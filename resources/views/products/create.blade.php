<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="text-center mb-0">Upload Bukti Pembayaran</h3>
        </div>
        <div class="card-body">
            <!-- Error Handling -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h5><i class="bi bi-exclamation-triangle-fill"></i> Whoops! Ada beberapa masalah:</h5>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Product Form -->
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label fw-bold">Nama Anda</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="detail" class="form-label fw-bold">Catatan</label>
                    <textarea name="detail" class="form-control" rows="4" placeholder="Tambahkan catatan jika diperlukan" required>{{ old('detail') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label fw-bold">Unggah Bukti Pembayaran</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                    <small class="text-muted">Format file: JPG, PNG, atau PDF. Maksimal ukuran 2MB.</small>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle-fill"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

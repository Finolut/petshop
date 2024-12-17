@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Bukti Pembayaran Customer</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Catatan</th>
                <th>Bukti Pembayaran</th>
                <th>Tanggal Pembayaran</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <img src="/images/{{ $product->image }}" alt="Image of {{ $product->name }}" width="100" class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal-{{ $product->id }}">
                        
                        <!-- Modal for Full Image -->
                        <div class="modal fade" id="imageModal-{{ $product->id }}" tabindex="-1" aria-labelledby="imageModalLabel-{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel-{{ $product->id }}">{{ $product->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="/images/{{ $product->image }}" alt="Image of {{ $product->name }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $product->created_at->format('d-m-Y H:i:s') }}</td> <!-- Format Tanggal Dibuat -->
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No products available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

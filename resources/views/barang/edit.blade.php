@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-4">{{ __('Edit Barang') }}</h2>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('barang.index') }}" class="btn btn-sm btn-primary mb-1 animate-up-2"><i
                                        class="fas fa-arrow-left me-2"></i>
                                    Kembali</a>
                            </div>
                            <form action="{{ route('barang.update', $barang) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div>
                                            <label for="nama_barang">Nama Barang</label>
                                            <input class="form-control @error('nama_barang') is-invalid @enderror"
                                                id="nama_barang" name="nama_barang" type="text"
                                                placeholder="Masukkan nama barang"
                                                value="{{ old('nama_barang') ?? $barang->nama_barang }}">
                                            @error('nama_barang')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div>
                                            <label for="harga">Harga Barang</label>
                                            <input class="form-control @error('harga') is-invalid @enderror" id="harga"
                                                name="harga" type="number" placeholder="Masukkan harga barang"
                                                value="{{ old('harga') ?? $barang->harga }}">
                                            @error('harga')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button class="btn  btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                            class="fas fa-paper-plane me-2"></i>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

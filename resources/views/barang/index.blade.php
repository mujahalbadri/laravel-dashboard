@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Barang') }}</h2>

            @if (Auth::user()->role == 'staff')
                <div class="me-lg-3">
                    <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary mb-3 animate-up-2"><i
                            class="fas fa-plus me-2"></i>
                        Tambah</a>
                </div>
            @endif

            <table class="table table-hover table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">{{ __('No') }}</th>
                        <th class="border-0">{{ __('Nama Barang') }}</th>
                        <th class="border-0">{{ __('Harga') }}</th>
                        @if (Auth::user()->role == 'staff')
                            <th class="border-0 rounded-end">{{ __('Action') }}</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barangs as $barang)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $barang->nama_barang }}</td>
                            <td class="align-middle">Rp. {{ number_format($barang->harga) }}</td>
                            @if (Auth::user()->role == 'staff')
                                <td class="align-middle">
                                    <a href="{{ route('barang.edit', $barang) }}"
                                        class="btn btn-sm px-4 btn-info animate-up-2"><i
                                            class="fas fa-edit me-2"></i>Edit</a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete"
                                        class="btn btn-sm px-3 btn-danger animate-up-2"><i
                                            class="fas fa-trash me-2"></i>Hapus</button>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="align-middle text-center">Data Barang Kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div
                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                {{ $barangs->links() }}
            </div>
        </div>

        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    @foreach ($barangs as $barang)
                        <form action="{{ route('barang.destroy', $barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Hapus Data Barang</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda ingin menghapus data barang?
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                                <button type="button" class="btn btn-primary text-gray ms-auto"
                                    data-bs-dismiss="modal">Kembali</button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @if ($message = Session::get('success'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ $message }}',
            })
        </script>
    @endif
@endsection

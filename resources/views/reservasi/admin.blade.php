@extends('partials.app')

@section('content')
<div class="container pt-5 mt-5"> 
    <h2 class="mb-4 text-center">Daftar Reservasi</h2>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="shadow card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Tanggal Reservasi</th>
                                    <th>Waktu Berakhir</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($reservations as $reservation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $reservation->user->nama_user ?? 'N/A' }}</td>
                                        <td>{{ $reservation->tgl_reservasi }}</td>
                                        <td>{{ $reservation->tgl_berakhir }}</td>
                                        <td>{{ number_format($reservation->total_harga, 0, ',', '.') }} IDR</td>
                                        <td>
                                            @if($reservation->status)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-danger">Nonaktif</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data reservasi</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div> <!-- End table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
@if(!request()->is('reservasi.index'))
    <footer>
        <!-- Konten footer di sini -->
    </footer>
@endif
@endsection

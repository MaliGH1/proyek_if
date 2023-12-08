@extends('layouts.mainadmin')

@section('head')
<!-- CSS DataTables -->
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('container')

<div class="flex flex-col text-white ml-20">
    <!-- Adjust ml-64 for sidebar width -->
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 mt-16">
        <!-- Added mt-16 (top margin) -->
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 pr-16">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th class="px-4 py-2">No. Invoice</th>
                            <th class="px-4 py-2">Nama Customer</th>
                            <th class="px-4 py-2">Mobil</th>
                            <th class="px-4 py-2">Plat Mobil</th>
                            <th class="px-4 py-2">Nama Supir</th>
                            <th class="px-4 py-2">Tanggal Pinjam</th>
                            <th class="px-4 py-2">Tanggal Kembali</th>
                            <th class="px-4 py-2">Jaminan</th>
                            <th class="px-4 py-2">Total Biaya</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $data)
                        <tr>
                            <td class="px-4 py-2">{{ $data->no_invoice }}</td>
                            <td class="px-4 py-2">{{ $data->nama_customer }}</td>
                            <td class="px-4 py-2">{{ $data->tipe_mobil }}</td>
                            <td class="px-4 py-2">{{ $data->nopol }}</td>
                            <td class="px-4 py-2">{{ $data->supir }}</td>
                            <td class="px-4 py-2">{{ $data->tanggal_pinjam }}</td>
                            <td class="px-4 py-2">{{ $data->tanggal_kembali }}</td>
                            <td class="px-4 py-2">{{ $data->jaminan }}</td>
                            <td class="px-4 py-2">{{ $data->total_biaya }}</td>
                            <!-- <td class="px-4 py-2">
                                <form action="verifikasi.blade.php" method="POST">
                                    <input type="hidden" name="no_invoice" value={{ $data->no_invoice }} />
                                    <input type="submit" name="approve" value="Approve" />
                                    <input type="submit" name="deny" value="Deny" />
                                </form>
                            </td> -->
                            <td><label class="badge bg-success"
                                    style="display: inline-block;min-width: 90px;">{{ $data->verifikasi }}</label></td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item bg-success" href="#"></i>
                                                Approve</a></li>
                                        <li><a class="dropdown-item bg-danger" href="#"></i>
                                                Reject</a></li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#rentalTable').DataTable({
        "lengthMenu": [10, 25, 50, 75, 100],
        "pageLength": 10
    });
});
</script>

@endsection
@extends('layouts.mainadmin')

@section('head')
  <!-- CSS DataTables -->
  <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('container')

<div class="flex flex-col text-white ml-20"> <!-- Adjust ml-64 for sidebar width -->
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 mt-16"> <!-- Added mt-16 (top margin) -->
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 pr-16"> 
      <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
          <tr>
                <th class="px-4 py-2">No. Nota</th>
                <th class="px-4 py-2">Tanggal</th>
                <th class="px-4 py-2">Saldo Masuk</th>
                <th class="px-4 py-2">Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @foreach($transaksi as $data)
                <tr>
                    <td class="px-4 py-2">{{ $data->nama_customer }}</td>
                    <td class="px-4 py-2">{{ $data->mobil }}</td>
                    <td class="px-4 py-2">{{ $data->plat_mobil }}</td>
                    <td class="px-4 py-2">{{ $data->tipe_mobil }}</td>
                    <td class="px-4 py-2">{{ $data->supir }}</td>
                    <td class="px-4 py-2">{{ $data->tanggal_pinjam }}</td>
                    <td class="px-4 py-2">{{ $data->tanggal_kembali }}</td>
                    <td class="px-4 py-2">{{ $data->jaminan }}</td>
                    <td class="px-4 py-2">{{ $data->total_biaya }}</td>
                    <td class="px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Verifikasi</button></td>
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

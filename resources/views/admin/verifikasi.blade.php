@extends('layouts.mainverifikasi')

@section('content')
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-semibold mb-4">Verifikasi Data Customer</h1>

    <!-- Tabel Data -->
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Nama Customer</th>
                <th class="px-4 py-2">Mobil</th>
                <th class="px-4 py-2">Plat Mobil</th>
                <th class="px-4 py-2">Tipe Mobil</th>
                <th class="px-4 py-2">Supir</th>
                <th class="px-4 py-2">Tanggal Pinjam</th>
                <th class="px-4 py-2">Tanggal Kembali</th>
                <th class="px-4 py-2">Jaminan</th>
                <th class="px-4 py-2">Total Biaya</th>
                <th class="px-4 py-2">Verifikasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sewa as $data)
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
@endsection

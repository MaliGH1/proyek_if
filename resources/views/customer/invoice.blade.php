<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DVJR Rent Cars | INVOICE</title>
    <link rel="stylesheet" href="css/main.css" class="">
    <link href="/dist/tailwind.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-black">
    <div class="bg-black rounded-lg shadow-lg px-8 py-10 max-w-xl mx-auto border-8 border-white">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center">
                <div class="font-bold text-yellow-300 text-[15px] ml-3">DVJR</div>
            </div>
            <div class="text-white">
                <div class="font-bold text-xl mb-2">INVOICE</div>
                <div class="text-sm">{{$sewa->created_at}}</div>
                <div class="text-sm">#{{$sewa->no_invoice}}</div>
            </div>
        </div>
        <div class="border-b-2 border-white pb-8 mb-8">
            <h2 class="text-white text-2xl font-bold mb-4">Tagihan Kepada:</h2>
            <div class="text-white mb-2">Nama Customer: {{$sewa->nama_customer}}</div>
            <div class="text-white mb-2">No telp: {{$sewa->nohp}}</div>
            <div class="text-white">Alamat: {{$sewa->alamat}}</div>
        </div>
        <table class="w-full text-left mb-8">
            <thead>
                <tr>
                    <th class="text-white font-bold uppercase py-2">Barang</th>
                    <th class="text-white font-bold uppercase py-2">Harga</th>
                    <th class="text-white font-bold uppercase py-2">Lama Sewa(Hari)</th>
                    <th class="text-white font-bold uppercase py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-4 text-white">{{$sewa->nama_mobil}}</td>
                    <td class="py-4 text-white">{{$sewa->supir}}</td>
                    <td class="py-4 text-white">{{$sewa->durasi}}</td>
                    <td class="py-4 text-white">{{$sewa->total_biaya}}</td>
                </tr>
                <tr>
                    <td class="py-4 text-white">Supir</td>
                    <td class="py-4 text-white">Rp 50.000,00</td>
                    <td class="py-4 text-white">2</td>
                    <td class="py-4 text-white">Rp 100.000,00</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-end mb-8">
            <div class="text-white mr-2">Total:</div>
            <div class="text-white font-bold text-xl">RP 700.000,00</div>
        </div>
        <div class="border-t-2 border-gray-300 pt-8 mb-8">
            <div class="text-white text-sm mb-2">Untuk Menyelesaikan Pemesanan, Mohon mengirim Dp 50% dari total Harga</div>
            <div class="text-white text-sm mb-2">Kirim Ke No. Rek............</div>
            <div class="text-white">Upload Bukti Transfer</div>
            <div class="">
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
            </div>
        </div>
    </div>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black">
    <div class="container mx-auto p-10">
        <div class="bg-black text-white border-solid border-2 border-white rounded shadow p-8">
            <div class="flex items-center">
                <div class="font-bold text-yellow-300 text-[15px] mr-3">DVJR</div>
            </div>
            <h1 class="text-3xl font-bold mb-5">Invoice #{{ $sewa->no_invoice }}</h1>
            <div class="flex justify-between items-center mb-5">
                <div>
                    <h2 class="text-xl font-bold mb-3">Rincian Pemesanan</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td>Nama: </td>
                                <td>: {{ $sewa->nama_customer }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon </td>
                                <td> : {{ $sewa->nohp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat </td>
                                <td>: {{ $sewa->alamat }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-3">Tanggal</h2>
                    <p>{{ $sewa->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <table class="table-auto w-full mb-5">
                <tbody>
                    <tr>
                        <td class="border px-4 py-2 font-bold"></td>
                        <td class="border px-4 py-2 font-bold">Keterangan</td>
                        <td class="border px-4 py-2 font-bold">Harga</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 font-bold">Mobil</td>
                        <td class="border px-4 py-2">{{ $sewa->nama_mobil }}</td>
                        <td class="border px-4 py-2">Rp. {{ $mobil->sewa }}</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2 font-bold">Sopir</td>
                        <td class="border px-4 py-2">{{ $sopir->nama }}</td>
                        <td class="border px-4 py-2">Rp. {{ $sopir->harga }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 font-bold">Tanggal Ambil</td>
                        <td class="border px-4 py-2 text-blue-500">{{ $sewa->tanggal_pinjam}}</td>
                        <td class="border px-4 py-2" rowspan=2></td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 font-bold">Tanggal Kembali</td>
                        <td class="border px-4 py-2 text-red-500"> {{ $sewa->tanggal_kembali}}</td>
                    </tr>
                    <tr>
                        <td colspan=2 class="border px-4 py-2 font-bold text-right">Total</td>
                        <td class="border px-4 py-2 font-bold">Rp. {{ $sewa->total_biaya }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between p-4">
                <div>
                    <h3 class="text-xl text-red-600">Harap Diperhatikan :</h3>
                        <ul class="text-xs list-disc list-inside">
                        <li>Bawa nota ini pada saat pengambilan mobil (Capture Invoice ini).</li>
                        <li>Riwayat pemesanan anda dapat dibatalkan jika terindikasi melakukan penipuan (Mengirimkan bukti transfer palsu).</li>
                        <li>Jika anda tidak melakukan pembayaran sampai tanggal pengambilan, maka transaksi dianggap hangus.</li>
                        <li>Pembayaran DP dapat dilakukan dengan transfer ke nomor rekening yang ada.</li>
                        <li>Silakan unggah bukti transfer ke submission dibawah ini.</li>
                    </ul>
                </div>
                <div class="p-4">
                        <h3>No. Rekening: </h3>
                        <div class="text-4xl italic text-indigo-500">123456789</div>
                        <h6><i>*rekening atas nama XXXXX</i></h6>
                </div>
            </div>
            <div class="p-4">
                <form action="" method="post">
                    <label class="block mb-2 text-sm font-medium dark:text-white" for="bukti">Upload Bukti Transfer</label>
                    <input class="bukti block w-2/3 mb-5 text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="bukti" name="bukti" type="file">
                    <button class="px-4 py-2 text-sm text-white bg-blue-500">Kirim</button>
                </form>
             </div>
        </div>
    </div>
</body>
</html>
<!doctype html>
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
                <div class="text-sm">Tanggal Pemesanan</div>
                <div class="text-sm">Invoice #: INV12345</div>
            </div>
        </div>
        <div class="border-b-2 border-white pb-8 mb-8">
            <h2 class="text-white text-2xl font-bold mb-4">Tagihan Kepada:</h2>
            <div class="text-white mb-2">Nama Customer</div>
            <div class="text-white mb-2">No telp: </div>
            <div class="text-white">Email: </div>
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
                    <td class="py-4 text-white">Toyota Yaris</td>
                    <td class="py-4 text-white">Rp 300.000,00</td>
                    <td class="py-4 text-white">2</td>
                    <td class="py-4 text-white">Rp 600.000,00</td>
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
            <div class="text-white mb-2">Untuk Menyelesaikan Pemesanan, Mohon mengirim Dp 50% dari total Harga</div>
            <div class="text-white mb-2">Kirim Ke No. Rek............</div>
            <div class="text-white">Upload Bukti Transfer</div>
            <div class="">
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
            </div>
        </div>
    </div>
</body>

</html>
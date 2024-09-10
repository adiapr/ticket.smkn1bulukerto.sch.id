<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        @page {
            margin: 0; /* Hapus semua margin pada halaman */
        }

        body {
            font-family: "Times New Roman", Times, serif; /* Gunakan font Times New Roman */
            width: 80mm; /* Lebar printer termal */
            margin: 0; /* Hapus semua margin */
            padding: 0; /* Hapus semua padding */
        }

        .content {
            margin-top: 30px; /* Hapus margin konten */
            padding: 0; /* Hapus padding konten */
            width: 100%; /* Pastikan konten mengisi lebar penuh */
            text-align: center; /* Pusatkan teks di dalam div */
            display: flex; /* Menggunakan Flexbox */
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
        }

        h3 {
            margin: 0px; /* Hapus margin default pada h3 */
            margin-top: 8px;
            padding: 0; /* Hapus padding default pada h3 */
            width: 100%; /* Mengisi lebar penuh */
        }
        .text-sm{
            font-size: 14px;
        }
        .mt-2{
            margin-top: 2px;
        }
    </style>
</head>
<body>
    <div class="content">
        <img src="https://webstoriess.enkosa.com/wp-content/uploads/2024/01/Download-Logo-Bus-Agra-Mas-PNG.png" alt=""
            width="200"
            style="margin: -40px 0px; filter: grayscale(100%);"
        >
        <h3>PO. {{ $ticket->agent_name }}</h3>
        <b class="text-sm">TELP. 021. 293 899 71, SMS 082221119500</b> <br>
        <span class="text-sm">
            www.agramasgroup.com
        </span> <br class="mt-2" style="margin: 10px ">
        <span class="text-sm mt-2">
            10 Tiket Gratis 1 Tiket Dengan Nama yang sama selama 1 Tahun
        </span>
        <h3>{{ $ticket->start_city }} - {{ $ticket->end_city }}</h3>
        <h3>Rp.{{ number_format($ticket->price) }},-</h3>

        <p>Pembelian {{ \Carbon\Carbon::parse($ticket->order_date)->format('d M y') }} {{ $ticket->order_time }}</p>
        <!-- Tambahkan konten tambahan sesuai kebutuhan -->
        <div style="width: 40%; float: left; text-align: center; display:flex; align-items:center">
            <div>
                <br>
                <br>

                <img 
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png" alt=""
                    width="100"
                >
                <br>
                {{ $ticket->agent_code }} - {{ $ticket->chair_no }}
            </div>
        </div>
        <div style="width: 60%; float: left">
            <div style="margin-right: 80px">
                <table style="text-align: center">
                    <tr style="vertical-align: top">
                        <td>
                            <b>Nama :</b> <br>
                            {{ $ticket->name }}
                        </td>
                        <td>
                            <b>Telephon :</b> <br>
                            <span class="text-sm">{{ $ticket->phone }} </span>
                        </td>
                    </tr>
                    <tr style="vertical-align: top">
                        <td>
                            <br>
                            <b>Dari :</b> <br>
                            <span class="text-sm">
                                {{ $ticket->start_location  }}
                                <br>
                                {{ \Carbon\Carbon::parse($ticket->start_date)->format('d M y') }} <br>{{ $ticket->start_time }}
                            </span>
                        </td>
                        <td>
                            <br>
                            <b>Tujuan :</b> <br>
                            <span class="text-sm">
                                {{ $ticket->end_location }} <br>
                                {{ \Carbon\Carbon::parse($ticket->end_date )->format('d M y') }} <br> {{ $ticket->end_time }}
                            </span>
                        </td>
                    </tr>
                    <tr style="padding-top: 100px">
                        <td>
                            <b>No. Kursi</b>
                        </td>
                        <td>
                            <h2>
                                {{ $ticket->chair_no }}
                            </h2>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

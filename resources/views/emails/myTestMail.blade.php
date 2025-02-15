<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style type="text/css">
        .th {
            text-align: left;
        }

        body,
        p,
        th,
        td,
        h1 {
            font-family: "Segoe UI", Arial, sans-serif;
        }

    </style>
</head>
<body>
    <h1>{{ $title }}</h1>

    <p>
        Hai {{ $emailParticipantName }}, Terima kasih telah mendaftar untuk acara kami di BCM Indonesia. Berikut adalah rincian pendaftaran Anda:
    </p>

    <p>Info Peserta :</p>
    <table class="mb-10">
        <tr>
            <th>Nama </th>
            <td>: {{ $emailParticipantName }}</td>
        </tr>
        <tr>
            <th>Email </th>
            <td>: {{ $participantEmail }}</td>
        </tr>
        <tr>
            <th>No Handphone </th>
            <td>: {{ $participantNumber }}</td>
        </tr>
        <tr>
            <th>Jabatan/Unit Kerja </th>
            <td>: {{ $participantUker }}</td>
        </tr>
    </table>

    <p>Info Perusahaan :</p>
    <table class="mb-10">
        <tr>
            <th>Nama Instansi/Perusahaan </th>
            <td>: {{ $companyName }}</td>
        </tr>
        <tr>
            <th>Alamat </th>
            <td>: {{ $companyAddress }}</td>
        </tr>
        <tr>
            <th>Email </th>
            <td>: {{ $companyEmail }}</td>
        </tr>
    </table>

    <p>
        Jika Anda memiliki pertanyaan atau kekhawatiran, silakan hubungi tim dukungan pelanggan kami di info@bcm-indonesia.com. <br>

        Terima kasih telah mendaftar untuk acara kami!
    </p>
</body>
</html>

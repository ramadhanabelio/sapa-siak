<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Status Pengaduan</title>
</head>

<body>
    <h2>Halo, {{ $report->name }}</h2>

    @if ($report->status === 'pending')
        <p>Pengaduan Anda dengan subjek <strong>"{{ $report->subject }}"</strong> telah <strong>diterima</strong>.</p>
        <p>Silakan tunggu konfirmasi lebih lanjut dari kami melalui email ini.</p>
    @elseif($report->status === 'proses')
        <p>Pengaduan Anda dengan subjek <strong>"{{ $report->subject }}"</strong> sedang <strong>diproses</strong>.</p>
        <p>Silakan tunggu konfirmasi lagi dari kami.</p>
    @elseif($report->status === 'selesai')
        <p>Pengaduan Anda dengan subjek <strong>"{{ $report->subject }}"</strong> telah <strong>selesai</strong> dan
            sedang dievaluasi.</p>
        <p>Terima kasih atas pengaduan Anda.</p>
    @else
        <p>Status pengaduan Anda: <strong>{{ strtoupper($report->status) }}</strong></p>
    @endif

    <hr>
    <p><strong>Isi Pesan Anda:</strong></p>
    <blockquote>{{ $report->message }}</blockquote>

</body>

</html>

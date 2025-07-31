<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Status Pengaduan</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f5f6fa; margin: 0; padding: 0;">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f5f6fa; padding: 20px;">
        <tr>
            <td>
                <table align="center" cellpadding="0" cellspacing="0" width="600"
                    style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="padding: 30px; text-align: center; background-color: #2d3436; color: #ffffff;">
                            <h1 style="margin: 0; font-size: 24px;">Status Pengaduan Anda</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px; color: #2d3436;">
                            <h2 style="margin-top: 0;">Halo, {{ $report->name }}</h2>

                            @if ($report->status === 'pending')
                                <p style="font-size: 16px;">Pengaduan Anda dengan subjek
                                    <strong>"{{ $report->subject }}"</strong> telah <strong>diterima</strong>.
                                </p>
                                <p style="font-size: 16px;">Silakan tunggu konfirmasi lebih lanjut dari kami melalui
                                    email ini.</p>
                            @elseif($report->status === 'proses')
                                <p style="font-size: 16px;">Pengaduan Anda dengan subjek
                                    <strong>"{{ $report->subject }}"</strong> sedang <strong>diproses</strong>.
                                </p>
                                <p style="font-size: 16px;">Silakan tunggu konfirmasi lagi dari kami.</p>
                            @elseif($report->status === 'selesai')
                                <p style="font-size: 16px;">Pengaduan Anda dengan subjek
                                    <strong>"{{ $report->subject }}"</strong> telah <strong>selesai</strong> dan sedang
                                    dievaluasi.
                                </p>
                                <p style="font-size: 16px;">Terima kasih atas pengaduan Anda.</p>
                            @else
                                <p style="font-size: 16px;">Status pengaduan Anda:
                                    <strong>{{ strtoupper($report->status) }}</strong>
                                </p>
                            @endif

                            <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">

                            <p style="font-size: 16px; margin-bottom: 5px;"><strong>Isi Pesan Anda:</strong></p>
                            <blockquote
                                style="background-color: #f1f2f6; padding: 15px; border-left: 4px solid #2d3436; font-style: italic; margin: 0;">
                                {{ $report->message }}
                            </blockquote>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="padding: 20px; text-align: center; background-color: #f1f2f6; color: #636e72; font-size: 12px;">
                            &copy; {{ date('Y') }} Aplikasi Pengaduan Masyarakat Siak. Semua Hak Dilindungi.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meeting Confirmed</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:20px 0;">
    <tr>
        <td align="center">
            
            <!-- Main Container -->
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">

                <!-- Header -->
                <tr>
                    <td style="background:#2e7d32; padding:25px; text-align:center;">
                        <h1 style="color:#ffffff; margin:0; font-size:24px;">
                            Green Hut Real Estate
                        </h1>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">
                        
                        <p style="margin-top:0;">
                            Dear <strong>{{ $messageData->full_name }}</strong>,
                        </p>

                        <p>
                            We are pleased to inform you that your meeting has been <strong style="color:#2e7d32;">successfully confirmed</strong>.
                        </p>

                        <!-- Details Box -->
                        <table width="100%" cellpadding="10" cellspacing="0" style="background:#f9f9f9; border:1px solid #eeeeee; border-radius:6px; margin:20px 0;">
                            
                            <tr>
                                <td><strong>📅 Date & Time:</strong></td>
                                <td>
                                    {{ \Carbon\Carbon::parse(json_decode($messageData)->preferred_time)->format('F d, Y \a\t h:i A') }}
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Meeting Location / Platform:</strong></td>
                                <td>Green Hut Office / Online Meeting</td>
                            </tr>
                        </table>

                        <p>
                            {{ $replyMessage }}
                        </p>

                        <p>
                            If you need to reschedule, please contact us at least 24 hours in advance.
                        </p>

                        <p style="margin-bottom:0;">
                            Best Regards,<br>
                            <strong>Green Hut Real Estate Team</strong>
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f1f1f1; padding:20px; text-align:center; font-size:13px; color:#666666;">
                        <p style="margin:5px 0;">
                            📞 {{ $siteSettings->phone ?? '01754720343' }} | ✉ {{ $siteSettings->email ?? 'zhripon97@gmail.com' }}
                        </p>
                        <p style="margin:5px 0;">
                            © {{ date('Y') }} Green Hut Real Estate. All Rights Reserved.
                        </p>
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>

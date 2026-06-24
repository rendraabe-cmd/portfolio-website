<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">

    <div style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); color: white; padding: 30px; border-radius: 10px 10px 0 0;">
        <h1 style="margin: 0; font-size: 24px;">📬 New Portfolio Message</h1>
        <p style="margin: 10px 0 0; opacity: 0.9;">Someone reached out via your portfolio website!</p>
    </div>

    <div style="background: #f9fafb; padding: 30px; border-radius: 0 0 10px 10px; border: 1px solid #e5e7eb;">

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #4f46e5; width: 100px;">From:</td>
                <td style="padding: 10px 0;">{{ $contactName }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #4f46e5;">Email:</td>
                <td style="padding: 10px 0;">
                    <a href="mailto:{{ $contactEmail }}" style="color: #4f46e5;">{{ $contactEmail }}</a>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #4f46e5;">Subject:</td>
                <td style="padding: 10px 0;">{{ $contactSubject }}</td>
            </tr>
        </table>

        <div style="margin-top: 20px; padding: 20px; background: white; border-left: 4px solid #4f46e5; border-radius: 5px;">
            <h3 style="margin: 0 0 10px; color: #4f46e5;">Message:</h3>
            <p style="margin: 0; white-space: pre-wrap;">{{ $contactMessage }}</p>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e5e7eb; text-align: center; color: #6b7280; font-size: 12px;">
            <p style="margin: 0;">
                Sent from <strong style="color: #4f46e5;">Rendra Portfolio Website</strong>
                · Reply directly to respond to {{ $contactName }}
            </p>
        </div>
    </div>

</body>
</html>

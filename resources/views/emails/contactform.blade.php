<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="background-color: black; font-family: sans-serif; font-size: 15px; line-height: 20px; color: white;">
    <table width="100%" cellpadding="20" cellspacing="0">
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <h1 style="margin: 30px; font-size: 20px;">Website Message from: {{ $contactName }}</h1>
            </td>
        </tr>
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <p style="margin: 0px 30px;"><b>From:</b> {{ $contactName }} <i>({{ $contactEmail }})</i> <i>({{ $contactMobile }})</i></p>
                <p style="margin: 0px 30px;"><b>Subject:</b> {{ $contactSubject }}</p>
                <p style="margin: 0px 30px;"><b>Message:</b></p>
                <p style="margin: 0px 30px;">{{ $contactMessage }}</p>
            </td>
        </tr>
    </table>
</body>
</html>
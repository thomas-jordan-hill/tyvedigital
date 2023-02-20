<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<style>
@font-face {
    font-family: "Tw Cen MT";
    src: url('https://www.tyvedigital.com/public/storage/font/Tw-Cen-MT.eot');
    src: url('https://www.tyvedigital.com/public//storage/font/Tw-Cen-MT.eot?#iefix') format('embedded-opentype'),
        url('https://www.tyvedigital.com/public//storage/font/Tw-Cen-MT.woff2') format('woff2'),
        url('https://www.tyvedigital.com/public//storage/font/Tw-Cen-MT.woff') format('woff'),
        url('https://www.tyvedigital.com/public//storage/font/Tw-Cen-MT.ttf') format('truetype');
    font-weight: normal;
}
</style>    
<body style="background-color: #303BD0; font-family: TW Cen MT, sans-serif; color: white;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="100%" cellpadding="0" cellspacing="0">
                <img style="margin: 30px 10px; width: 200px; max-width: 200px;" src="https://www.tyvedigital.com/storage/logo/tyvedigital-logo.svg">
                <h1 style="font-size: 37px; margin: 0px 10px 20px 10px;">Contact Us</h1>
                <hr style="margin: 0px 10px 20px 10px; border-bottom: 1px solid #D0DAFF"/>
                <h2 style="font-size: 21px; margin: 0px 10px 10px 10px;">New request from:</h1>
                <h2 style="font-size: 28px; margin: 0px 10px 20px 10px;">{{ $contactName }}</h1>
                <p style="color: #D0DAFF; font-size: 16px; margin: 0px 10px 10px 10px;"><b>Contact details:</b></p>
                <p style="color: #D0DAFF; font-size: 21px; margin: 0px 10px 10px 10px;"><b><a style="color: #D0DAFF; text-decoration: none;" href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a></p>
                <p style="color: #D0DAFF; font-size: 21px; margin: 0px 10px 20px 10px;"><b><a style="color: #D0DAFF; text-decoration: none;" href="tel:{{ $contactMobile }}">{{ $contactMobile }}</a></p>
                <!--<p style="color: #D0DAFF; font-size: 16px; margin: 0px 10px 10px 10px;"><b>Subject:</b></p>
                <p style="color: #D0DAFF; font-size: 21px; margin: 0px 10px 20px 10px;"></p>
                <p style="color: #D0DAFF; font-size: 16px; margin: 0px 10px 10px 10px;"><b>Message:</b></p>-->
                <p style="color: #303BD0; font-size: 21px; margin: 0px 10px 20px 10px; padding: 30px; background: #D0DAFF; border-radius: 25px;"><span style="text-decoration: underline; margin-bottom: 10px;">{{ $contactSubject }}</span><br><small>{{ $contactMessage }}</small></p>
                <p style="color: #D0DAFF; font-size: 11px; margin: 0px 10px 10px 10px;">Date of message: <?php echo date("d/m/Y h:i:sa");?></p>
            </td>
        </tr>
    </table>
</body>
</html>
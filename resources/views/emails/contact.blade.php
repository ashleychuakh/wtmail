<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Lead Enquiry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="margin: 0; padding: 0;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: 10px 0 30px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                        <tr>
                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px; padding-bottom: 10px;">
                                            <b>Lead Enquiry</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; background-color: #F5F5F5; border: 1px dotted #2C2C2C;">
                                            <dl style="line-height: 1.0;">
                                                <dt style="display: inline-block; color: #2C2C2C; width: 10%;">Name:</dt>
                                                <dd style="display: inline-block; color: #2C2C2C;">{{ $name }}</dd>
                                            </dl>
                                            <dl style="line-height: 1.0;">
                                                <dt style="display: inline-block; color: #2C2C2C; width: 10%;">Email:</dt>
                                                <dd style="display: inline-block; color: #2C2C2C;">{{ $email }}</dd>
                                            </dl>
                                            <dl style="line-height: 1.0;">
                                                <dt style="display: inline-block; color: #2C2C2C; width: 10%;">Phone:</dt>
                                                <dd style="display: inline-block; color: #2C2C2C;">{{ $phone }}</dd>
                                            </dl>
                                            <dl style="line-height: 1.0;">
                                                <dt style="display: inline-block; color: #2C2C2C; width: 10%;">Company:</dt>
                                                <dd style="display: inline-block; color: #2C2C2C;">{{ $company }}</dd>
                                            </dl>
                                            <dl style="line-height: 1.0;">
                                                <dt style="display: inline-block; color: #2C2C2C; width: 10%;">Message:</dt>
                                                <dd style="display: inline-block; color: #2C2C2C;">{{ $body }}</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding: 20px 0 0 0; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                                            <div style="background-color: #2C2C2C; padding: 10px 0 10px 0; border-collapse: separate; border-radius: 4px;">
                                                <a href="mailto:{{ $email }}" style="color: #fff;">E-Mail Client</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
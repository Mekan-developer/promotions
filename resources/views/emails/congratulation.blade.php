<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поздравляем с добавлением в Arassa Nusga</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <h1 style="font-size: 24px; color: #333333; margin: 0;">Добро пожаловать, {{ $name }}!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 20px; color: #555555; font-size: 16px;">
                <p>Уважаемый(ая) {{ $name }},</p>
                <p>Поздравляем! Вы добавлены в раздел «Поставщики Arassa Nusga».</p>
                <table cellpadding="10" cellspacing="0" border="0" width="100%" style="margin: 20px 0;">
                    <tr>
                        <td style="background-color: #f9f9f9; border: 1px solid #dddddd;">Имя поставщика:</td>
                        <td style="background-color: #f9f9f9; border: 1px solid #dddddd;">{{ $name }}</td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9; border: 1px solid #dddddd;">Электронная почта:</td>
                        <td style="background-color: #f9f9f9; border: 1px solid #dddddd;">{{ $email }}</td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9; border: 1px solid #dddddd;">Контактный номер:</td>
                        <td style="background-color: #f9f9f9; border: 1px solid #dddddd;">{{ $number }}</td>
                    </tr>
                </table>
                <p>Мы рады сотрудничеству с вами! Если у вас возникнут вопросы, наша служба поддержки всегда готова помочь.</p>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 20px; background-color: #333333; color: #ffffff;">
                <p style="margin: 0;">&copy; {{ date('Y') }} Arassa Nusga. Все права защищены.</p>
            </td>
        </tr>
    </table>

</body>
</html>

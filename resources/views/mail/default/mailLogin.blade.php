<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录到{{$name}}</title>
    <style>
        body { margin: 0; padding: 0; background-color: #f6f8fc; font-family: Arial, Helvetica, sans-serif; color: #333333; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; }
        .header { background: #5a67d8; padding: 40px 0; text-align: center; color: #ffffff; font-size: 28px; font-weight: bold; }
        .content { padding: 40px; text-align: center; }
        .greeting { font-size: 24px; font-weight: bold; margin-bottom: 20px; color: #1a202c; }
        .message { font-size: 16px; line-height: 1.6; margin-bottom: 20px; color: #4a5568; }
        .button { display: inline-block; background: #5a67d8; color: #ffffff; padding: 14px 30px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 16px; transition: background 0.3s ease; }
        .button:hover { background: #4a5ab8; }
        .warning { font-size: 14px; color: #718096; margin-top: 20px; }
        .footer { background: #f7fafc; padding: 20px; text-align: center; font-size: 12px; color: #a0aec0; border-top: 1px solid #e2e8f0; }
        .footer a { color: #5a67d8; text-decoration: none; font-weight: bold; }
        .footer a:hover { text-decoration: underline; }
        @media only screen and (max-width: 600px) {
            .container { margin: 10px; }
            .header { font-size: 24px; padding: 30px 0; }
            .content { padding: 30px 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            登录到{{isset($name) ? $name : '您的应用'}}
        </div>
        <div class="content">
            <div class="greeting">尊敬的用户，您好！</div>
            <div class="message">
                您正在尝试登录到{{isset($name) ? $name : '您的应用'}}。为确保您的账户安全，请在 5 分钟内点击下方按钮完成登录过程。如果这不是您本人的操作，请忽略此邮件并及时修改密码。
            </div>
            <a href="{{isset($link) ? $link : '#'}}" class="button">立即登录</a>
            <div class="warning">
                此链接仅在 5 分钟内有效。请勿与他人分享，以保护您的账户安全。
            </div>
        </div>
        <div class="footer">
            <a href="{{$url}}">返回{{$name}}</a>
        </div>
    </div>
</body>
</html>

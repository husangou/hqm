<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>网站通知</title>
    <style>
        body { margin: 0; padding: 0; background-color: #f6f8fc; font-family: Arial, Helvetica, sans-serif; color: #333333; }
        .container { max-width: 600px; margin: 20px auto; background: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; }
        .header { background: #5a67d8; padding: 40px 0; text-align: center; color: #ffffff; font-size: 28px; font-weight: bold; }
        .content { padding: 40px; text-align: center; }
        .greeting { font-size: 24px; font-weight: bold; margin-bottom: 20px; color: #1a202c; }
        .message { font-size: 16px; line-height: 1.6; margin-bottom: 20px; color: #4a5568; }
        .default-message { font-style: italic; color: #718096; }
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
            网站通知
        </div>
        <div class="content">
            <div class="greeting">尊敬的用户，您好！</div>
            <div class="message">
                <!-- 检查 $content 是否有值，若无则显示默认提示 -->
                @if(isset($content) && !empty($content))
                    {!! nl2br($content) !!}
                @else
                    <div class="default-message">暂无具体通知内容，请检查系统设置。</div>
                @endif
            </div>
        </div>
        <div class="footer">
            <a href="{{$url}}">返回{{$name}}</a>
        </div>
    </div>
</body>
</html>

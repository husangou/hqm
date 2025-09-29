<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流量通知</title>
    <style>
        body { margin: 0; padding: 0; background-color: #f6f8fc; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: #333333; }
        .container { max-width: 600px; margin: 50px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); animation: fadeIn 1s ease-out; }
        .header { background: linear-gradient(135deg, #5a67d8, #667eea); padding: 50px 0; text-align: center; color: #ffffff; font-size: 32px; font-weight: 700; letter-spacing: 0.5px; position: relative; }
        .header::after { content: ''; position: absolute; bottom: -20px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #667eea; opacity: 0.3; }
        .content { padding: 50px 50px 30px; text-align: center; opacity: 0; animation: slideUp 0.8s ease-out 0.5s forwards; }
        .greeting { font-size: 26px; font-weight: 600; margin-bottom: 25px; color: #1a202c; }
        .message { font-size: 16px; line-height: 1.7; margin-bottom: 35px; color: #4a5568; max-width: 80%; margin-left: auto; margin-right: auto; }
        .progress-container { width: 90%; margin: 0 auto 30px; background: #e9ecef; border-radius: 50px; height: 24px; position: relative; overflow: hidden; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1), inset 0 -1px 2px rgba(255, 255, 255, 0.5); }
        .progress-bar { background: linear-gradient(90deg, #fd9644, #eb4d4b); width: 95%; height: 100%; border-radius: 50px; position: relative; animation: progressAnimation 1.5s ease-out forwards; }
        .progress-bar::after { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, rgba(255,255,255,0.2), rgba(255,255,255,0)); }
        .progress-text { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 16px; font-weight: 700; color: #ffffff; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); }
        .footer { background: #f7fafc; padding: 30px 50px; text-align: center; font-size: 13px; color: #a0aec0; border-top: 1px solid #e2e8f0; opacity: 0; animation: fadeIn 1s ease-out 1.2s forwards; }
        .footer a { color: #5a67d8; text-decoration: none; font-weight: 600; transition: color 0.3s ease; }
        .footer a:hover { color: #434190; text-decoration: underline; }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes progressAnimation {
            from { width: 0; }
            to { width: 95%; }
        }
        @media only screen and (max-width: 600px) {
            .content { padding: 40px 30px 20px; }
            .header { font-size: 28px; padding: 40px 0; }
            .message { max-width: 100%; }
            .progress-container { width: 100%; height: 20px; }
            .progress-text { font-size: 14px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            流量通知
        </div>
        <div class="content">
            <div class="greeting">尊敬的用户，您好！</div>
            <div class="progress-container">
                <div class="progress-bar"></div>
                <div class="progress-text">95%</div>
            </div>
            <div class="message">
                你的流量已经使用95%。为了不造成使用上的影响请合理安排流量的使用。
            </div>
        </div>
        <div class="footer">
            <a href="{{$url}}">返回{{$name}}</a>
        </div>
    </div>
</body>
</html>

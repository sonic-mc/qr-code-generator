<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        header {
            background-color: #0d6efd;
            color: white;
            padding: 20px 0;
            width: 100%;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        .content {
            background-color: #fff;
            padding: 30px;
            margin-top: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
            text-align: center;
        }

        .qr-container {
            margin: 20px auto;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            color: #0d6efd;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>QR Code Generator</h1>
    </header>

    <div class="content">
        <h2>Your Generated QR Code</h2>

        @isset($qr)
            <div class="qr-container">
                {!! $qr !!}
            </div>
        @else
            <p>No QR code to display.</p>
        @endisset

        <a href="/qr-form" class="back-link">🔙 Back to Form</a>
    </div>
</body>
</html>

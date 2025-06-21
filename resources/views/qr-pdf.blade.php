<!DOCTYPE html>
<head>
    <title>QR Code PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            text-align: center;
            padding: 40px;
        }
        img {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>QR Code for:</h2>
    <p>{{ $link }}</p>

    <img src="data:image/png;base64,{{ $qrImage }}" alt="QR Code">
</body>
</html>

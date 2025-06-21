<!DOCTYPE html>

<head>
    <title>QR Code</title>
</head>
<body>
    <h1>Your QR Code</h1>

    @isset($qr)
        <div>{!! $qr !!}</div>
    @else
        <p>No QR code to display.</p>
    @endisset

    <p><a href="/qr-form">🔙 Back to Form</a></p>
</body>
</html>

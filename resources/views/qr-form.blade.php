<!DOCTYPE html>
<head>
    <title>QR Code Generator Form</title>
</head>
<body>
    <h1>Generate a QR Code</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/generate-qr" method="POST">
        @csrf
        <input type="text" name="link" placeholder="Enter a valid URL" required>
        <button type="submit">Generate QR Code</button>
    </form>
</body>
</html>

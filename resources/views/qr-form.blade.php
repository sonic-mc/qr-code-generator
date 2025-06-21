<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Generator Form</title>
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
            width: 90%;
            max-width: 500px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"] {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0b5ed7;
        }

        .error-messages {
            color: #dc3545;
            margin-bottom: 10px;
        }

        .back-link {
            margin-top: 15px;
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
        <h2>Enter a URL to generate a QR code</h2>

        @if ($errors->any())
            <div class="error-messages">
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
    </div>
</body>
</html>

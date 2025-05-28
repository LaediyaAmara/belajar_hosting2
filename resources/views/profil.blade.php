<!DOCTYPE html>
<html>
<head>
    <title>Profil Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 50px;
        }
        .profil {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="profil">
        <h2>Profil Diri</h2>
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Bio:</strong> {{ $bio }}</p>
    </div>
</body>
</html>

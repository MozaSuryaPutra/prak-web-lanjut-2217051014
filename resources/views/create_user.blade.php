<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <style>
        /* Styling untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Card container untuk form */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Styling judul */
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Styling input form */
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Tombol submit */
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        /* Hover efek untuk tombol submit */
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Styling pesan deskripsi */
        .form-container p {
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Create User</h2>
        <p>Isi data di bawah ini untuk membuat pengguna baru.</p>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="kelas" placeholder="Kelas" required>
            <input type="text" name="npm" placeholder="NPM" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

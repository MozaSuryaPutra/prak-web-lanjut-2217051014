<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Document</title>
    <style>
        .Penuh {
            height: auto;
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid #2c3e50;
            border-radius: 10px;
            background-color: #ecf0f1;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
            padding: 20px;
        }

        .lingkaran1 {
            width: 150px;
            height: 150px;
            background-image: url('{{ asset('images/aku.jpeg') }}');
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            border: 5px solid #2980b9;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .lingkaran1:hover {
            transform: scale(1.1);
        }

        .text-box {
            background-color: #3498db;
            color: white;
            width: 250px;
            line-height: 30px;
            border-radius: 5px;
            margin: 10px auto;  
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            padding: 5px;
        }

        .text-box:hover {
            background-color: #2980b9;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="Penuh">
        <div class="lingkaran1"></div>
        <div class="text-box">{{$nama}}</div>
        <div class="text-box">{{$kelas}}</div>
        <div class="text-box">{{$npm}}</div>
    </div>
</body>
</html>

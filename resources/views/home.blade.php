<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | RPL Hotel</title>

    {{-- Icons Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- styling CSS --}}
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            /* height: 1000vh; */
        }

        /* Header Content */
        .container {
            position: relative;
            background-image: url({{ asset('img/bg-hotel1.jpg') }});
            /* background-attachment: fixed; */
            height: 100vh;
            background-size: cover;
            display: block;
            /* display: flex;
            justify-content: center;
            align-items: center;
            z-index: -1; */
        }

        .container .tagline {
            position: absolute;
            left: 50%;
            transform: translate(-50%, 50%);
            top: 50%;
            align-content: center;
            margin-top: -10rem;
            text-align: center;
        }

        .tagline h1 {
            font-size: 3rem;
            font-weight: 200;
            margin-bottom: 1rem;
            color: #2d2d2d;
        }

        .tagline p {
            color: #2d2d2d;
        }

        /* Info */
        .info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            display: flex;
            gap: 2.3rem;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.4);
            width: 50%;
            padding: 20px 20px;
        }

        .info .col {
            display: block;
            text-align: center;
        }

        .col h4 {
            font-size: 0.7rem;
            color: #878787;
            margin-bottom: 0.4rem;
            ;
        }

        .col p {
            font-size: 0.9rem;
        }

        .col input {
            position: absolute;
            top: 50%;
            height: 2rem;
            transform: translateY(-50%);
            border-radius: 5px;
            border: 1px solid #000;
        }

        .col input:focus {
            border-color: #004984;
            outline: none;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Header Page --}}
    <div class="container">
        <div class="tagline">
            <h1>Start Your Vacation with us</h1>
            <p>Discover the world with Luxury Hotel. Get the best service with us.</p>
        </div>
        <div class="info">
            <div class="col">
                <h4>Places, Hotel</h4>
                <p>Bali, Indonesia</p>
            </div>
            <div class="col">
                <h4>Check In</h4>
                <p>Aug 04</p>
            </div>
            <div class="col">
                <h4>Check Out</h4>
                <p>Aug 06</p>
            </div>
            <div class="col">
                <h4>Guest</h4>
                <p>2 guest</p>
            </div>
            <div class="col">
                <input type="search" placeholder="Search a Key">
            </div>
        </div>
    </div>

    {{-- Daftar Kamar --}}
    <x-room></x-room>

    {{-- Footer --}}
    <x-footer></x-footer>

</body>

</html>

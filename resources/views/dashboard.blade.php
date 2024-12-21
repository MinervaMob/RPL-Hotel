<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <style>
        :root {
            --color1: #0b6477;
            --color2: #0ad1c8;
            --color3: #4a19c8;
            --color4: #f41590;
        }

        * {
            padding: 0;
            margin: 0;
        }

        .container-dashboard {
            background-image: url('img/mesh-545.png');
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .dashboard {
            padding: 12rem 2rem;
        }

        form button {
            background: linear-gradient(120deg, var(--color1), var(--color2));
            width: 7rem;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            border-radius: 15px;
            height: 2rem;
            transition: all 0.4s ease;
            cursor: pointer;
            margin-top: 2rem;
        }

        form button:hover {
            background: transparent;
            transform: scale(1.1);
            border: 1px solid #fff;
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <x-navbar-dashboard></x-navbar-dashboard>

    <div class="container-dashboard">
        <div class="dashboard">
            <h1 class="sapaan">Welcome to Admin Dashboard</h1>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>

    </div>

</body>

</html>

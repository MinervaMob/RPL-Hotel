<style>
    :root {
        --color1: #0b6477;
        --color2: #0ad1c8;
    }

    * {
        padding: 0;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
    }

    body {
        /* height: 1000vh; */
    }

    .container-navBoard {
        background-color: rgb(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        display: flex;
        padding: 1rem 2rem;
        width: 100%;
        position: fixed;
        top: 0;
        z-index: 10;
        box-shadow: 2px 1px 10px rgb(0, 0, 0, 0.3);
    }

    .logo-brand {
        display: flex;
        margin-right: 3rem;
        justify-content: center;
        align-items: center;
    }

    .logo-brand img {
        width: 3rem;
    }

    .logo-brand h1 {
        font-size: 1.2rem;
    }

    .menu {
        display: flex;
        justify-content: flex-end;
        margin-left: auto;
    }

    .menu ul {
        list-style-type: none;
        display: flex;
        gap: 2rem;
        align-items: center;
    }

    .menu ul a {
        text-decoration: none;
        color: #000000;
        font-weight: 500;
        box-sizing: border-box;
        display: inline-block;
        transition: all 0.4s ease;
        position: relative;
    }

    .menu ul a:hover {
        color: var(--color1);
        transform: scale(1.1);
    }
</style>

<nav class="container-navBoard" id="navBoard">
    <div class="logo-brand">
        <img src="{{ asset('img/logo-hotel.png') }}" alt="logo">
        <h1>RPL Luxury Hotel</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="/home-admin">Home</a></li>
            <li><a href="/fasilitas-admin">Fasilitas</a></li>
            <li><a href="/kamar-admin">Kamar</a></li>
            <li><a href="/info-admin">Admin</a></li>
        </ul>
    </div>
</nav>

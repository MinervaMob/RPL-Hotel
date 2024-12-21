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

    .nav {
        background-color: transparent;
        display: flex;
        padding: 1rem 2rem;
        width: 100%;
        position: fixed;
        top: 0;
        z-index: 10;
    }

    .blurred {
        backdrop-filter: blur(10px);
        box-shadow: 2px 1px 10px rgb(0, 0, 0, 0.3);
        background-color: rgba(255, 255, 255, 0.3);
        /* Warna semi-transparan */
        transition: all 0.5s ease;
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
        color: #ffffff;
        transform: scale(1.1);
    }
</style>

<nav class="nav" id="nav">
    <div class="logo-brand">
        <img src="{{ asset('img/logo-hotel.png') }}" alt="logo">
        <h1>RPL Luxury Hotel</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/room">Room</a></li>
            <li><a href="/service">Service</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('scroll', function() {
        const header = document.querySelector('.nav'); // Elemen yang ingin diberi efek blur
        if (window.scrollY > 50) { // Jika scroll lebih dari 50px
            header.classList.add('blurred');
        } else {
            header.classList.remove('blurred');
        }
    });
</script>

<style>
    :root {
        --warna1: #3d5112;
        --warna2: #ffffff;
        --warna3: #000;
        --warna4: #004882;
        --warna5: #cfcfcf;
        --warna6: #fedcb2;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container-login {
        background-image: url({{ asset('img/indoor.jpg') }});
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
    }

    .container-login .login {
        background: rgb(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        border-radius: 17px;
        box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.4);
        padding: 1rem;
        text-align: center;
        width: 30%;
        height: auto;
        ;
    }

    .login img {
        width: 3rem;
        margin-bottom: 2rem;
    }

    .login h2 {
        margin-bottom: 2rem;
        text-transform: uppercase;
    }

    .login .form-login {
        display: block;
        text-align: left;
        width: 100%;
    }

    .form-login label {
        margin-bottom: 1rem;
    }

    .form-login input {
        width: 100%;
        height: 3rem;
        padding: 0 0 0 10px;
        margin-bottom: 1.6rem;
        border: 2px solid var(--warna6);
        border-radius: 1.5rem;
        background-color: var(--warna2);
        transition: all 0.4s ease;
    }

    .form-login input:focus {
        transform: scale(1.02);
    }

    .form-login input::placeholder {
        margin-left: 1rem;
        font-style: italic;
        font-size: 1rem;
    }

    .login button {
        width: 100%;
        height: 1.5rem;
        background-color: var(--warna1);
        border: none;
        color: var(--warna2);
        height: 2rem;
        border-radius: 1rem;
        margin-bottom: 1.5rem;
        transition: all 0.4s ease;
        cursor: pointer;
    }

    .login button:hover {
        transform: scale(1.05);
    }

    .login p {
        font-size: 0.9rem;
    }
</style>

<div class="container-login">
    <div class="login">
        <img src="{{ asset('img/logo-hotel.png') }}" alt="">
        <h2>Login</h2>
        <div class="form-login">
            
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <input type="text" name="username" id="username" placeholder="Your Username" required><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                @if ($errors->has('login_error'))
                    <p style="color: red;">{{ $errors->first('login_error') }}</p>
                @endif
                <button type="submit">LOGIN</button>
            </form>
            
        </div>
        
        <p>Belum punya akun? <span><a href="/register">Daftar</a></span></p>
    </div>
</div>

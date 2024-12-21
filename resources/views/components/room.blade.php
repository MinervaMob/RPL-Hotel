<style>
    .container-room {
        text-align: center;
        margin-top: 3rem;
        padding: 0 2rem;
    }

    .container-room h1 {
        font-size: 1.3rem;
        font-weight: 500;
    }

    .room {
        margin-top: 3rem;
        display: flex;
        justify-content: space-evenly;
        align-items: flex-start;
    }

    .room .row-card {
        max-width: 60%;
        display: flex;
        /* justify-content: space-evenly; */
        gap: 1rem;
        flex-wrap: wrap;
    }

    .room .card {
        background-color: #b3b3b3;
        width: 10rem;
        display: flex;
        flex-direction: column;
        text-align: left;
        transition: all 0.4s ease;
    }

    .room .card:hover {
        transform: scale(1.05);
    }

    .room .card .img-room {
        width: 100%;
    }

    .room .card .logo-hotel {
        width: 1.3rem;
        float: left;
        margin: 0 0 0.8rem 0.8rem;
    }

    .card h4 {
        float: left;
        font-weight: 600;
        font-size: 0.8rem;
        margin-left: 0.8rem;
    }

    .card .info-room {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.8rem;
    }

    .info-room .no-kamar,
    .nilai-harga p {
        font-size: 0.8rem;
    }

    .room .last-deal {
        width: 40%;
        background-color: rgb(199, 144, 77);
        padding: 0.5rem;
        border-radius: 1rem;
    }

    .last-deal h1 {
        margin-bottom: 1rem;
        text-transform: uppercase;
        font-size: 1rem;
        font-weight: 600;
        text-align: left;
    }

    .deal-info {
        display: flex;
    }

    .deal-info img {
        width: 10rem;
        margin-bottom: 1rem;
    }

    .deal-info .info-fasilitas {
        text-align: left;
        margin-left: 0.5rem;
    }

    .deal-info .info-fasilitas h3 {
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .deal-info .info-fasilitas p {
        font-size: 0.8rem;
    }
</style>

<div class="container-room">
    <h1>Daftar Kamar</h1>
    <div class="room">
        <div class="row-card">
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="img-room" src="{{ asset('img/kamar-hotel.jpg') }}" alt=""><br>
                <img class="logo-hotel" src="{{ asset('img/logo-hotel.png') }}" alt="">
                <h4>RPL Hotel Room</h4>

                <div class="info-room">
                    <p class="no-kamar">No kamar: 001</p>
                    <div class="nilai-harga">
                        <p>4.7</p>
                        <p>IDR 1.500.000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="last-deal">
            <h1>Latest Deal</h1>
            <div class="deal-info">
                <img src="{{ asset('img/kamar-hotel.jpg') }}" alt="">
                <div class="info-fasilitas">
                    <h3>Swiming Pool</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi aut eius quis?
                    </p>
                </div>
            </div>
            <div class="deal-info">
                <img src="{{ asset('img/kamar-hotel.jpg') }}" alt="">
                <div class="info-fasilitas">
                    <h3>Swiming Pool</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi aut eius quis?
                    </p>
                </div>
            </div>
            <div class="deal-info">
                <img src="{{ asset('img/kamar-hotel.jpg') }}" alt="">
                <div class="info-fasilitas">
                    <h3>Swiming Pool</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi aut eius quis?
                    </p>
                </div>
            </div>
            <div class="deal-info">
                <img src="{{ asset('img/kamar-hotel.jpg') }}" alt="">
                <div class="info-fasilitas">
                    <h3>Swiming Pool</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi aut eius quis?
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

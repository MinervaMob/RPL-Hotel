<style>
            .footer {
            width: 100%;
            padding: 3rem 2rem 1rem 2rem;
            background-color: #3d5112;
            margin-top: 3rem;
            bottom: 0;
        }

        .footer .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo {
            display: block;
            width: 33%;
        }

        .footer-logo p {
            color: #b3b3b3;
            font-size: 13px;
            margin-top: 1rem;
        }

        .footer-logo .logoimg {
            width: 3rem;
        }

        .footer-logo .footer-payment {
            display: block;
        }

        .footer-payment h3 {
            color: #b3b3b3;
            margin: 1rem 0;
            font-weight: 600;
            font-size: 16px;
        }

        .payment-icons {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #fff;
            padding: 1rem;
            border-radius: 12px;
            width: 50%;
            margin-bottom: 3rem;
        }

        .payment-icons .img1,
        .payment-icons .img2,
        .payment-icons .img3 {
            width: 3rem;
        }

        .footer-bottom {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0;
        }

        .footer-bottom p {
            color: #b3b3b3;
            font-size: 13px;
        }

        .footer-links h3 {
            color: #b3b3b3;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-links ul {
            list-style-type: none;
        }

        .footer-links ul li {
            margin-bottom: 1rem;
        }

        .footer-links ul li a {
            text-decoration: none;
            color: #b3b3b3;
            transition: all 0.4s ease;
        }

        .footer-links ul li a:hover {
            color: #000;
        }

        .footer-social h3 {
            color: #b3b3b3;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-social .social-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 50%;
            gap: 0.5rem;
            margin-bottom: 1rem;;
        }

        .footer-social .social-icons a {
            color: #b3b3b3;
            font-size: 1.3rem;
            transition: all 0.4s ease;
        }

        .footer-social .social-icons a:hover {
            color: #000;
            transform: scale(1.1);
        }

        .footer-social .footer-contact p {
            color: #b3b3b3;
            font-size: 13px;
            margin-bottom: 0.4rem;
        }
</style>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="img/logo-hotel.png" alt="Your Logo" class="logoimg" />
            <p>Luxury Hotel adalah sebuah perusahaan yang menyediakan sebuah sewa kamar murah dengan fasilitas
                terbaik kami.</p>
            <div class="footer-payment">
                <h3>Payment Methods</h3>
                <div class="payment-icons">
                    <img src="img/dana.png" alt="Dana" class="img1" />
                    <img src="img/bri.png" alt="BRI" class="img2" />
                    <img src="img/paypal.png" alt="PayPal" class="img3" />
                </div>
            </div>
        </div>

        <div class="footer-links">
            <h3>Link Halaman</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <!-- Follow Us & Contact -->
        <div class="footer-social">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#">
                    <i class="bi bi-twitter-x"></i>
                </a>
                <a href="#">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Location: Jl. Contoh No.123, Jakarta</p>
                <p>Email: info@yourcompany.com</p>
                <p>Phone: +62 812 3456 7890</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer-bottom">
        <p>&copy; 2024 RPL luxury Hotel. All Rights Reserved.</p>
    </div>
</footer>
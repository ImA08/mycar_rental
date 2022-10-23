<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <title>MyCar Rental</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header section -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="logo"> <i>My<span>Car</span>Rental</i></a>
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#OureService">Our Services</a>
            <a href="#WhyUs">Why Us?</a>
            <a href="#Testimonial">Testimonials</a>
            <a href="#FAQs">FAQs</a>
        </nav>

        <div id="login-btn">
            <button class="btn">Login</button>
            <i class="far fa-user"></i>
        </div>
    </header>

    <div class="login-form-container">

        <span class="fas fa-times" id="close-login-form"></span>

        <form action="">
            <h3>USER LOGIN</h3>
            <input type="text" placeholder="username" class="box">
            <input type="password" placeholder="password" class="box">
            <p>Lupa password? <a href="#">Klik disini</a></p>
            <input type="submit" value="login" class="btn">
            <p>Atau masuk dengan</p>
            <div class="button">
                <a href="#" class="btn">Google</a>
                <a href="#" class="btn">Facebook</a>
            </div>
            <p>Belum punya akun? <a href="#">Daftar disini</a></p>
        </form>
    </div>

    <!-- home section start -->
    <section class="home" id="home">
        <h1 class="home-parallax" data-speed="-0.25">Sewa & rental mobil terbaik di kawasan(lokasimu)</h1>
        <img class="home-parallax" data-speed="3" src="img/bg_img.png" alt="">
        <a href="#" class="btn home-parallax" data-speed="5">Mulai sewa mobil</a>

    </section>
    <!-- end of home section -->

    <!-- icon section start -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>15+</h3>
                <p>Cabang</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>200+</h3>
                <p>Mobil dirental</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>250+</h3>
                <p>pelanggan puas</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>100+</h3>
                <p>Mobil baru</p>
            </div>
        </div>

    </section>


    <!-- icon section end -->

    <!-- cars section -->

    <section class="vehicles" id="vehicles">

        <h1 class="heading"> popular <span>vehicles</span> </h1>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="img/vehicle-1.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> $62,000/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> $62,000/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> $62,000/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> $62,000/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-5.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> $62,000/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-6.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> $62,000/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- ends of cars section -->











    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
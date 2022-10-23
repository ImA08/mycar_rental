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
            <a href="#">Home</a>
            <a href="#OurService">Our Services</a>

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
                        <div class="price"> <span>price : </span> Rp. -/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Bensin
                            <span class="fas fa-circle"></span> 4 kursi
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> Rp. -/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Bensin
                            <span class="fas fa-circle"></span> 4 kursi
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> Rp. -/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Bensin
                            <span class="fas fa-circle"></span> 4 kursi
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> Rp. -/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Bensin
                            <span class="fas fa-circle"></span> 4 kursi
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-5.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> Rp. -/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Bensin
                            <span class="fas fa-circle"></span> 4 kursi
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/vehicle-6.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="price"> <span>price : </span> Rp. -/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Bensin
                            <span class="fas fa-circle"></span> 4 kursi
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- ends of cars section -->

    <!-- our services -->

    <section class="services" id="OurService">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Rental Mobil</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>Service</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>asuransi</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>Ganti Baterai</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>Ganti Oli</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

        </div>

    </section>

    <!-- ends of services -->

    <!-- Testimonials -->

    <section class="reviews" id="Testimonial">

        <h1 class="heading"> <span>Testimonial</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="img/pic-1.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/pic-2.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/pic-3.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/pic-4.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/pic-5.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/pic-6.png" alt="">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- ends of Testimonials -->

    <!-- Faqs -->

    <div class="container" id="FAQs">


        <h1 class="heading"> <span>FAQs</span> </h1>

        <div class="accordion-container">

            <div class="accordion active">
                <div class="accordion-heading">
                    <h3>accordion heading 01</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>accordion heading 02</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>accordion heading 03</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>accordion heading 04</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>accordion heading 05</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>accordion heading 06</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
                </p>
            </div>

        </div>

    </div>


    <!-- ends of faqs -->

    <!-- footer -->
    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> testimonial </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +62 xxx xxxx xxx </a>
                <a href="#"> <i class="fas fa-phone"></i> +62 xxx xxxx xxx </a>
                <a href="#"> <i class="fas fa-envelope"></i> mycarrental@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Padang, Indonesia </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>

            </div>

        </div>



    </section>
    <!-- ends of footer -->











    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
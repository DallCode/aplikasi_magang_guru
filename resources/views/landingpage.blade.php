@extends('layouts.main')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <img src="{{ asset('asset/template/assets/img/hero-bg-abstract.jpg') }}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-out">
                    <div class="col-xl-7 col-lg-9 text-center">
                        <h1>One Page Bootstrap Website Template</h1>
                        <p>We are team of talented designers making websites with Bootstrap</p>
                    </div>
                </div>

                <div class="row gy-4 mt-5">
                    <div class="row">
                        <!-- Login Guru -->
                        <div class="login-card" style="animation-delay: 0.1s">
                            <div class="icon">👨‍🏫</div>
                            <h4 class="title"><a href="/login.guru">Login Guru</a></h4>
                            <p class="description">
                                Akses untuk para guru untuk mengelola materi dan mengatur jadwal pengajaran.
                            </p>
                            <a href="/guru-login" class="btn">Login sebagai Guru</a>
                        </div>

                        <!-- Login Admin -->
                        <div class="login-card" style="animation-delay: 0.3s">
                            <div class="icon">👨‍💼</div>
                            <h4 class="title"><a href="#">Login Admin</a></h4>
                            <p class="description">
                                Akses untuk admin untuk mengelola pengguna dan mengatur sistem sekolah.
                            </p>
                            <a href="{{ route('login-admin') }}" class="btn">Login sebagai Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip...</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit...</span>
                            </li>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip...</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @foreach (['Clients' => 232, 'Projects' => 521, 'Hours Of Support' => 1453, 'Workers' => 32] as $label => $count)
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="{{ $count }}"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>{{ $label }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- About Alt Section -->
        <section id="about-alt" class="about-alt section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('asset/template/assets/img/about.jpg') }}" class="img-fluid" alt="">
                        <a href="https://youtu.be/1eL_dJjlvDs?si=ZULdbRVJFjlQEGpT" class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                    mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Alt Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('asset/template/assets/img/clients/client-1.png') }}" class="img-fluid"
                            alt="Client 1">
                    </div>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('asset/template/assets/img/clients/client-2.png') }}" class="img-fluid"
                            alt="Client 2">
                    </div>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('asset/template/assets/img/clients/client-3.png') }}" class="img-fluid"
                            alt="Client 3">
                    </div>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('asset/template/assets/img/clients/client-4.png') }}" class="img-fluid"
                            alt="Client 4">
                    </div>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('asset/template/assets/img/clients/client-5.png') }}" class="img-fluid"
                            alt="Client 5">
                    </div>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('asset/template/assets/img/clients/client-6.png') }}" class="img-fluid"
                            alt="Client 6">
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Para mentor chlorine</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('asset/template/assets/img/team/pg-01.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Hardyansyah</h4>
                                <span>Founder</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('asset/template/assets/img/team/pg-02.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Adam Setia Nugraha</h4>
                                <span>Creative Director</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('asset/template/assets/img/team/pg-03.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Adri Yanto</h4>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('asset/template/assets/img/team/mutiara.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Mutiara Tresna Manggarani</h4>
                                <span>Talent Acting</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->



        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Lokasi Kami</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8289502403645!2d107.60456531256958!3d-6.91104578252043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e98c564bbf67%3A0xdd763cba46ed36c1!2sChlorine%20Digital%20Media%20-%20Layanan%20Digital%20Marketing%20%26%20Social%20Media%20Management!5e0!3m2!1sid!2sid!4v1731913807402!5m2!1sid!2sid"
                        frameborder="0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Jl. Kebon Sirih No.40 Lantai 1, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>0821-4040-5444</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@chlorinedigitalmedia.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
    </main>
@endsection

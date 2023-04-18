<div class="container-xxl bg-white p-0">
@include('dcrud::website.T892343505.spinner')
<style> .owl-item p{height:200px;overflow:hidden}</style>
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" >
                <a href="" class="navbar-brand p-0">
           <img src="{{url("/")}}/vendors/892343505/img/1679248589_640x280.png" style="object-fit:contain;height:53px" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>s
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
@foreach($navpanel as $n)                        
<a href="{{$n->webpath}}" class="nav-item nav-link @if(basename(url()->current())==$n->webpath) active @endif ">{{$n->name}}</a>
@endforeach
                      
                       
                    <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                    <a href="https://dcrud.app/signup" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Get Started</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5" style="height: 760px;overflow:hidden;">
                <div class="container my-5 py-5 px-lg-5" style="height: 760px;overflow:hidden;">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">high-quality solutions that meet the unique needs</h1>
                            <p class="text-white pb-3 animated zoomIn">We are a technology company that specializes in providing web app, mobile app, and lottery display services to businesses and organizations with a focus on innovation and customer satisfaction</p>
                            <a href="#about" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Learn More</a>
                            <a href="/contact" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" style="height:86%;" src="{{url("/")}}/vendors/892343505/img/1679418904_306331093_823757255291125_1900202740210733019_n.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">The best technology parther since 2020 </h2>
                        </div>
                        <p class="mb-4">Overall, Master Solutions is a trusted technology partner for businesses and organizations looking to leverage the power of web and mobile apps, as well as lottery display systems. With a focus on innovation and customer satisfaction, it has become a leading provider of high-quality solutions in the industry.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Latest Technology</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{url("/")}}/vendors/892343505/img/1679379652_285878825_396530625761715_34700066636644659_n.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12">
                        <h3 class="text-white">Ready to get started</h3>
                        <small class="text-white">Leave us your message and we will contact you.</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5 " type="text" placeholder="Enter Your Email" style="height: 48px;">     <button type="button" class="btn btn-primary shadow-none position-absolute top-0 end-0 mt-1 me-2" style="height: 40px;">Get Quote</button>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Mobile App Development</h5>
                            <p class="">We specialize in developing mobile applications for both iOS and Android platforms. Our team has experience in creating custom applications for a variety of industries.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Application Development</h5>
                            <p>We build robust, secure, and scalable web applications that can be accessed from anywhere in the world. Our team uses the latest technologies to create web applications that are fast, efficient, and user-friendly..</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Enterprise Application Development</h5>
                            <p>Our enterprise applications are designed to streamline business processes and improve productivity. We work closely with our clients to create custom solutions that meet their unique needs.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Cloud Application Development</h5>
                            <p class="">We can help you move your applications to the cloud, providing you with greater flexibility, scalability, and cost savings.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">UX/UI Design</h5>
                            <p class="">Our team of designers creates custom designs that are tailored to our clients' needs. We use the latest design tools and technologies to create intuitive, user-friendly interfaces.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Digital Marketing</h5>
                            <p class="">We offer a range of digital marketing services to help businesses grow and succeed online. Our services include search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, and content marketing..</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{url("/")}}/vendors/892343505/img/1679418904_286852636_647420429859851_6950521919313588412_n.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{url("/")}}/vendors/892343505/img/1679418929_website_Example2.jpg" =""="" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">GSLC Miroku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{url("/")}}/vendors/892343505/img/1679418928_website_Example1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{url("/")}}/vendors/892343505/img/1679418929_website_Example3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{url("/")}}/vendors/892343505/img/1679418929_website_Example3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{url("/")}}/vendors/892343505/img/1679418904_316742337_1343616466174369_7838074588258919337_n.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p class="">ustom application for my business that exceeded my expectations. The team was very responsive and kept me informed throughout the entire process. I highly recommend them for anyone in need of application development services.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{url("/")}}/vendors/892343505/img/1679419690_a.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">GSS Cafe</h6>
                                <small>Best Cafe in NP</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{url("/")}}/vendors/892343505/img/1679419690_a.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">GSLC Miroku</h6>
                                <small>Food &amp; Beauty</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p> I've been working with this tech company for over a year now for my digital marketing needs and they have been a great partner. Their team is knowledgeable, responsive, and always willing to go the extra mile to help my business succeed online. I highly recommend their digital marketing services.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{url("/")}}/vendors/892343505/img/1679419690_a.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">AG Suppliers</h6>
                                <small>Goods and Machinery</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>I reached out to this tech company to help me set up my e-commerce store and they did an amazing job. Their team was able to help me choose the right platform, design a custom website, and even provide me with ongoing support and maintenance. I couldn't be happier with the results.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{url("/")}}/vendors/892343505/img/1679418904_316742337_1343616466174369_7838074588258919337_n.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">DB Food and Mart</h6>
                                <small>Store</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5 selected">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-6">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="{{url("/")}}/vendors/892343505/img/1679420435_Sunny.jpg" style='max-width:62%;object-fit:contain;' alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Surya Karki</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="{{url("/")}}/vendors/892343505/img/1679420618_Capture.PNG" style='max-width:62%;object-fit:contain;' alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Madan Gaire</h5>
                                <small>CTO</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class=""><i class="fa fa-map-marker-alt me-3"></i>801 West Rancier Ave</p>                        <p class=""><i class="fa fa-map-marker-alt me-3"></i>Killeen, Texas 76541</p>
                        <p class=""><i class="fa fa-phone-alt me-3"></i>(254) 813-8377</p>
                        <p><i class="fa fa-envelope me-3"></i>solutionswithmaster@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms &amp; Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="{{url("/")}}/vendors/892343505/img/1679379652_285878825_396530625761715_34700066636644659_n.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{url("/")}}/vendors/892343505/img/1679418904_316742337_1343616466174369_7838074588258919337_n.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{url("/")}}/vendors/892343505/img/1679418928_website_Example1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{url("/")}}/vendors/892343505/img/1679418929_website_Example3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{url("/")}}/vendors/892343505/img/1679418929_website_Example2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{url("/")}}/vendors/892343505/img/1679418929_website_Example2.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p class="">Leave Us your email to get information about our latest updates and newsletters.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom" href="#">Master Solutions Inc.</a>, All Right Reserved. 

                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

@include('dcrud::website.T892343505.js')
<?php

/*
 * Template name: Home
 */

get_header();

global $redux_params;



?>
<div class="owl-carousel slide-one-item">
    <div class="site-section-cover overlay img-bg-section" style="background-image: url('<?php echo $redux_params["slider-image"]["url"]; ?>'); ">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-12 col-lg-7">
                    <h1 data-aos="fade-up" data-aos-delay=""><?php echo $redux_params["slider-title"]; ?></h1>
                    <p class="mb-5 w-75 mx-auto" data-aos="fade-up" data-aos-delay="100"><?php echo $redux_params["slider-description"]; ?></p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="<?php echo $redux_params["slider-link"]; ?>"
                                                                  class="btn btn-outline-white border-w-2 btn-md">Get
                            in touch</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section" id="services-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere at delectus laudantium,
                        deserunt, atque eveniet. Voluptatem, fuga quos rerum inventore.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="flaticon-skateboard-4"></span>
                    </div>
                    <h3 class="mb-3 text-white">Skate for Beginner</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati
                    quo consequuntur mollitia facilis.
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="flaticon-skateboard"></span>
                    </div>
                    <h3 class="mb-3 text-white">Personal Training</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati
                    quo consequuntur mollitia facilis.
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="flaticon-skateboard-1"></span>
                    </div>
                    <h3 class="mb-3 text-white">Best Skater</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati
                    quo consequuntur mollitia facilis.
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="flaticon-skateboard-2"></span>
                    </div>
                    <h3 class="mb-3 text-white">Advance Skater</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati
                    quo consequuntur mollitia facilis.
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="flaticon-skateboard-3"></span>
                    </div>
                    <h3 class="mb-3 text-white">Novice to Pro Skater</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati
                    quo consequuntur mollitia facilis.
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="flaticon-skateboarding"></span>
                    </div>
                    <h3 class="mb-3 text-white">Skate Boarding</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati
                    quo consequuntur mollitia facilis.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="block__73694 mb-2">
        <div class="container">
            <div class="row d-flex no-gutters align-items-stretch">

                <div class="col-12 col-lg-6 block__73422" style="background-image: url('images/img_1.jpg');"
                     data-aos="fade-right" data-aos-delay="">
                </div>


                <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                    <h2 class="mb-3 text-primary">My Best Performance</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo minus
                        perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio,
                        maiores facere officiis. Cum, esse, iusto?</p>

                    <p>Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio,
                        maiores facere officiis. Cum, esse, iusto?</p>

                    <ul class="ul-check primary list-unstyled mt-5">
                        <li>Lorem ipsum dolor.</li>
                        <li>Quod, amet. Provident.</li>
                        <li>Quo, adipisci, quis.</li>
                        <li>Cumque perspiciatis, blanditiis?</li>
                    </ul>


                </div>

            </div>
        </div>
    </div>


    <div class="block__73694">
        <div class="container">
            <div class="row d-flex no-gutters align-items-stretch">

                <div class="col-12 col-lg-6 block__73422 order-lg-2"
                     style="background-image: url('images/img_2.jpg');" data-aos="fade-left" data-aos-delay="">
                </div>


                <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right"
                     data-aos-delay="">
                    <h2 class="mb-3 text-primary">My Best Mentor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo minus
                        perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio,
                        maiores facere officiis. Cum, esse, iusto?</p>

                    <p>Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio,
                        maiores facere officiis. Cum, esse, iusto?</p>

                    <ul class="ul-check primary list-unstyled mt-5">
                        <li>Lorem ipsum dolor.</li>
                        <li>Quod, amet. Provident.</li>
                        <li>Quo, adipisci, quis.</li>
                        <li>Cumque perspiciatis, blanditiis?</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section" id="about-section">
    <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
            <div class="col-md-12 mb-5">
                <figure class="block-img-video-1" data-aos="fade">
                    <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                        <span class="icon"><span class="icon-play"></span></span>
                        <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                    </a>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                        <div class="block-counter-1">
                            <span class="number text-primary"><span data-number="30">0</span>+</span>
                            <span class="caption">Year of Experience</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="block-counter-1">
                            <span class="number text-primary"><span data-number="4">0</span>+</span>
                            <span class="caption">Expert Trainer</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="block-counter-1">
                            <span class="number text-primary"><span data-number="4">0</span>+</span>
                            <span class="caption">Number of Trainer</span>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="block-counter-1">
                            <span class="number text-primary"><span data-number="1500">0</span>+</span>
                            <span class="caption">Number of Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="site-section" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                    <span>Get In Touch</span>
                    <h2>Contact Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                <form action="#" method="post">
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                      rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 ml-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                   value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-primary">Need to know more on details. Get In Touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi,
                    illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae voluptatibus fugit
                    impedit.</p>
                <p><a href="#" class="btn btn-primary text-white">Get Started</a></p>
            </div>
        </div>
    </div>
</div>


<?php

get_footer();

?>
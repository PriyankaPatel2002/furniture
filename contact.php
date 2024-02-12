<?php include 'layout/header.php'; ?>
<!-- ========================================================1================================================================ -->
<!-- ----------------------------Hero Section Start------------------------------ -->

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="hero-content">
                    <h1 class="hero-heading">Contact</h1>
                    <p class="hero-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti
                        nobis consequuntur fuga explicabo officiis magnam culpa voluptate hic nesciunt.</p>
                    <button class="btn btn-warning rounded-pill">Shop Now</button>
                    <button class="btn rounded-pill btn-techsima text-white px-4">Explore</button>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-12">
                <div class="hero-image">
                    <img src="images/couch.png" alt="hero image" class="img-gluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------Hero Section End--------------------------------------------- -->
<!-- ==================================================================2==================================================== -->
<!-- -----------------------------contact section start ----------------------------------------------->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"> </div>
            <div class="col-lg-8 contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="col-lg-10">
                                <p class="ps-2"> Darshan Nagar, Kushmaha, Ayodhya,
                                    Uttar Pradesh 224135</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-envelope"></i></span></div>
                            <div class="col-lg-10">
                                <p class="ps-3"> pinky@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-phone"></i></span></div>
                            <div class="col-lg-10">
                                <p class="ps-3"> +91 123456890</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="row g-3 mt-4">
                    <div class="col-lg- col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        <input type="text" readonly class="form-control new-field" id="first_name" name="first_name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" readonly class="form-control new-field" id="last_name" name="last_name">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="inputPassword2">Email</label>
                        <input type="password" class="form-control new-field" id="inputPassword2" name="email">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="inputPassword2">Message</label>
                        <textarea class="form-control" rows="5" id="message" rows="3" name="message" style="resize:none"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <button class="btn btn-dark mt-4 mb-5 px-4 py-3 rounded-pill ">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- -----------------------------contact section end ----------------------------------------------->
<?php include 'layout/footer.php'; ?>
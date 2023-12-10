@include('includes/header')
    <div class="row justify-content-center m-0 contact-us-page"> 
        <div class="col-12 text-center top-section py-5">
            <h2>Get In Touch</h2>
            <h1>Contact us for any query</h1>
        </div>
        <div class="col-md-11">
            <div class="row py-5 ">
                <div class="col-md-7">
                    <form action="" method="post" class="row contact-form px-md-5">
                        @csrf
                        <div class="col-12">
                            <input type="text" name="cus_name" class="form-control shadow-none rounded-0" placeholder="Your Name" required>
                        </div>
                        <div class="col-sm-6 mt-4">
                            <input type="email" name="cus_email" class="form-control shadow-none rounded-0" placeholder="Your Email" required>
                        </div>
                        <div class="col-sm-6 mt-4">
                            <input type="tel" name="cus_phone" class="form-control shadow-none rounded-0" placeholder="Your Phone">
                        </div>
                        <div class="col-12 mt-4">
                            <input type="text" name="cus_subject" class="form-control shadow-none rounded-0" placeholder="Subject" required>
                        </div>
                        <div class="col-12 mt-4">
                            <textarea name="cus_message" class="form-control shadow-none rounded-0" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12 mt-4 text-end">
                            <button type="submit" class="btn">
                                Send Message
                                <span class="spinner-border spinner-border-sm ms-3" style="display:none;"></span>
                            </button>
                        </div>
                        <div class="col-12 text-center form-message px-2"></div>
                    </form>
                </div>
                <div class="col-md-5 order-lg-first">
                    <div class="section">
                        <h3>Call Us</h3>
                        <a href="tel:+919989977788"><i class="bi bi-telephone"></i> +919989977788</a>
                    </div>
                    <div class="section">
                        <h3>Email Us</h3>
                        <a href="mailto:contact@fastensoft.com"><i class="bi bi-envelope"></i> contact@fastensoft.com</a>
                    </div>
                    <div class="section">
                        <h3>Address</h3>
                        <address><i class="bi bi-geo-alt"></i> E137/7 Abul Fazal Enclave-2 Jamia Nagar New Delhi - 110025</address>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes/footer')
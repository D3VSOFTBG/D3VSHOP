@include('theme::inc.header')

<section class="home section">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-12">
        <h1 class="mb-4">{{env('SHOP_NAME')}}.</h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus
        pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut
        accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum
        fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis.
        </p>
    </div>
    </div>
    </div>
    </section>

<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <p>There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="single-info-head">

                            <div class="single-info">
                                <i class="lni lni-map"></i>
                                <h3>Address</h3>
                                <ul>
                                    <li>{{env('ADDRESS')}}</li>
                                </ul>
                            </div>


                            <div class="single-info">
                                <i class="lni lni-phone"></i>
                                <h3>Phone</h3>
                                <ul>
                                    <li>
                                        <a href="tel:{{env('PHONE')}}">{{env('PHONE')}}</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="single-info">
                                <i class="lni lni-envelope"></i>
                                <h3>Mail</h3>
                                <ul>
                                    <li>
                                        <a href="tel:{{env('MAIL')}}">{{env('MAIL')}}</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="contact-form-head">
                            <div class="form-main">
                                <form class="form" method="post" action="assets/mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="name" type="text" placeholder="Your Name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="subject" type="text" placeholder="Your Subject"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="email" type="email" placeholder="Your Email"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="phone" type="text" placeholder="Your Phone"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn ">Submit Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('theme::inc.footer')

<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-12 col-md-8 col-12">
                        <div class="footer-newsletter">
                            <h4 class="title">
                                Subscribe to our Newsletter
                                <span>Get all the latest information, Sales and Offers.</span>
                            </h4>
                            <div class="newsletter-form-head">
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="Email address here..." type="email">
                                    <div class="button">
                                        <button class="btn">Subscribe<span class="dir-part"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-middle">
        <div class="container">
            <div class="bottom-inner">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="single-footer f-contact">
                            <h3>Contact</h3>
                            <p class="phone">Phone: <a href="tel:{{env('PHONE')}}">{{env('PHONE')}}</a></p>
                            <p class="mail">Mail: <a href="mailto:{{env('MAIL')}}">{{env('MAIL')}}</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="javascript:void(0)">TOS</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright">
                            <p>Powered by<a href="https://d3vsoft.com/" rel="nofollow" target="_blank">D3VSOFT</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>

<script src="{{asset("$theme_path/assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("$theme_path/assets/js/tiny-slider.js")}}"></script>
<script src="{{asset("$theme_path/assets/js/glightbox.min.js")}}"></script>
<script src="{{asset("$theme_path/assets/js/main.js")}}"></script>
</body>

</html>

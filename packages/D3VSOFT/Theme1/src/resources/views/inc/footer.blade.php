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
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#about">About</a>

                                    <div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">About</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{about()}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#privacy_policy">Privacy Policy</a>

                                    <div class="modal fade" id="privacy_policy" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{privacy_policy()}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#tos">TOS</a>

                                    <div class="modal fade" id="tos" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">TOS</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{tos()}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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

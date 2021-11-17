@section('page_name'){{ 'Login' }}@endsection

@include('inc.header')

<!-- =====================================
	    	==== Start breadcrumb -->
<div class="breadcrumb section-bg" style="background-image:url(assets/images/bg_breadcrumb.jpg)">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <h1>@yield('page_name')</h1>
                <ol class="item-breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span aria-hidden="true">›</span></li>
                    <li>@yield('page_name')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- =====================================
             ==== End breadcrumb -->

<!-- =====================================
             ==== Start account -->
<div class="main-content">
    <div class="page-account">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="account-wrapper">
                        <div class="tab-content">
                            <div class="account-form-container login-form">
                                <div class="account-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" class="form-control"
                                            placeholder="Username">
                                        <input type="password" name="user-password" class="form-control"
                                            placeholder="Password">
                                        <div class="button-box">
                                            <div class="login-toggle-btn d-flex justify-content-between">
                                                <div class="remember d-flex">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                </div>
                                                <div class="forgot">
                                                    <a href="#">Forgot Password?</a>

                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-default btn-normal"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- <div id="login" class="tab-pane fade show active">

                            </div>
                            <div id="register" class="tab-pane fade">
                                <div class="account-form-container register-form">
                                    <div class="account-form">
                                        <form action="#" method="post">
                                            <input type="text" name="first-name" class="form-control"
                                                placeholder="First Name">
                                            <input type="text" name="last-name" class="form-control"
                                                placeholder="Last Name">
                                            <input name="user-email" type="email" class="form-control"
                                                placeholder="Email">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <div class="button-box">
                                                <button type="submit"
                                                    class="btn btn-default btn-normal"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
</div>
<!-- =====================================
             ==== End account -->


@include('inc.footer')

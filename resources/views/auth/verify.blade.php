@section('page_name'){{ 'Verify' }}@endsection

@include('inc.header')

<!-- =====================================
	    	==== Start breadcrumb -->
<div class="breadcrumb section-bg" style="background-image:url(/assets/images/bg_breadcrumb.jpg)">
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
                            <div class="account-form-container">
                                <div class="account-form">
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf

                                        <p>
                                            <small>
                                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                                <br />
                                                {{ __('If you did not receive the email') }},
                                            </small>
                                        </p>

                                        <div class="button-box">
                                            <button type="submit"
                                                class="btn btn-default btn-normal"><span>Submit</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

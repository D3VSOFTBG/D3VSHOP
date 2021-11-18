@section('page_name'){{ 'Confirm Password' }}@endsection

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
                                    <form action="{{route('password.confirm')}}" method="post">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" required>

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

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

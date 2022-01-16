@section('page_name'){{ '403' }}@endsection

@include('errors.inc.header')

<table class="w-100 h-100">
    <tr>
        <td>
            <!-- Main content -->
            <section class="content text-center">
                <h1 class="text-danger" style="font-size: 100px;">@yield('page_name')</h1>
                <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Forbidden.</h3>

                <p class="text-center">This page is forbidden. Meanwhile, you may
                    @if (str_contains(Request::url(), 'admin'))
                    <a href="{{route('admin')}}">return to dashboard</a>.
                    @else
                    <a href="{{route('home')}}">return to home</a>.
                    @endif
                    </p>
            </section>
            <!-- /.content -->
        </td>
    </tr>
</table>

@include('errors.inc.footer')

<!DOCTYPE html>
<html lang="en" class="w-100 h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>500</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/themes/' . env('THEME_NAME') . '/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/themes/' . env('THEME_NAME') . '/dist/css/adminlte.min.css')}}">
</head>

<body class="bg-dark w-100 h-100">
    <table class="w-100 h-100">
        <tr>
            <td>
                <!-- Main content -->
                <section class="content text-center">
                    <h1 class="text-danger" style="font-size: 100px;"> 500</h1>
                    <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

                    <p class="text-center">We will work on fixing that right away. Meanwhile, you may
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
</body>

</html>

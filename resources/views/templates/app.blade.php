<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/tailwind/css/tailwind.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('styles')
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;  /* Preferred icon size */
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;

            /* Support for all WebKit browsers. */
            -webkit-font-smoothing: antialiased;
            /* Support for Safari and Chrome. */
            text-rendering: optimizeLegibility;

            /* Support for Firefox. */
            -moz-osx-font-smoothing: grayscale;

            /* Support for IE. */
            font-feature-settings: 'liga';
        }
        .bg-color-1{
            background-color: #053742;
        }
        .bg-color-2{
            background-color: #EDF6E5;
        }
        .bg-color-4{
            background-color: #FFBCBC;
        }
        .bg-color-4{
            background-color: #E8F0F2;
        }
        .text-color-1{
            color: #053742;
        }
        .text-color-2{
            color: #EDF6E5;
        }
        .text-color-3{
            color: #FFBCBC;
        }
        .text-color-4{
            color: #E8F0F2;
        }
        .border-color-1{
            border-color: #053742;
        }
        .border-color-2{
            border-color: #EDF6E5;
        }
        .border-color-3{
            border-color: #FFBCBC;
        }
        .border-color-4{
            border-color: #E8F0F2;
        }
    </style>

    <title>Web Sekolah</title>
</head>
<body>
@include('templates.navbar')
@yield('content')
@yield('scripts')
</body>
</html>

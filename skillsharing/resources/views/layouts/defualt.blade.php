<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('includes.header')
</head>

<body>
    @include('includes.navbar')


    <!--body section-->
    <div>@yield('content')</div>

    @include('includes.footer')


</body>

</html>
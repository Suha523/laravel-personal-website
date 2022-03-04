<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.frontend.head')
</head>

<body>
    @include('layouts.frontend.navbar')


<div class="wrapper">

    @include('layouts.frontend.allPorts')

</div>
    @include('layouts.frontend.footer')
    @include('layouts.frontend.scripts')
   
</body>

</html>


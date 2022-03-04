<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.frontend.head')

</head>

<body style="height: 3000px;">
    @include('layouts.frontend.navbar')
    @include('layouts.frontend.home')


<div class="wrapper">
    @include('layouts.frontend.about')
    @include('layouts.frontend.skills')
    @include('layouts.frontend.services')
    @include('layouts.frontend.portfolio')
    @include('layouts.frontend.contact')
</div>
    @include('layouts.frontend.footer')
    @include('layouts.frontend.scripts')
</body>

</html>

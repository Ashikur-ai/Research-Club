@include('user.layouts.styles')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.layouts.navbar')
{{--Showing the confirmed form message--}}
@if(session()->has('message'))
    <div class="alert text-center alert-success">
        {{ session()->get('message') }}
    </div>

@endif



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Research Club</title>

    <!-- bootstrap  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/Style.css">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>


<div class="container">
    <div class="welcome border rounded p-3 my-5">
        <h2 class="">@yield('name')</h2>
        <p>Welcome to your @yield('subName') Details. You can find all the necessary options here</p>
    </div>

</div>

@yield('main_content')

<!-- When user registered for project to the panel ,this section will be visible -->




<!-- footer end -->


<script src="./assets/js/bootstrap.min.js"></script>

</body>
</html>






<div class="page-section" >
    <div class="container">
        <div class="row align-items-center">
        </div>
    </div>
</div> <!-- .bg-light -->
<!-- .bg-light -->







@include('user.layouts.footer')

@include('user.layouts.script')

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
        <h2 class="">Student Dashboard</h2>
        <p>Welcome to Research Club</p>
    </div>
</div>

<section class="sectionOne" id="sectionOne">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/teamIcon-removebg-preview.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">Create Your Team</h5>
                <p class="mb-5" style="font-size: 12px;">Bring everyone together and get to work</p>
                <a href="{{ route('member.show') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">Create your team</div>
                </a>
            </div>
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/teamIcon-removebg-preview.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">Register for Title Defense</h5>
                <p class="mb-5" style="font-size: 12px;">Use the link below to complete your registration. Last date of registration is Monday, October 31st 2022. No submission will be received after the deadline.</p>
                <a href="{{ route('title.defense') }}">
                <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">Register for title difense</div>
                </a>
            </div>
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/teamIcon-removebg-preview.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">Find Your Supervisor</h5>
                <p class="mb-5" style="font-size: 12px;">Are you looking for a supervisor who can guide you for the next four semesters? Use the supervisor search tool to find a supervisor who can guide you completing your project or research.</p>
                <a href="{{ url('find_teacher') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">Find Supervisor</div>
                </a>
            </div>

        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/files.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">Upload your Project Files</h5>
                <a href="{{ route('file.upload') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">Upload Files</div>
                </a>
            </div>
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/feedback.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">See what your teacher says about your project</h5>
                <br>
                <a href="{{ route('feedback.show') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">Show Feedback</div>
                </a>
            </div>
        </div>
        <br><br><br>
        <hr>
        <p>Quick links</p>
        <div class="row">
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/feedback.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">See your Title Defense status</h5>
                <a href="{{ route('title_defense.details') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">View Details</div>
                </a>
            </div>
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/files.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">See your Pre-Defense status</h5>
                <a href="{{ route('pre_defense.details') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">View Details</div>
                </a>
            </div>
            <div class="col-md-3 text-center border rounded p-4 mx-4 position-relative">
                <img src="./assets/img/feedback.png" alt="" class="mx-auto d-block" style="height: 50px; width:auto;">
                <h5 class="p-2 m-0">See your Final Defense status</h5>
                <br>
                <a href="{{ route('final_defense.details') }}">
                    <div class="btn btn-outline-primary w-100 position-absolute fixed-bottom">View Details</div>
                </a>
            </div>
        </div>
    </div>
</section>
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

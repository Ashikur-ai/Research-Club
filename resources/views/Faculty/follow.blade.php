@include('user.layouts.styles')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supervised Team</title>

    <!-- bootstrap  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/Style.css">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

@include('Faculty.layouts.navbar')
@if(session()->has('message'))
    <div class="alert text-center alert-success">
        {{ session()->get('message') }}
    </div>

@endif


<!--main body start-->
<div class="container">
    <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">
        <div class="position-absolute" style="top:-25px;left:45%;background-color: white;padding: 10px;">
            <h4>Follow up</h4>
        </div>

        <div class="row">
            <form class="main-form" action="{{ route('followup') }}" method="POST" >
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Team Name</label>
                        <select name="team_name" class="custom-select">
                            @foreach($data as $row)
                            <option>-----choose your team-----</option>

                                <option value="{{ $row->teamName }}">{{ $row->teamName }}</option>


                        </select>
                        <div class="my-5">
                            <label for="">Team ID</label>
                            <input type="text" name="team_id" value="{{ $row->id }}">
                        </div>

                        @endforeach

                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Select Stage</label>
                        <select name="stage" class="custom-select">
                            <option>-----choose stage-----</option>
                                <option value="Stage 1">Stage 1</option>
                                <option value="Stage 2">Stage 2</option>
                        </select>
                    </div>


                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Mark</label>
                        <input type="text" name="mark" class="form-control" placeholder="">
                    </div>


                </div>

                <button type="submit" class="btn  btn-outline-success">Submit</button>
            </form>
        </div>

        <!--main body end-->




<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </div>
</div>
</body>

<div class="page-section" >
    <div class="container">
        <div class="row align-items-center">
        </div>
    </div>
</div>
@include('user.layouts.footer')

</html>

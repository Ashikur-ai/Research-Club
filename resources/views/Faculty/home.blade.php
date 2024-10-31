@include('user.layouts.styles')
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
<!--main body start-->
<div class="container">
    <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">
        <div class="position-absolute" style="top:-25px;left:50px;background-color: white;padding: 10px;">
            <h4 class="alert alert-primary">See all notification what to do next?</h4>
        </div>
        <div class="owl-carousel owl-theme mt-5">
            @foreach($notification as $row)
            <div class="item">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Phase: {{ $row->name }}</h5>
                        <div class="row">
                            <p class="bg-red-700 text-white">{{ $row->description }}</p>
                        </div>
                        <div class="my-5">
                            <p> Start Date: <strong>{{ $row->start_date }}</strong></p>
                            <p> End Date: <strong>{{ $row->end_date }}</strong></p>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="container">
    <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">
        <div class="position-absolute" style="top:-25px;left:50px;background-color: white;padding: 10px;">
            <h4 class="alert alert-primary">Supervising team</h4>
        </div>
        <div class="owl-carousel owl-theme mt-5">
            @foreach($data as $row)
            <div class="item">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Team Name: {{ $row->teamName }}</h5>
                        <label for="">Team Number: {{ $row->id }}</label>
                        <div class="row">
                            <label for="">First Member: {{ $row->firstMember }}</label>
                            <label for="">Second Member: {{ $row->secondMember }}</label>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!--main body end-->

<!-- owl carousel 2 start -->
<div class="container">
    <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">
        <div class="position-absolute" style="top:-25px;left:50px;background-color: white;padding: 10px;">
            <h4>Your recent Feedbacks</h4>
        </div>
        <div class="owl-carousel owl-carousel-2 owl-theme mt-5">
            @foreach($feedback as $row)
            <div class="item">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Team Serial: {{ $row->team_id }}</h5>
                        <p class="card-text">{{ $row->comment }}<span
                                id="dots">......</span></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- owl carousel 2 end -->

@include('user.layouts.footer')

<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel-2').owlCarousel({
        items: 3,
        // items change number for slider display on desktop

        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
</body>
</html>

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
            <h4>Feedback </h4>
        </div>

        <div class="row">
            <form class="main-form" action="{{ route('feedback') }}" method="POST" >
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Team Name</label>
                        <select name="team_id" class="custom-select">
                            <option>-----choose your team-----</option>
                            @foreach($data as $row)

                                <option value="{{ $row->id }}">{{ $row->teamName }}</option>
                            @endforeach
                        </select>
                        <hr>
                        <select class="custom-select" name="phase" aria-label=".form-select-sm example">
                            <option selected>Select Phase</option>
                            <option value="1">Title Defense</option>
                            <option value="2">Pre-Defense</option>
                            <option value="3">Final Defense</option>
                        </select>
                    </div>



                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Comments</label>
                        <textarea type="text" name="comment" class="form-control" placeholder=""></textarea>
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

<div class="page-section" >
    <div class="container">
        <div class="row align-items-center">
        </div>
    </div>
</div>
</body>



@include('user.layouts.footer')


<script src="./assets/js/bootstrap.min.js"></script>
<script>
    function getImagePreview(event) {
        var image = URL.createObjectURL(event.target.files[0]);
        var imagediv = document.getElementById('preview');
        var newimg = document.createElement('img');
        imagediv.innerHTML = '';
        newimg.src = image;
        newimg.height = "150";
        imagediv.appendChild(newimg);

    }
</script>
@include('user.layouts.script')



</html>

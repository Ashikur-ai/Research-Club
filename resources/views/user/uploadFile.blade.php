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

@include('user.layouts.navbar')
@if(session()->has('message'))
    <div class="alert text-center alert-success">
        {{ session()->get('message') }}
    </div>

@endif

<!--section one starts-->
<section class="sectionOne" id="sectionOne">
    <div class="container">

        <div class="row">
            <h6 class="ms-3 text-decoration-underline">Students</h6>
            <form class="main-form" action="{{ route('fileUpload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Team Name</label>
                        <select name="team_id" class="custom-select">
                            <option>-----choose your team-----</option>
                            @foreach($team as $row)

                                <option value="{{ $row->id }}">{{ $row->teamName }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">comment</label>
                        <input type="text" name="comment" class="form-control" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">File Input</label>
                        <input class="form-control" type="file" name="file" id="formFile">
                    </div>



                </div>

                <button type="submit" class="btn  btn-outline-success">Upload</button>
            </form>
        </div>



    </div>
</section>

<div class="page-section" >
    <div class="container">
        <div class="row align-items-center">
        </div>
    </div>
</div>

<!--section one ends-->

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

</body>
</html>



@include('user.layouts.script')

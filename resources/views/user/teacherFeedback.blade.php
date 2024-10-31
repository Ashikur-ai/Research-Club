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

<!--section one starts-->
<section class="sectionOne mt-5 min-vh-100" id="sectionOne">
    <div class="container">
        <div class="row">
            <div class="col-12 p-1 my-3 bg-light border border-2 rounded">
                <h1 class="text-center">Teacher Feedback</h1>
            </div>
            @foreach($feedback as $row)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Feedback ID : {{ $row->id }}</h5>
                        <h5 class="card-title">Team ID : {{ $row->team_id }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted fs-10"><h2>{{ $row->created_at }}</h2></h6>
                        <p class="card-text">{{ $row->comment }}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>
<!--section one ends-->

<!--footer section starts-->

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

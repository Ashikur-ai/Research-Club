<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Details</title>
    @include('Faculty.layouts.newlayouts.style')
</head>
<body>

@include('user.layouts.navbar')

<div class="page-section " >
    <div class="container">
        <div class="row align-items-center">
            <section class="sectionOne" id="sectionOne">
                <div class="container">

                    <dl class="row">
                        <div class="col-12 p-1 my-5 alert alert-success">
                            <h2 class="text-center">Website Development</h2>
                        </div>
                        <div class="row">
                            <div class="align-content-center">
                                <img height="300 px"  src="{{ asset('/') }}/websiteImage/{{ $data->image }}" alt="">
                            </div>

                        </div>
                        <div class="row">
                            <p for="">Project ID:    {{ $data->id }}</p>
                            <br>
                            <p for="">Project Name:    {{ $data->name }}</p>
                            <br>
                            <p for="">Project Description: <br>    {{ $data->description }}</p>

                        </div>













                </div>
            </section>
        </div>
    </div>
</div> <!-- .bg-light -->
@include('Faculty.layouts.newlayouts.script')


</body>
</html>


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
                        <div class="col-12 p-1 my-5 bg-light border border-2 rounded">
                            <h2 class="text-center">Teacher's profile</h2>
                        </div>
                        <div class="col-12 my-4">
                            <div class="row">
                                <div class="col-12 img-banner">
                                    <img height="100px" width="400px" class="" src="{{ asset('/') }}/teacherImage/{{ $user->image }}" alt="">
                                </div>
                            </div>
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>

                        @endif
                        <dt class="col-sm-3">Name  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->name }}</p>
                        </dd>
                        <dt class="col-sm-3">Teacher's ID  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->id }}</p>
                        </dd>
                        <dt class="col-sm-3">Working on  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->speciality }}</p>
                        </dd>
                        <dt class="col-sm-3">Program  :</dt>
                        <dd class="col-sm-9">
                            <p>BSc. in computrer science and engineering</p>
                        </dd>
                        <dt class="col-sm-3">Faculty  :</dt>
                        <dd class="col-sm-9">
                            <p>Faculty of Science and Information Technology</p>
                        </dd>
                        <dt class="col-sm-3">Room no.  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->room }}</p>
                        </dd>





                </div>
            </section>
        </div>
    </div>
</div> <!-- .bg-light -->
@include('Faculty.layouts.newlayouts.script')


</body>
</html>


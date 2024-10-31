@include('user.layouts.styles')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('Faculty.layouts.navbar')
{{--Showing the confirmed form message--}}









<div class="page-section" >
    <div class="container">
        <h1>This is my Profile Page</h1>
        <div class="row align-items-center">
            <section class="sectionOne" id="sectionOne">
                <div class="container">

                    <dl class="row">
                        <div class="col-12 p-1 my-5 bg-light border border-2 rounded">
                            <h2 class="text-center">User profile</h2>
                        </div>
                        <div class="col-12 my-4">
                            <div class="row">
                                <div class="col-4">
                                    <img src="./assets/img/profile.jpg" alt="" class="img-fluid" style="height: 150px; width: auto;">
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
                        <dt class="col-sm-3">Email  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->email }}</p>
                        </dd>
                        <dt class="col-sm-3">Program  :</dt>
                        <dd class="col-sm-9">
                            <p>BSc. in computrer science and engineering</p>
                        </dd>
                        <dt class="col-sm-3">Faculty  :</dt>
                        <dd class="col-sm-9">
                            <p>Faculty of Science and Information Technology</p>
                        </dd>
                        <dt class="col-sm-3">Phone no.  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->phone }}</p>
                        </dd>

                        <dt class="col-sm-3">Address  :</dt>
                        <dd class="col-sm-9">
                            <p>{{ $user->address }}</p>
                        </dd>

                        <div class="col-12 p-3 text-end text-info">
                            <a href="{{ url('edit_profile', $user->id) }}">
                                <button class="btn btn-success">edit</button>
                            </a>
                        </div>

                </div>
            </section>
        </div>
    </div>
</div> <!-- .bg-light -->
<!-- .bg-light -->







@include('user.layouts.footer')

@include('user.layouts.script')

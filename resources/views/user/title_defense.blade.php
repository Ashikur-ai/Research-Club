@include('user.layouts.styles')
@include('user.layouts.navbar')
@if(session()->has('message'))
    <div class="alert text-center alert-success">
        {{ session()->get('message') }}
    </div>

@endif

<section class="sectionOne" id="sectionOne">
    <div class="container">

        <div class="row">
            <form class="main-form" action="{{ route('title.register') }}" method="POST" >
                @csrf
                <div class="row mt-5 ">
                    <h1>Register for Title Defense</h1>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Team Name</label>
                        <select name="team_id" class="custom-select">
                            <option>-----choose your team-----</option>
                            @foreach($data as $row)

                                <option value="{{ $row->id }}">{{ $row->teamName }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="">
                    </div>



                    <div class="col-12">
                        <div class="row my-2">
                            <label for="projectDes" class="col-md-2 col-form-label">Project Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="project_description" id="projectDes" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row my-2">
                            <label for="objective" class="col-md-2 col-form-label">Objective</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="objective" id="objective" rows="2"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row my-2">
                            <label for="motivation" class="col-md-2 col-form-label">Motivation</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="motivation" id="motivation" rows="2"></textarea>
                            </div>
                        </div>
                    </div>







                </div>

                <button type="submit" class="btn  btn-outline-success">Submit</button>
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
@include('user.layouts.footer')
@include('user.layouts.script')

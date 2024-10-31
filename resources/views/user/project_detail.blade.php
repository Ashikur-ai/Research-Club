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









<div class="page-section" >
    <div class="container">
        <div class="row align-items-center">
            <section class="sectionOne" id="sectionOne">
                <div class="container">

                    <dl class="row">
                        <div class="col-12 p-1 my-5 bg-light border border-2 rounded">
                            <h2 class="text-center">My Project</h2>
                        </div>
                        <dt class="col-sm-3">Project Title</dt>
                        <dd class="col-sm-9">
                            <p>{{ $project->project_title }}</p>
                        </dd>
                        <dt class="col-sm-3">Project Type</dt>
                        <dd class="col-sm-9">
                            <p>{{ $project->project_type }}</p>
                        </dd>
                        <dt class="col-sm-3">Program</dt>
                        <dd class="col-sm-9">
                            <p>{{ $project->program }}</p>
                        </dd>
                        <dt class="col-sm-3">Objective</dt>
                        <dd class="col-sm-9">
                            <p>{{ $project->objective }}</p>
                        </dd>
                        <dt class="col-sm-3">Motivation</dt>
                        <dd class="col-sm-9">
                            <p>{{ $project->motivation }}</p>
                        </dd>
                        <dt class="col-sm-3">Project Description</dt>
                        <dd class="col-sm-9">{{ $project->project_description }}</dd>



                        <div class="col-12 p-3 text-end text-info">
                            <a href="{{ route('project.edit', $project->id) }}">
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

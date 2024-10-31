@include('user.layouts.styles')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.layouts.navbar')
@if(session()->has('message'))
    <div class="alert text-center alert-success">
        {{ session()->get('message') }}
    </div>

@endif

{{--Showing the confirmed form message--}}









<div class="page-section" >
    <div class="container">
        <h1>This is my Create project Page</h1>

        <div class="row align-items-center">
            <section class="sectionOne" id="sectionOne">
                <div class="container">
                    <form method="post" action="{{ route('project.store') }}" class="row g-3 my-5">
                        @csrf
                        <div class="col-md-8">
                            <label for="projectTitle" class="form-label">Project title</label>
                            <input type="text" name="project_title" class="form-control" id="projectTitle">
                        </div>
                        <div class="col-md-4">
                            <label for="projectType" class="form-label">Project type</label>
                            <select id="projectType" name="project_type" class="form-select">
                                <option selected>Choose...</option>
                                <option value="Project">Project</option>
                                <option value="Thesis">Thesis</option>
                                <option value="Enternship">Enternship</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="row my-3">
                                <label for="selectProgram" class="col-md-2 form-label">Program</label>
                                <div class="col-lg-10">
                                    <select id="selectProgram" name="program" class="form-select">
                                        <option selected>Choose...</option>
                                        <option value="BSc. in CSE">BSc. in CSE</option>
                                        <option value="BSc. in ICE">BSc. in ICE</option>
                                        <option value="BSc. in TE">BSc. in TE</option>
                                    </select>
                                </div>
                            </div>
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


                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-outline-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div> <!-- .bg-light -->
<!-- .bg-light -->







@include('user.layouts.footer')

@include('user.layouts.script')

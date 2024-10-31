
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


<h1 class="text-center py-5">Update Project details</h1>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ url('update', $data->id) }}" class="row g-3 my-5">
                @csrf
                <div class="col-md-8">
                    <label for="projectTitle" class="form-label">Project title</label>
                    <input type="text" name="project_title" value="{{ $data->project_title }}" class="form-control" id="projectTitle">
                </div>
                <div class="col-md-4">
                    <label for="projectType" class="form-label">Project type</label>
                    <select id="projectType"  name="project_type" class="form-select">
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
                            <textarea class="form-control"  name="project_description" id="projectDes" rows="4">
                                {{ $data->project_description }}
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row my-2">
                        <label for="objective" class="col-md-2 col-form-label">Objective</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="objective" id="objective" rows="2">
                                {{ $data->objective }}
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row my-2">
                        <label for="motivation" class="col-md-2 col-form-label">Motivation</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="motivation" id="motivation" rows="2">
                                {{ $data->motivation }}
                            </textarea>
                        </div>
                    </div>
                </div>


                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                </div>
            </form>

        </div>
    </div>


    <footer class="page-footer text-white" style="background-color: #0099ff;">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3 ">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Career</a></li>
                        <li><a href="#" class="text-white">Editorial Team</a></li>
                        <li><a href="#" class="text-white">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#" class="text-white">Terms & Condition</a></li>
                        <li><a href="#" class="text-white">Privacy</a></li>
                        <li><a href="#" class="text-white">Advertise</a></li>
                        <li><a href="#" class="text-white">Join as Researcher</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#" class="text-white">DIU CPC</a></li>
                        <li><a href="#" class="text-white">DIU GCPC</a></li>
                        <li><a href="#" class="text-white">Voluntary club</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Daffodil International University</p>
                    <a href="#" class="footer-link text-white">01873534653434</a>
                    <a href="#" class="footer-link text-white">research-net@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>

                </div>


            </div>

            <hr>
            <p class="text-center  text-white">&copy; 2022 Research Club, All right reserved.</p>

        </div>
    </footer>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</html>

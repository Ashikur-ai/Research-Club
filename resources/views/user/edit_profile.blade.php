
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


<h1 class="text-center py-5">Update Profile details</h1>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('update_profile', $user->id) }}" class="row g-3 my-5">
                @csrf
                <dt class="col-sm-3">name</dt>
                <dd class="col-sm-9">
                    <input type="text" name="name" value="{{ $user->name }}"></input>
                </dd>
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">
                    <input type="text" name="email" value="{{ $user->email }}"></input>
                </dd>
                <dt class="col-sm-3">Program</dt>
                <dd class="col-sm-9">
                    <input type="text" value="BSc. in computrer science and engineering"></input>
                </dd>
                <dt class="col-sm-3">Faculty</dt>
                <dd class="col-sm-9">
                    <input type="text" value="Faculty of Science and Information Technology"></input>
                </dd>
                <dt class="col-sm-3">Phone no.</dt>
                <dd class="col-sm-9">
                    <input type="text" name="phone" value="{{ $user->phone }}"></input>
                </dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">
                    <input type="text" name="address" value="{{ $user->address }}"></input>
                </dd>


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

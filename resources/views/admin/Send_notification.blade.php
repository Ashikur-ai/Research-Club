
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>
<body>
{{--Header--}}
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>



    @include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
    {{--        navbar--}}
    @include('admin.navbar')
    <!-- partial -->

        {{--        body --}}
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px;">


                {{--            showing the messages--}}
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert">

                            {{ session()->get('message') }}
                        </button>

                    </div>

                @endif

                <form action="{{ route('upload.notification') }}" method="POST" >
                    <h1>Send notification to Supervisor</h1>
                    @csrf


                    <div style="padding: 15px;">
                        <label for="">For what?</label>
                        <input type="text" style="color: black;" name="name" required="" placeholder="Pre-defense/title defense">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">What need to do?</label>
                        <textarea type="text" required="" style="color: black;" name="description" placeholder="Write the description">
                        </textarea>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Start Date</label>
                        <input type="date" style="color: black;" name="start_date" required="" >
                    </div>
                    <div style="padding: 15px;">
                        <label for="">End Date</label>
                        <input type="date" style="color: black;" name="end_date" required="" >
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-outline-success">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


{{--javascript--}}
@include('admin.script')
</body>
</html>

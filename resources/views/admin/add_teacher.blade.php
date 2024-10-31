
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

            <form action="{{ url('upload_teacher') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px;">
                    <label for="">Teachers Name</label>
                    <input type="text" style="color: black;" name="name" required="" placeholder="Write the name">
                </div>
                <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input type="number" style="color: black;" name="number" required="" placeholder="Write the number">
                </div>
                <div style="padding: 15px;">
                    <label for="">Speciality</label>
                    <select name="speciality" required="" id="" style="color: black; width: 200px;">
                        <option value="">----Select----</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>


                <div style="padding: 15px;">
                    <label for="">Room No</label>
                    <input type="text" required="" style="color: black;" name="room" placeholder="Write the room number">
                </div>

                <div style="padding: 15px;">
                    <label for="">Teacher's Image</label>
                    <input type="file" required="" name="file" placeholder="Drag your picture">
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


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

                <form action="{{ route('upload.student') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding: 15px;">
                        <label for="">Student's Name</label>
                        <input type="text" style="color: black;" name="name" required="" placeholder="Write the name">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Batch</label>
                        <input type="text" style="color: black;" name="batch" required="" placeholder="Write the Batch Number">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Department</label>
                        <input type="text" style="color: black;" name="dept" required="" placeholder="Write the Department">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Email</label>
                        <input type="text" style="color: black;" name="email" required="" placeholder="Write the email">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="text" style="color: black;" name="phone" required="" placeholder="Write the phone">
                    </div>


                    <div style="padding: 15px;">
                        <label for="">Student's Image</label>
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

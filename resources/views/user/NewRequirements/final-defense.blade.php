@extends('user.NewRequirements.defense_master')
@section('name')
    Final Defense
@endsection
@section('subName')
    Final defense
@endsection
@section('main_content')
    <!--main body start-->
    <div class="container">
        <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">
            <div class="position-absolute" style="top:-25px;left:45%;background-color: white;padding: 10px;">
                <h4>Title Defense</h4>
            </div>

        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6  mt-5">Submit Documents:
                <div class="p-5 mt-3 mb-2 border rounded">
                    <form class="main-form" action="{{ route('file.FinalDefenseDoc') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5 ">
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <input type="file" class="form-control-file" id="file" name="file" placeholder="Upload file">
                                <br>
                                <input type="text" class="form-control"  name="team_id" placeholder="Enter your team ID">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                            </div>

                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                            </div>

                        </div>

                        <button type="submit" class="btn  btn-outline-success">Upload File</button>
                    </form>

                </div>
            </div>
            <div class="col-md-6  my-5">Your submission:
                <div class="p-5 mt-3 mb-2 border rounded">
                    @foreach($data as $row)
                        <div class="d-flex border rounded my-2 p-3">
                            <h5 class="me-5">{{ $row->document }}</h5>
                            <a class="btn btn-danger" href=""><i class="fa-sharp fa-solid fa-trash me-3"></i>Delete </a>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="col-md-6 mt-5">Follow-up details:
                <div class="p-5 mt-3 mb-2 border rounded">
                    <div class="d-flex">
                        <h5 class="me-5">Follow up name:</h5>
                        <p class="me-5"> Final defense</p>
                    </div>
                    <div class="d-flex">
                        <h5 class="me-5">Date :</h5>
                        <p>{{ $time->date }} </p>
                    </div>
                    <div class="d-flex">
                        <h5 class="me-5">Time :</h5>
                        <p>{{ $time->time }} </p>
                    </div>
                    <div class="d-flex">
                        <h5 class="me-5">Room no :</h5>
                        <p>{{ $time->room }} </p>
                    </div>
                    <div class="d-flex">
                        <h5 class="me-5">Supervisor's comment:</h5>
                        <p>{{ $comment->comment }} </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--main body end-->
@endsection

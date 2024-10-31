@extends('Faculty.master')
@section('main_content')
    <!--main body start-->
    <div class="container">
        <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">
            <div class="position-absolute" style="top:-25px;left:45%;background-color: white;padding: 10px;">
                <h4>Schedule</h4>
            </div>


            <!--main body start-->
            <div class="container">
                <div class="position-relative" style="border-top: 2px solid rgb(8, 8, 8);margin-top: 50px;padding: 5px;">


                    <form action="{{ route('set.shedule') }}" method="post">
                        @csrf
                        <select class="form-select form-select-sm mt-5" name="team" aria-label=".form-select-sm example">
                            <option selected>Select team</option>
                            @foreach($data as $row)
                            <option value="{{ $row->id }}">{{ $row->teamName }}</option>
                            @endforeach

                        </select>
                        <select class="form-select form-select-sm mt-5" name="phase" aria-label=".form-select-sm example">
                            <option selected>Select Phase</option>
                            <option value="1">Title Defense</option>
                            <option value="2">Pre-Defense</option>
                            <option value="3">Final Defense</option>
                        </select>
                        <div class="form-group m-3">
                            <label for="date">Pick a date for follow up</label>
                            <input type="date" name="date" class="form-control" id="date">
                        </div>
                        <div class="form-group m-3">
                            <label class="form-check-label" for="time">Fix a time</label>
                            <input type="text" name="time" class="form-control" id="time">
                        </div>
                        <div class="form-group m-3">
                            <label class="form-check-label" for="time">Assign a room</label>
                            <input type="text" name="room" class="form-control" id="time">
                        </div>
                        <button type="submit" class="text-black btn btn-primary m-3">Submit</button>

                    </form>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-md-6  mt-5">Students submission:
                        <div class="p-5 mt-5 mb-2 border rounded">
                            <div class="d-flex border rounded my-2 p-3">
                                <h5 class="me-5">Student's document 1</h5>
                                <a class="btn btn-success" href=""><i class="fa-solid fa-download p-2"></i>Download Now </a>
                            </div>
                            <div class="d-flex border rounded my-2 p-3">
                                <h5 class="me-5">Student's document 2</h5>
                                <a class="btn btn-success" href=""><i class="fa-solid fa-download p-2"></i>Download Now </a>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comments:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <input type="number" class="form-control my-2" placeholder="Update marks" aria-label="stage1"
                                       aria-describedby="stage1">
                                <button class="btn btn-primary mt-3 text-black" type="button" id="stage1">Update</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 mt-5">Follow-up details:
                        <div class="p-5 mt-5 mb-2 border rounded">
                            <div class="d-flex">
                                <h5 class="me-5">Follow up name:</h5>
                                <p class="me-5"> Title defense</p>
                            </div>
                            <div class="d-flex">
                                <h5 class="me-5">Date :</h5>
                                <p>31 December,2022 </p>
                            </div>
                            <div class="d-flex">
                                <h5 class="me-5">Time :</h5>
                                <p>10am - 2pm </p>
                            </div>
                            <div class="d-flex">
                                <h5 class="me-5">Room no :</h5>
                                <p>AB-04 #306 </p>
                            </div>
                            <div class="d-flex">
                                <h5 class="me-5">Your comment :</h5>
                                <p>This is the comments about the follow up</p>
                            </div>
                            <div class="col-md-12">
                                <h3 class="d-inline-block text-secondary">Title defense marks:</h3>
                                <h3 class="d-inline-block">25</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main body end-->
@endsection

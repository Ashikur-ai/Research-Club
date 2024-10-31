


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

<section class="sectionOne mt-5" id="sectionOne">
    <div class="container">

        <div class="row">
            <h6 class="ms-3 text-decoration-underline">Students</h6>
            <form class="main-form" action="{{ route('addToTeam') }}" method="POST">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="teamName" class="form-control" placeholder="Enter team name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="firstMember" class="form-control" placeholder="{{ $user->name }}" value="{{ $user->name }}">
                    </div>

                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="secondMember" class="custom-select">
                            <option>-----choose your teammate-----</option>
                            @foreach($data as $row)

                                <option value="{{ $row->name }}">{{ $row->name }} (id = {{ $row->id }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="teacher" class="custom-select">
                            <option>-----choose your Supervisor-----</option>
                            @foreach($teacher as $row)

                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn  btn-outline-success">Create team</button>
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


@include('user.layouts.styles')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.layouts.navbar')
{{--Showing the confirmed form message--}}
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-bs-dismiss="alert">

            {{ session()->get('message') }}
        </button>

    </div>

@endif








{{--<div class="page-section" >--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <h1 class="text-center br-theme-fontawesome-stars" >This is Thesis project</h1>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    @foreach($data as $row)--}}
{{--                        <div class="col-lg-4 col-md-6 p-3">--}}
{{--                            <div class="card">--}}
{{--                                <img style="height=200px;" src="thesisImage/{{ $row->image }}" class="card-img-top" alt="..." style="height: 400px;">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">{{ $row->name }}</h5>--}}
{{--                                    <p class="card-text">{{ $row->description }}</p>--}}
{{--                                    <a href="{{ route('thesis.detail', $row->id) }}" class="btn btn-primary">Learn more</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div> <!-- .bg-light -->--}}
<!-- .bg-light -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Websites</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($data as $rows)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img height="300 px"  src="thesisImage/{{ $rows->image }}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{ $rows->name }}</p>
                            <span class="text-sm text-grey">{{ $rows->description }}</span>
                        </div>
                        <div class="py-5 text-center">
                            <a href="{{ route('thesis.detail', $rows->id) }}" class="btn btn-primary">Learn more</a>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>






@include('user.layouts.footer')

@include('user.layouts.script')

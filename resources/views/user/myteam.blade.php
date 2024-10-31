


@include('user.layouts.styles')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.layouts.navbar')
{{--Showing the confirmed form message--}}

<section class="sectionOne mt-5" id="sectionOne">
    <div class="container">
        <div class="row">
            <h6 class="ms-3">Team Members</h6>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Team Name</th>
                    <th scope="col">Supervisor</th>
                    <th scope="col">First Member</th>
                    <th scope="col">Second Member</th>
                </tr>
                </thead>
                <tbody>
                @foreach($team as $row)
                <tr>
                    <td>{{ $row->teamName }}</td>
                    <td>{{ $row->teacher }}</td>
                    <td>{{ $row->firstMember}}</td>
                    <td>{{ $row->secondMember }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

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


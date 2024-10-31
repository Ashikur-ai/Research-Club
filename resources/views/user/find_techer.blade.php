


@include('user.layouts.styles')

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('user.layouts.navbar')
{{--Showing the confirmed form message--}}





<div align="center" style="padding-top: 100px; padding-bottom: 300px;">
    <table>
        <tr style="background-color: black;" class="text-white">
            <th style="padding: 10px">Teacher name</th>
            <th style="padding: 10px">Phone</th>
            <th style="padding: 10px">Speciality</th>
            <th style="padding: 10px">Room No</th>
            <th style="padding: 10px">Image</th>


        </tr>

        @foreach($data as $row)
            <tr align="center" style="background-color: skyblue">
                <td>{{ $row->name }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->speciality }}</td>
                <td>{{ $row->room }}</td>
                <td>
                    <a href="{{ route('teacher.detail', $row->id) }}">
                    <img height="100px" width="100px" src="teacherImage/{{$row->image}}" alt="">
                    </a>
                </td>



            </tr>
        @endforeach
    </table>
</div>
</div>









@include('user.layouts.footer')

@include('user.layouts.script')


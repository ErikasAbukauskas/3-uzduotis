<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Difficulty</th>
        <th>School ID</th>
    </tr>

    @foreach ($attendancegroups as $attendancegroup )

        <tr>
            <td>{{ $attendancegroup->id }}</td>
            <td><a href="{{route('attendancegroup.show', [$attendancegroup])}}">{{ $attendancegroup->name }}</a></td>
            <td>{{ $attendancegroup->description }}</td>
            <td>{{ $attendancegroup->difficulty }}</td>
            <td>{{ $attendancegroup->school_id }}</td>
            <td><a href="{{route('attendancegroup.edit', [$attendancegroup])}}">Edit</a>

                <form method="POST" action="{{route('attendancegroup.destroy', [$attendancegroup]) }}">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>

    @endforeach


</table>

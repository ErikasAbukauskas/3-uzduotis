<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Place</th>
        <th>Phone</th>
    </tr>

    @foreach ($schools as $school )

        <tr>
            <td>{{ $school->id }}</td>
            <td><a href="{{route('school.show', [$school])}}">{{ $school->name }}</a></td>
            <td>{{ $school->description }}</td>
            <td>{{ $school->place }}</td>
            <td>{{ $school->phone }}</td>
            <td><a href="{{route('school.edit', [$school])}}">Edit</a>

                <form method="POST" action="{{route('school.destroy', [$school]) }}">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>

    @endforeach


</table>

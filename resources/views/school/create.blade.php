<form method="POST" action="{{route('school.store')}}">

    Name: <input type="text" name="school_name">
    Description: <input type="text" name="school_description">
    Place: <input type="text" name="school_place">
    Phone: <input type="number" name="school_phone">

    @csrf

    <button type="submit"> Create </button>

</form>

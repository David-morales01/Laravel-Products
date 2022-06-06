@extends('layout.main')
@section('main')  
<table class="table">
    <thead>
        <tr>
            <th>Name </th>
            <th>CityI</th>
            <th>State</th>
            <th>Addres</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Options</th>

        </tr>
    </thead>
    <tbody>
        @each('branches.partial.branch_row', $branch,'branch' )

    </tbody>
</table>
@endsection()
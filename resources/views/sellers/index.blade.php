@extends('layout.main')
@section('main')  
<table class="table">
    <thead>
        <tr>
            <th>Name </th>
            <th>DNI</th>
            <th>Phone</th>
            <th>Carnet</th>
            <th>Options</th>

        </tr>
    </thead>
    <tbody>
        @each('sellers.partial.seller_row', $sellers,'seller' )

    </tbody>
</table>
@endsection()

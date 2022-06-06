@extends('layout.main')
@section('main')  
<table class="table">
    <thead>
        <tr>
            <th>Name </th>
            <th>Slug</th>
            <th>status</th> 
            <th>Options</th>

        </tr>
    </thead>
    <tbody>
        @each('categories.partial.category_row', $categories,'category' )

    </tbody>
</table>
@endsection()

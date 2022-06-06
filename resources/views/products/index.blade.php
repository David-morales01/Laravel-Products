@extends('layout.main')
@section('main')  
<table class="table">
    <thead>
        <tr>
            <th>Name </th>
            <th>Category </th>
            <th>Price</th>
            <th>Status</th> 
            <th>Options</th> 

        </tr>
    </thead>
    <tbody> 

        @each('products.partial.product_row', $product,'product' )
    </tbody>
</table>
@endsection()
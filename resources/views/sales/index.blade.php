@extends('layout.main')
@section('main')  
<table class="table">
    <thead>
        <tr>
            <th>Seller </th>
            <th>Product</th>
            <th>Branch</th>
            <th>Price</th>
            <th>Quantity</th> 
            <th>Options</th> 

        </tr>
    </thead>
    <tbody>
        @each('sales.partial.sales_row', $sales,'sales' )

    </tbody>
</table>
@endsection()
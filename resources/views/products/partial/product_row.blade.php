<tr>
    <td>
        {{$product->name}}
    </td> 
    <td>
        {{$product->price}}
    </td> 
    <td>
        {{$product->status}}
    </td>  
    <td>
        {{$product->category_id}}
    </td> 
    <td>
        <a href="{{route('products.edit',['product'=>$product->id])}}">Edit</a>
        <a href="{{route('products.show',['product'=>$product->id])}}">Show</a>
    </td>
</tr>
 
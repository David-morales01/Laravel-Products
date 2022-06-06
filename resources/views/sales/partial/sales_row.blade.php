<tr>
     
    <td>
        {{$sales->seller->first_name}}
        {{$sales->seller->last_name}}
    </td>
    <td>
        {{$sales->product->name}}
    </td>
    <td>
        {{$sales->branch->name}}
    </td>
    <td>
        {{$sales->price}}
    </td>
    <td>
        {{$sales->quantity}}
    </td>
     
    <td>
        <a href="{{route('sales.edit',['sale'=>$sales->id])}}">Edit</a> 
    </td>
</tr>
 
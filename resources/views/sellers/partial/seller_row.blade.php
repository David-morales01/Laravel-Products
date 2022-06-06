<tr>
    <td>
        {{$seller->name}}
    </td>

    <td>
        {{$seller->dni}}
    </td>

    <td>
       +505  {{$seller->phone}}
    </td>
    <td>
        {{$seller->carnet}}
    </td>
    <td>
        <a href="{{route('sellers.edit',['seller'=>$seller->id])}}">Edit</a>
        <a href="{{route('sellers.show',['seller'=>$seller->id])}}">Show</a>
    </td>
</tr>

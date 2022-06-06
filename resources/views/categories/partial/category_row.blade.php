<tr>
    <td>
        {{$category->name}}
    </td>

    <td>
        {{$category->slug}}
    </td>

    <td>
        {{$category->status}}
    </td> 
    <td>
        <a href="{{route('categories.edit',['category'=>$category->id])}}">Edit</a>
        <a href="{{route('categories.show',['category'=>$category->id])}}">Show</a>
    </td>
</tr>

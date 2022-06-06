




@php
    $action = isset($category)
    ? route('categories.update', ['category' => $category->id])
    : route('categories.store');
@endphp

<form action="{{$action}}" class=" card form" method="post" >
    @if(isset($category))
    @method('PATCH')
    @endif
    @csrf
    <label>
         Name :
    <input type="text" name="name" value="{{old('name', $category->name ?? '')}}">
    </label>
    @error('name')
        <span class="error" >{{$errors->first('name')}}</span>
    @enderror
    <br>

    <label>
    Slug :
    <input type="text" name="slug"  value="{{old('slug', $category->slug ?? '')}}">
    </label>
    @error('slug')
        <span class="error" >{{$errors->first('slug')}}</span>
    @enderror
    <br>

    

    <label>
        status
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </label>
    @error('status')
    <span class="error" >{{$errors->first('status')}}</span>
@enderror
<br> 

    <button type="submit" class="button">Save</button>
</form>

@php
    $action = isset($product)
    ? route('products.update', ['product' => $product->id])
    : route('products.store');
@endphp

<form action="{{$action}}" method="POST" class=" card form">
    @if(isset($product))
    @method('PATCH')
 
   
    @endif
    @csrf

    <label>
         Name :
    <input type="text" name="name" value="{{old('name', $product->name ?? '')}}">
    </label>
    @error('name')
        <span class="error" >{{$errors->first('name')}}</span>
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

   <label>
        Price :
   <input type="text" name="price" value="{{old('price', $product->price ?? '')}}">
   </label>
   @error('price')
       <span class="error" >{{$errors->first('price')}}</span>
   @enderror
   <br> 

   <label>
       Category:
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    </label>
    @error('category_id')
        <div class="error">{{ $errors->first('category_id') }}</div>
    @enderror
    <br>
    <button type="submit" class="button">Save</button>
</form>

@php
    $action = isset($sale)
    ? route('sales.update', ['sale' => $sale->id])
    : route('sales.store');
@endphp

<form action="{{$action}}" method="POST" class=" card form">
    @if(isset($sale))
    @method('PATCH')
    @endif
    @csrf
            
    <label>
        Seller:
        <select name="seller_id">
            @foreach($sellers as $seller)
                <option value="{{ $seller->id }}">{{ $seller->name }}</option>
            @endforeach
        </select>
    </label>
    @error('seller_id')
        <div class="error">{{ $errors->first('seller_id') }}</div>
    @enderror
    <br>
            
    <label>
        Product:
        <select name="product_id">
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </label>
    @error('product_id')
        <div class="error">{{ $errors->first('product_id') }}</div>
    @enderror
    <br>


    <label>
        Quantity :
   <input type="number" name="quantity" value="{{old('quantity', $sale->quantity ?? '')}}">
   </label>
   @error('quantity')
       <span class="error" >{{$errors->first('quantity')}}</span>
   @enderror
    
   <br>
   <label>
        Price :
   <input type="number" name="price" value="{{old('price', $sale->price ?? '')}}">
   </label>
   @error('price')
       <span class="error" >{{$errors->first('price')}}</span>
   @enderror
    
   <br>
   
    
            
   <label>
    Branch:
    <select name="branch_id">
        @foreach($branches as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
        @endforeach
    </select>
    </label>
    @error('branch_id')
        <div class="error">{{ $errors->first('branch_id') }}</div>
    @enderror
    <br>
    <button type="submit" class="button">Save</button>
</form>

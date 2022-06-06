@php
    $action = isset($branch)
    ? route('branches.update', ['branch' => $branch->id])
    : route('branches.store');
@endphp

<form action="{{$action}}" method="POST" class=" card form">
    @if(isset($branch))
    @method('PATCH')
 
   
    @endif
    @csrf
    <label>
         Name :
    <input type="text" name="name" value="{{old('name', $branch->name ?? '')}}">
    </label>
    @error('name')
        <span class="error" >{{$errors->first('name')}}</span>
    @enderror
    <br>

    <label>
        City:
    <input type="text" name="city"  value="{{old('city', $branch->city ?? '')}}">
    </label>
    @error('city')
        <span class="error" >{{$errors->first('city')}}</span>
    @enderror
    <br>

    <label>
        Address :
    <input type="text" name="address"  value="{{old('address', $branch->address ?? '')}}">
    </label>

    @error('address')
        <span class="error" >{{$errors->first('address')}}</span>
    @enderror
    <br>


    <label>
        Phone :
    <input type="text" name="phone"   value="{{old('phone', $branch->phone ?? '')}}">
    </label>
    @error('phone')
        <span class="error" >{{$errors->first('phone')}}</span>
    @enderror
    <br>
   

    <label>
        State    
        <input type="text" name="state"   value="{{old('state', $branch->state ?? '')}}">
    </label>

    @error('state')
        <span class="error" >{{$errors->first('state')}}</span>
    @enderror
    <br>


    <label>
        Status
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

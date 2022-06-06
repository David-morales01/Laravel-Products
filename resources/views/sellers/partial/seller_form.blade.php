




@php
    $action = isset($seller)
    ? route('sellers.update', ['seller' => $seller->id])
    : route('sellers.store');
@endphp

<form action="{{$action}}" class=" card form" method="post" >
    @if(isset($seller))
    @method('PATCH')
    @endif
    @csrf
    <label>
        First Name :
    <input type="text" name="first_name" value="{{old('first_name', $seller->first_name ?? '')}}">
    </label>
    @error('first_name')
        <span class="error" >{{$errors->first('first_name')}}</span>
    @enderror
    <br>

    <label>
        Last Name :
    <input type="text" name="last_name"  value="{{old('last_name', $seller->last_name ?? '')}}">
    </label>
    @error('last_name')
        <span class="error" >{{$errors->first('last_name')}}</span>
    @enderror
    <br>

    <label>
        Dni :
    <input type="text" name="dni"  value="{{old('dni', $seller->dni ?? '')}}">
    </label>

    @error('dni')
        <span class="error" >{{$errors->first('dni')}}</span>
    @enderror
    <br>


    <label>
        Phone :
    <input type="text" name="phone"   value="{{old('phone', $seller->phone ?? '')}}">
    </label>
    @error('phone')
        <span class="error" >{{$errors->first('phone')}}</span>
    @enderror
    <br>


    <label>
        Hired :
    <input type="date" name="hired_at"  value="{{old('hired_at', isset($seller) ? $seller->hired_at->format('Y-m-d') : '')}}">
    </label>

    @error('hired_at')
        <span class="error" >{{$errors->first('hired_at')}}</span>
    @enderror
    <br>


    <label>
        Carnet :
    <input type="text" name="carnet"   value="{{old('carnet', $seller->carnet ?? '')}}">
    </label>
    @error('carnet')
        <span class="error" >{{$errors->first('carnet')}}</span>
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
<label>Branch:
      <select name="branch_id">
          @foreach($branches as $branch)
              <option value="{{ $branch->id }}">{{ $branch->city }}</option>
          @endforeach
      </select>
  </label>
  @error('branch_id')
      <div class="error">{{ $errors->first('branch_id') }}</div>
  @enderror
  <br>
    <button type="submit" class="button">Save</button>
</form>

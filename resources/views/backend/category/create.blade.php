@extends('backend.layout.master')
@section('Title')
@section('content')

<div class="row">
  {{-- option-01 --}}
  {{-- @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif --}}

  <div class="col-md-6">
    <h1>Create Category!</h1>
    <form action="{{ route('categories.store') }}" method="post">
      @csrf
       <div class="form-group">
         <label for="name">Category Name</label>
         <input type="text" class="form-control"  id="name" name="name" placeholder="Category Name">
       </div>
       {{-- option-02 --}}
       @error('name')
       <div class="alert alert-danger">{{ $message }}</div>
   @enderror
      
      <div class="form-group">
        <label for="description">Category Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder=" Category Description">
      </div>
      {{-- option-02 --}}
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror

      <div class="form-group">
        <input type="submit" class="btn btn-success" value="Submit">
      </div>
    </form>
 </div>  
</div>

  
@endsection
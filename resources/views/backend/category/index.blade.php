@extends('backend.layout.master')
@section('Title')
@section('content')

<div class="row">
 
  <div class="col-md-6">
    <a class="btn btn-primary" href="{{ route('categories.create') }}">Create Categories</a>

    {{-- option -01 --}}
    {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}

     {{-- option -02 --}}
    {{-- @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif --}}
     {{-- option -02 --}}
    @if (session()->has('success'))
    <div class="alert alert-success" id="alert">
        {{ session()->get('success') }}
    </div>
@endif


    <h1>All Category!</h1>
    <table class=" table table-striped table-hover table-success table-bordered ">
        <thead>
            <tr>
                <th>category name</th>
                <th>category description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a  class="btn btn-info btn-sm" href="{{ route('categories.show',$category->id) }}">Show Details</a> 
                    <a class="btn btn-info btn-sm" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                    <form class="d-inline-block" action="{{ route('categories.destroy',$category->id) }}" method="post">
                         @csrf
                         @method('delete')
                         <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete data?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
 </div>  
</div>
@endsection
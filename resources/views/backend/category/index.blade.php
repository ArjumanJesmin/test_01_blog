@extends('backend.layout.master')
@section('Title')
@section('content')

<div class="row">
 
  <div class="col-md-6">
    <a class="btn btn-info" href="{{ route('categories.create') }}">Create Categories</a>
    <h1>Create Category!</h1>
    <table class=" table table-striped table-hover table-success table-bordered ">
        <thead>
            <tr>
                <th>category name</th>
                <th>category description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                  <a class="btn btn-info btn-cm" href="{{ route('categories.show',$category->id) }}">Show Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
      @csrf
    </form>
 </div>  
</div>
@endsection
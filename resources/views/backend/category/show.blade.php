@extends('backend.layout.master')
@section('Title','show details')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('categories.index') }}">All Categories</a>
                </div>
                <div class="card-body">
                    <p>{{ $category->name }}</p>
                    <p>{{ $category->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
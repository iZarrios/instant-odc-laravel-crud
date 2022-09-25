@extends('web.master')

@section('title', ' - Categories')

@section('content')
    <h1 class="my-5 text-center">All Categories</h1>

    <a href="{{route('categories.create')}}" class="btn btn-primary my-5">
        Add New Category
    </a>

    @include('web.inc.messages')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">Edit</a>
                    <form class="d-inline-block" action="{{route('categories.destroy', $category->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
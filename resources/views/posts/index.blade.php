@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Blog List
                    <a href="/posts/create" class="btn btn-primary btn-sm" style="float:right">
                        Add Blog 
                    </a> 
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-6">Title</th>
                                <th class="col-md-1">Author</th>
                                <th class="col-md-1">Category</th>
                                <th colspan="2" class="col-md-1">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>
                                    <a href="/posts/{{$post->id}}" >
                                        <h3> {{ $post->title }} </h3>
                                    </a>
                                    <p> {{ $post->excerpt }} </p>
                                    
                                </td>
                                <td>
                                    <a href="">
                                        {{ $post->user->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="/">
                                        {{ $post->category }}
                                    </a> 
                                </td> 
                                    
                                    <td>
                                    @can('update', $post)
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">
                                            Edit 
                                        </a>
                                    @else
                                    @endcan
                                    </td>

                                    <td>
                                        
                                    @can('update', $post)
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                            <button type="submit" class="btn btn-danger">Delete </button>
                                        </form>
                                    @else
                                    @endcan

                                      
                                    </td>
                                </tr>
                           
                            @endforeach
                        </tbody>
                    </table>      
                    
                    Total posts: {{ $count }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

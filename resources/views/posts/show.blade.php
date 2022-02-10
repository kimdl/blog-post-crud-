@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="container">
                            <h1><br>
                                {{ $post->title }}
                            </h1>
                            <p>
                                
                                By: {{ $post->user->name }} <br>
                                Category: {{ $post->category }} <br>
                                Published on: {{ $post->user->created_at }}
                            </p>
                            
                            <p>
                                {{ $post->body }}
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Blog
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}" >
                        </div>

                        <div class="form-group">
                            <label>Excerpt</label>
                            <input type="textarea" placeholder="descriptiom" class="form-control" name="excerpt"  value="{{ $post->excerpt }}" >
                        </div>

                        <div class="form-group">
                            <label>Category</label> <br>
                            <select name="category" class="form-control">
                                    <option @if($post->category == 'Personal') selected @endif value="Personal">Personal</option>
                                    <option @if($post->category == 'Business') selected @endif value="Business">Business</option>
                                    <option @if($post->category == 'Niche') selected @endif value="Niche">Niche</option>
                                    <option @if($post->category == 'Affiliate') selected @endif value="Affiliate">Affiliate</option>
                                    <option @if($post->category == 'Others') selected @endif value="Others">Others</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{ $post->body }}</textarea>
                        </div>

                        <div class="form-group">
                            <br><button type="submit" class="btn btn-primary">Submit</button> 
                          <a href="/home" class="btn btn-warning  btn-xs ">Cancel </a>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
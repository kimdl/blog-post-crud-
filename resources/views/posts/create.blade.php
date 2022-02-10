@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create Blog
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" name="title" >
                        </div>

                        <div class="form-group">
                            <label>Excerpt</label>
                            <input type="textarea" placeholder="descriptiom" class="form-control" name="excerpt" >
                        </div>

                        <div class="form-group">
                            <label>Category</label> <br>
                            <select name="category" class="form-control">
                                    <option value="Personal">Personal</option>
                                    <option value="Business">Business</option>
                                    <option value="Niche">Niche</option>
                                    <option value="Affiliate">Affiliate</option>
                                    <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>

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
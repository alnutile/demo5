@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Blogs / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$blog->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$blog->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <textarea type="text" name="body" class="form-control" value="{{$blog->body}}">{{$blog->body}}</textarea>

                </div>



            <a class="btn btn-default" href="{{ route('blogs.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection

@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Blogs / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$blog->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$blog->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$blog->body}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('blogs.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
            <form action="#/$blog->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>

    <div>
        <hr>

        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('comments.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="body">BODY</label>
                        <textarea type="text" name="body" class="form-control" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="blog_id" class="form-control" value="{{$blog->id}}"/>
                    </div>
                    <a class="btn btn-default" href="{{ route('comments.index') }}">Back</a>
                    <button class="btn btn-primary" type="submit" >Create</button>
                </form>
            </div>
        </div>

        <h4>Comments</h4>
        <table class="table-striped">
            @foreach($comments as $comment)
                <tr>
                    <td class="col-lg-8">{{$comment->body}}</td>
                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('comments.show', $comment->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


@endsection
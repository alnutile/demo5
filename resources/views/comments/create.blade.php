@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Comments / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('comments.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="body">BODY</label>
                     <input type="text" name="body" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="blog_id">BLOG_ID</label>
                     <input type="text" name="blog_id" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('comments.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
            </form>
        </div>
    </div>


@endsection

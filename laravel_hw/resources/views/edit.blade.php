@extends('layout.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">edit post</h3>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}">
            {{method_field('PUT')}}
            @csrf

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail">post title</label>
                    <input type="name" class="form-control" placeholder="Name" name="title" value="{{old('title', $post->title)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">post text</label>
                    <input type="name" class="form-control" placeholder="Name" name="post_text" value="{{old('post_text', $post->post_text)}}">
                </div>
            </div>
            <input type="hidden" name="_token" id='csrf_token' value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">save</button>
            </div>

        </form>
    </div>


@endsection

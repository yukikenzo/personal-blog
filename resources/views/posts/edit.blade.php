@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')
    @if (count($errors) > 0)
        @dd($errors->all())
    @endif

    <form class="grid h-screen place-content-center" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('posts.components.form')
    </form>

@endsection

@section('footer')

    @include('posts.components.footer')

@endsection

</body>

</html>

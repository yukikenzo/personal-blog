@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')

<form class="grid h-screen place-content-center" action="{{ route('post.update', $post->id) }}" method="post">
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

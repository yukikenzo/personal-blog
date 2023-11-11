@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')

<form class="grid h-screen place-content-center" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('posts.components.form')
  </form>

@endsection

@section('footer')

@include('posts.components.footer')

@endsection

</body>

</html>

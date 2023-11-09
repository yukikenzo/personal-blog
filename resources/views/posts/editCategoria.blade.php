@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')

<form class="grid h-screen place-content-center" action="{{ route('categoria.update', $categoria->id) }}" method="post">
    @csrf
    @method('PUT')
   @include('posts.components.categoriaForm')
  </form>

@endsection

@section('footer')

@include('posts.components.footer')

@endsection

</body>

</html>

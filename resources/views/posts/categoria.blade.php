@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')

<form class="grid h-screen place-content-center" action="{{ route('categoria.store') }}" method="post">
    @csrf
   @include('posts.components.categoriaForm')
  </form>
  <div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>

                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>

                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Delete</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $categoria->nome }}
                </th>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('categoria.edit', $categoria->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{ route('categoria.destroy', $categoria->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

  </div>

@endsection

@section('footer')

@include('posts.components.footer')

@endsection

</body>

</html>

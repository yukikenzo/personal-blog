@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')




    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <h1 class="font-bold break-normal text-3xl md:text-5xl">Categorias</h1>
        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                style="font-family:Georgia,serif;">

                <form class="grid place-content-center" action="{{ route('categoria.store') }}" method="post">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                        <input type="text" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Pega moça" name="nome" value="{{ old('nome') }}" required>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar</button>
                </form>
            </div>
    </div>


    <!--Container-->
    <div class="container max-w-5xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">
            @isset($categorias)
                @foreach($categorias as $categoria)
                <p>{{ $categoria->nome }}</p>
                @endforeach
            @endisset
        </div>
    </div>

    </div>
@endsection

@section('footer')
    @include('posts.components.footer')
@endsection

</body>

</html>

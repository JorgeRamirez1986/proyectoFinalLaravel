@extends('layouts.base')

@section('title') Products list @endsection

@section('content')

    @auth
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Product edit')}}
            </h2>
        </x-slot>
    @endauth


    <article class="container">
        <section class="row">
            <div class="text-center">
                <h1 class="text-3xl text-gray-700-600 mb-2 uppercase">Products</h1>
            </div>
        </section>
        <br>
        <br>
        <section class="row">
            <div class="col-4 d-grid">
                @auth
                    <a href="/products/create" class="btn btn-success text-center">Create new product</a>
                @endauth
                <br>
                    @auth
                        <a href="/categories/create" class="btn btn-success text-center">Create new Category</a>
                    @endauth
                @guest
                    <div style="display:flex; justify-content:flex-end; width:300%; padding:0;">
                        <a href="/login" class="btn btn-success text-center ">Login</a>
                    </div>
                @endguest


            </div>
        </section>
    </article>
    <br>
    <br>

    <article class="container">

        <div class="row">

            @foreach($categories as $category)
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <div class="card bg-dark text-white">
                                <img src="https://picsum.photos/200/300/?blur" class="card-img" alt="..." width="500"
                                     height="250">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{$category->name}}</h5>
                                    <p class="card-text">{{$category->description}}</p>
                                    <p class="card-text">{{$category->priority}}</p>
                                </div>
                            </div>
                        </div>
                        @auth
                            <div class="col">

                                <div class="btn-group col" role="group" aria-label="Basic checkbox toggle button group">
                                    <a href="/categories/{{$category->slug}}/edit" class="btn btn-outline-dark"
                                       style="height:40px;width: 150px">Edit</a>

                                </div>
                                <div class="col">
                                    <a href="/categories/{{$category->slug}}" class="btn btn-outline-dark"
                                       style="height:40px;width: 150px">Show</a>
                                </div>

                                <div class="col-2">
                                    <form action="/categories/{{$category->slug}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            type="submit"
                                            value="Delete"
                                            class="btn btn-outline-danger"
                                            onclick="return confirm('Are you sure ?')"
                                            style="height:40px;width: 150px"
                                        >

                                    </form>
                                </div>

                            </div>
                        @endauth
                    </div>
                </div>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        @foreach($products as $product)

                            @if($category->id==$product->category_id)
                                <div class="col-6">
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="https://picsum.photos/200/300/?blur"
                                                     class="img-fluid rounded-start"
                                                     alt="..."
                                                     width="200"
                                                     height="100">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$product->name}}</h5>
                                                    <p class="card-text">Brand: {{$product->brand}}</p>
                                                    <p class="card-text">Sizes: {{$product->available_size}}</p>
                                                    <p class="card-text"><small
                                                            class="text-muted">Price: {{$product->price}}</small>
                                                    </p>
                                                    <p class="card-text"><small
                                                            class="text-muted">Category: {{$category->name}}</small>
                                                    </p>
                                                    @auth
                                                        <div class="container">
                                                            <div class="row">

                                                                <div class="btn-group col-2" role="group"
                                                                     aria-label="Basic checkbox toggle button group">
                                                                    <a href="/products/{{$product->slug}}/edit"
                                                                       class="btn btn-outline-dark"
                                                                       style="height:40px;width: 150px">Edit</a>

                                                                </div>
                                                                <div class="col-3 btn-group" role="group"
                                                                     aria-label="Basic checkbox toggle button group">
                                                                    <a href="/products/{{$product->slug}}"
                                                                       class="btn btn-outline-dark"
                                                                       style="height:40px;width: 150px">Show</a>
                                                                </div>

                                                                <div class="col-1">
                                                                    <form action="/products/{{$product->slug}}"
                                                                          method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <input
                                                                            type="submit"
                                                                            value="Delete"
                                                                            class="btn-outline-danger btn-group"
                                                                            role="group"
                                                                            aria-label="Basic checkbox toggle button group"
                                                                            onclick="return confirm('Are you sure ?')"
                                                                            style="height:40px;width: 150px"
                                                                        >

                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>

                            @endif

                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </article>

@endsection

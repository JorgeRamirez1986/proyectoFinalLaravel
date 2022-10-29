@extends('layouts.base')

@section('title') Categories list @endsection

@section('content')

    @auth
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Categories list')}}
            </h2>
        </x-slot>
    @endauth
    <article class="container">
        <section class="row">
            <div class="text-center">
                <h1 class="text-3xl text-gray-700-600 mb-2 uppercase">Boutique</h1>
            </div>
        </section>
        <br>
        <br>
        <section class="row">
            <div class="col-4 d-grid">
                <a href="/categories/create" class="btn btn-success text-center">Create new category</a>
                <br>
                <a href="/products/create" class="btn btn-success text-right"  >Create new Product</a>

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
                    </div>
                </div>
                <br>
                <br>

            @endforeach


        </div>


    </article>


@endsection

@extends('layouts.base')

@section('title', 'Show | ' . $product->name  )

@section('content')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Product show')}}
            </h2>
        </x-slot>
    <article class="container">
        <section class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">{{ $product->name }}</h1>
            </div>
        </section>
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row g-0">

                        <div class="container">
                            <div class="row">
                                <div class="card bg-dark text-white col-10">
                                    <img src="https://picsum.photos/200/300/?blur" class="card-img" alt="..."
                                         width="500" height="250">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <p class="card-text">{{$product->brand}}</p>
                                        <p class="card-text">Sizes: {{$product->available_size}}</p>
                                        <p class="card-text"><small class="text-muted">{{$product->price}}</small></p>
                                        <p class="card-text"><small class="text-muted">{{$product->category_id}}</small></p>
                                    </div>
                                </div>
                                <div class="col-2">

                                    <div class="btn-group col-12" role="group"
                                         aria-label="Basic checkbox toggle button group">
                                        <a href="/products/{{$product->slug}}/edit" class="btn btn-outline-dark"
                                           style="height:40px;width: 150px">Edit</a>

                                    </div>
                                    <div class="col-12 btn-group" role="group"
                                         aria-label="Basic checkbox toggle button group">

                                    <a href="/products" class="btn btn-outline-dark"
                                       style="height:40px;width: 100px">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
    </x-app-layout>
@endsection


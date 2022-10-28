@extends('layouts.base')

@section('title', 'Show | ' . $product->name  )

@section('content')
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
                                        <p class="card-text">Marca: {{$product->brand}}</p>
                                        <p class="card-text">Sizes: {{$product->available_size}}</p>
                                        <p class="card-text"><small class="text-muted">Price:{{$product->price}}</small></p>
                                        <p class="card-text"><small class="text-muted">Category:{{$product->category_id}}</small></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection


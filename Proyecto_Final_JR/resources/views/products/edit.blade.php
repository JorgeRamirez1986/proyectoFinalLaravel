@extends('layouts.base')

@section('title', 'Edit | ' . $product->name )

@section('content')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Product edit')}}
            </h2>
        </x-slot>
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">
                Edit {{$product->name}}
            </h1>
        </section>
    </article>
    <article class="container">
        <section>
            <form action="/products/{{$product->slug}}" class="row" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name',$product->name)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{old('brand',$product->brand)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{old('price',$product->price)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="available_size" class="form-label">Available size</label>
                    <input type="text" class="form-control" id="available_size" name="available_size" value="{{old('available_size',$product->available_size)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="category_id" class="form-label">Category ID</label>
                    <input type="number" class="form-control" id="category_id" name="category_id" value="{{old('category_id',$product->category_id)}}">
                </div>

                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Save" class="btn btn-success text-center">
                </div>

            </form>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
    </article>
    </x-app-layout>
@endsection


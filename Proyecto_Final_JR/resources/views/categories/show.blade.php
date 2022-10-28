@extends('layouts.base')

@section('title', 'Show | ' . $category->name  )

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Category show')}}
            </h2>
        </x-slot>
        <article class="container">
            <section class="row">
                <div class="col-12">
                    <h1 class="text-center alert alert-success">{{ $category->name }}</h1>
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
                                            <h5 class="card-title">{{$category->name}}</h5>
                                            <p class="card-text">{{$category->description}}</p>
                                            <p class="card-text">{{$category->priority}}</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <a href="/categories/{{$category->slug}}/edit" class="btn btn-success"
                                           style="height:40px;width: 100px">Edit</a>
                                        <a href="/categories" class="btn btn-success" style="height:40px;width: 100px">Back</a>
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


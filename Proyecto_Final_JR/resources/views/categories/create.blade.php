@extends('layouts.base')

@section('title', 'Create new category')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Category create')}}
            </h2>
        </x-slot>
        <article class="container">
            <section class="row">
                <h1 class="col alert alert-success text-center">Create Category</h1>
            </section>
        </article>
        <article class="container">
            <section>
                <form action="/categories" class="row" method="POST">
                    @csrf
                    <div class="mb-3 col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                               value="{{old('description')}}">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="priority" class="form-label">Priority</label>
                        <input type="number" class="form-control" id="priority" name="priority"
                               value="{{old('priority')}}">
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


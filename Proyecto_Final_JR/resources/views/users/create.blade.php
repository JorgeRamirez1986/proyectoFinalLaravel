@extends('layouts.base')

@section('title', 'Create new user')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Users create')}}
            </h2>
        </x-slot>

        <article class="container">
            <section class="row">
                <h1 class="col alert alert-success text-center">Create user</h1>
            </section>
        </article>
        <article class="container">
            <section>
                <form action="/users" class="row" method="POST">
                    @csrf
                    <div class="mb-3 col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               value="{{old('password')}}">
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


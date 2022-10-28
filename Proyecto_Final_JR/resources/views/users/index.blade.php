@extends('layouts.base')

@section('title') Users list @endsection

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="front-semibold text-xl text-gray-700 leading-tight">
                {{__('Users')}}
            </h2>
        </x-slot>

        <article class="container">
            <section class="row">
                <h1 class="col alert alert-success text-center">Users</h1>
            </section>
        </article>
        <article class="container">
            <section class="row">
                <div class="col">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbdody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td><a href="/users/{{$user->id}}/edit" class="btn btn-success">Edit</a></td>
                                    <td>
                                        <form action="/users/{{$user->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input
                                                type="submit"
                                                value="Delete"
                                                class="btn btn-danger"
                                                onclick="return confirm('Are you sure ?')"
                                            >
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbdody>
                    </table>
                </div>
            </section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/users/create" class="btn btn-success text-center">Create new user</a>
                </div>
            </section>
        </article>
    </x-app-layout>
@endsection

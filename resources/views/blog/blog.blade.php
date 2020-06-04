@extends('layouts.app')


@section('content')
    <div class="container-fluid">
    <div class="row ">
        <div class="col-12">
            <div class="row justify-content-center">
                <h1 class="display-1 judul" style="font-family: Balsamiq Sans">kertasfolio</h1>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <p class="text-center lead">If your happiness depends on money, you will never be happy with yourself</p>
                <hr class="pt-0">
            </div>

            <div class="card border-0">
                <div class="card-body" style="background-color: #DEEAF6;">
                   <livewire:blog.blog-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
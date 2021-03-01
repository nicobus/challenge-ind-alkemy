
@extends('layouts.layout')

@section('title')
    Challenge | {{$title}}
@endsection

@section('content')
<div class="main-body-content">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @method('patch')
                            @include('components.postForm', ['btntext'=>'Editar post'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
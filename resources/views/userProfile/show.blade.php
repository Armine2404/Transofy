@extends('layouts.admin')

@section('content')
<div class="content-wrapper pt-5">
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">User Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/profile/index">All Users</a></li>
                        <li class="breadcrumb-item active"> User Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div
    <div class="content">
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">{{$user->name}} {{$user->lastname}}</h3>
                            <div class="col-12">
                                <img src="http://aerodynamics.dataleanmakers.net/dist/imagenes/5381.jpg"
                                    class="product-image" alt="user Image" style="width:80%">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3">
                                <h3 class="d-inline-block" style="color:#3490dc">{{$user->name}}
                                    {{$user->profile->lastname}}</h3> <br>
                                <p><em>{{$user->profile->gender}}</em></p>
                            </h3>
                            <p><em>{{$user->profile-> street}} {{$user->profile-> state}} <br>
                                    {{$user->profile-> country}}
                                    {{$user->profile-> city}}</em></p>
                            <hr>
                            <h3 class="my-3">
                                <h3 class="d-inline-block" style="color: teal"><i class="fas fa-envelope"></i>
                                    </span>Email:</h3>
                            </h3>
                            <p><em>{{$user->email}}</em></p>
                                <hr>
                                <h3 class="my-3">
                                    <h3 class="d-inline-block" style="color: teal"><i class="fas fa-lg fa-phone"></i>
                                        </span>Mobile:</h3>
                                </h3>
                                <p><em>{{$user->profile->mobile}}</em></p>
                                    <hr>
                                    <h3 class="my-3">
                                        <h3 class="d-inline-block" style="color: teal"><i
                                                class="fas fa-birthday-cake"></i>
                                            </span>Birthday:</h3>
                                    </h3>
                                    <p><em>{{$user->profile->birthday}}</em></p>
                                        <hr>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h2 class="pt-5" style="color:#3490dc">Lead Marchant reviews</h2>
                            @foreach($user->review as $reviews)
                            <div class="row justify-content-center" style="font-size:0.8rem">
                                <div class="col-md-8">
                                    <p> {{ $reviews->leadmarchant->storeName}} </p>
                                    <div class="d-flex">
                                        @for($i = 0; $i < $reviews->rating; $i++)
                                        <h3 style="color:orange"><i class="fas fa-star"></i></h3>
                                        @endfor
                                    </div>
                                    </h4>
                                    <p> {{ $reviews->review}} </p>
                                    <h4>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                        </div>

                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
</div>
@endsection
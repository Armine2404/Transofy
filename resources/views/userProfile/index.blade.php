@extends('layouts.admin')

@section('content')

<!-- Main content -->
<div class="content-wrapper pt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active"> Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid shadow">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    @foreach($users as $user)
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card card-primary card-outline bg-light">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead text-blue pt-3"><b>{{ $user->name}}
                                                {{ $user->profile->lastname}}</b></h2>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i>
                                                </span>Email: {{$user->email}}</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span>Mobile:
                                                {{ $user->profile->mobile}}</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-calendar-alt"></i>
                                                </span>Birthday: {{$user->profile->birthday}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="http://aerodynamics.dataleanmakers.net/dist/imagenes/5381.jpg" alt="" class="pt-3 img-circle img-fluid ">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                <a href="/profile/show/{{$user->id}}" class="btn btn-outline-info btn-block"  style="border-radius:1rem"><b>View Profile</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">

                    </div>
                </div>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </section>
</div>


@endsection
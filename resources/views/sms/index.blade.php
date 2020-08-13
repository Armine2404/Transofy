@extends('layouts.admin')

@section('content')

<!-- Main content -->
<div class="content-wrapper pt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">SMS Campaign</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active"> SMS Campaign</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <x-alert />
                <div class="col-md-12">
                    <div class="card shadow ">
                        <div class="card-header justify-content-between bg-teal d-flex">
                            <h5 class="card-title ">SMS Campaign</h5>
                            <a class="btn btn-teal ml-auto" href="/sms/create"><i class="fas fa-plus"></i> Add
                                SMS Campaign</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-header table-active">
                                        <tr style="text-transform: uppercase; font-size:0.8rem">
                                            <th>name</th>
                                            <th>description</th>
                                            <th>start dateTime</th>
                                            <th>frequency</th>
                                            <th>sent to</th>
                                            <th>user type</th>
                                            <th>created by</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($smss as $sms)
                                        <tr>
                                            <td>{{$sms->name}}</td>
                                            <td>{{$sms->description}}</td>
                                            <td>{{$sms->startTime}}</td>
                                            <td>{{$sms->frequency}}</td>
                                            <td>{{$sms->sentTo}}</td>
                                            <td>{{$sms->userType}}</td>
                                            <td>{{$sms->createdBy}}</td>
                                        </tr>
                                        @empty
                                        <div class="text-center">
                                            <p>No data available:)</p>
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                {{ $smss->links() }}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
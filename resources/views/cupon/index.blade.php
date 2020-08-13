@extends('layouts.admin')

@section('content')

<!-- Main content -->
<div class="content-wrapper pt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Coupon</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active"> Coupon</li>
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
                            <h5 class="card-title ">Coupon</h5>
                            <a class="btn btn-teal ml-auto" href="/cupon/create"><i class="fas fa-plus"></i> Add
                                Coupon</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-header table-active">
                                        <tr style="text-transform: uppercase; font-size:0.8rem">
                                            <th>name</th>
                                            <th>start Time</th>
                                            <th>end time</th>
                                            <th>base on</th>
                                            <th>user</th>
                                            <th>Merchant</th>
                                            <th>Offer Type</th>
                                            <th>Discount %</th>
                                            <th>Discount in Currency</th>
                                            <th>created by</th>
                                            <th>description</th>
                                            <th>status</th>                                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($cupons as $cupon)
                                        <tr>
                                            <td>{{$cupon->name}}</td>
                                            <td>{{$cupon->startTime}}</td>
                                            <td>{{$cupon->endTime}}</td>
                                            <td>{{$cupon->baseOn}}</td>
                                            <td>{{$cupon->user->name}}</td>
                                            <td>{{$cupon->leadmarchant->storeName}}</td>
                                            <td>{{$cupon->type}}</td>
                                            <td>{{$cupon->discount}}</td>
                                            <td>{{$cupon->currency}}</td>
                                            <td>{{$cupon->createdBy}}</td>
                                            <td>{{$cupon->description}}</td>
                                            <td>{{$cupon->status}}</td>
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
                                {{ $cupons->links() }}
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
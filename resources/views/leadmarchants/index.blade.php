@extends('layouts.admin')

@section('content')

<!-- Main content -->
<div class="content-wrapper pt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lead Marchant</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active"> Lead Marchant</li>
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
                            <h5 class="card-title ">Lead Marchant</h5>
                            <a class="btn btn-teal ml-auto" href="/addlead"><i class="fas fa-plus"></i> Add
                                Lead Marchant</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-header table-active">
                                        <tr style="text-transform: uppercase; font-size:0.8rem">
                                            <th>REVIEWS</th>
                                            <th>firstName</th>
                                            <th>lastName</th>
                                            <th>email</th>
                                            <th>mobile</th>
                                            <th>phone</th>
                                            <th>street</th>
                                            <th>city</th>
                                            <th>state</th>
                                            <th>country</th>
                                            <th>location</th>
                                            <th>storeName</th>
                                            <th>logo</th>
                                            <th>type</th>
                                            <th>condition</th>
                                            <th>contact</th>
                                            <th>supportEmail</th>
                                            <th>altContact</th>
                                            <th>openTime</th>
                                            <th>closeTime</th>
                                            <th>maplink</th>
                                            <th>description</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($lead as $leads)
                                        <tr>
                                            <td class="text-center"> <a href="/lead/show/{{$leads->id}}"><i
                                                        class="fas fa-eye"></i></td>
                                            <td>{{$leads->firstName}}</td>
                                            <td>{{$leads->lastName}}</td>
                                            <td>{{$leads->email}}</td>
                                            <td>{{$leads->mobile}}</td>
                                            <td>{{$leads->phone}}</td>
                                            <td>{{$leads->street}}</td>
                                            <td>{{$leads->city}}</td>
                                            <td>{{$leads->state}}</td>
                                            <td>{{$leads->country}}</td>
                                            <td>{{$leads->location}}</td>
                                            <td>{{$leads->storeName}}</td>
                                            <td><img src="storage/{{$leads->logo}}" width="130" /></td>
                                            <td>{{$leads->type}}</td>
                                            <td>{{$leads->condition}}</td>
                                            <td>{{$leads->contact}}</td>
                                            <td>{{$leads->supportEmail}}</td>
                                            <td>{{$leads->altContact}}</td>
                                            <td>{{$leads->openTime}}</td>
                                            <td>{{$leads->closeTime}}</td>
                                            <td>{{$leads->maplink}}</td>
                                            <td>{{$leads->description}}</td>
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
                                {{ $lead->links() }}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
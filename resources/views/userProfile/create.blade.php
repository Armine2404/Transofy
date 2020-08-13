@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pt-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add User Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Add User Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12 ">
                <x-alert />
                <!-- general form elements -->
                <div class="card shadow">
                    <div class="card-header bg-teal justify-content-between bg-teal d-flex">
                        <h3 class="card-title">Add User Profile</h3>
                        <a class="btn btn-teal ml-auto" href="/profile/index"><i class="far fa-eye"></i> View All Users
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/profile/store" method="post">
                        @csrf
                        <div class="card-body row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">First Name</label>
                                    <input type="text" class="form-control form-control-sm" id=""
                                        value="{{auth()->user()->name}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Last Name </label>
                                    <input type="text" class="form-control form-control-sm" id="" name="lastname"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Email</label>
                                    <input type="text" class="form-control form-control-sm" id=""
                                        value="{{auth()->user()->email}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Mobile (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="mobile"
                                        placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Phone </label>
                                    <input type="text" class="form-control form-control-sm" id="" name="phone"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="">Street Address (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="street"
                                        placeholder="Street Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">City (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="city"
                                        placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">State (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="state"
                                        placeholder="State">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Country (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="country"
                                        placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Latitude</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="latitude"
                                        placeholder="Latitude">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Birthday (*)</label>
                                    <input type="date" class="form-control form-control-sm" id="" name="birthday"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Gender (*)</label>
                                    <select class="form-control form-control-sm" name="gender">
                                        <option selected disabled>Select...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Phone Extension</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="estension"
                                        placeholder="Phone Extension">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Devicen Type</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="type"
                                        placeholder="Devicen Type">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Device Token</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="token"
                                        placeholder="Devicen Type">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            @endsection
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pt-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add SMS Campaign</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Add SMS Campaign</li>
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
                        <h3 class="card-title">Add SMS CAMPAIGN</h3>
                        <a class="btn btn-teal ml-auto" href="/sms/index"><i class="far fa-eye"></i> View The List </a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/sms/store" method="post" >
                        @csrf
                        <div class="card-body row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Name (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Description (*)</label>
                                    <input type="text" class="form-control  form-control-sm" id="" name="description" placeholder="Description">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="">Start DateTime (*)</label>
                                    <input type="dateTime-local" class="form-control  form-control-sm" id="" name="startTime"
                                        placeholder="Start DateTime">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="">Frequency (*)</label>
                                    <input type="text" class="form-control  form-control-sm" id="" name="frequency" placeholder="Frequency">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">SMS to be Sent (*)</label>
                                    <input type="text" class="form-control  form-control-sm" id="" name="sentTo"
                                        placeholder="SMS to be Sent">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">User Type (*)</label>
                                    <input type="text" class="form-control  form-control-sm" id=""  name="userType" placeholder="User Type">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Created By (*)</label>
                                    <input type="text" class="form-control  form-control-sm" id="" name="createdBy" placeholder="Created By">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            @endsection
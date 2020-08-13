@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pt-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Coupon</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Add Coupon</li>
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
                        <h3 class="card-title">Add Coupon</h3>
                        <a class="btn btn-teal ml-auto" href="/cupon/index"><i class="far fa-eye"></i> View The List </a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/cupon/store" method="post" >
                        @csrf
                        <div class="card-body row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Coupon Name (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="name" placeholder="Coupon Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Start Time (*)</label>
                                    <input type="time" class="form-control form-control-sm" id="" name="startTime" placeholder="Start Time">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">End Time (*)</label>
                                    <input type="time" class="form-control form-control-sm" id=""  name="endTime"placeholder="End Time">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Base On (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="baseOn" placeholder="Base On">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Coupon Valid User (*)</label>
                                    <select type="text" class="form-control form-control-sm" id="" name="user_id"
                                        placeholder="Coupon Valid User">
                                        <option selected disabled>Seelect User</option>
                                    @foreach($users as $user)
                                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Merchant (*) </label>
                                    <select type="text" class="form-control form-control-sm" id="" name="leadmarchants_id" placeholder="Merchant">
                                    <option selected disabled>Seelect Merchant</option>
                                    @foreach($leadmarchants as $leadmarchant)
                                      <option value="{{ $leadmarchant->id }}">{{ $leadmarchant->storeName }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Offer Type (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="type" placeholder="Offer Type">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Discount In % (*)</label>
                                    <input type="number" class="form-control form-control-sm" id="" name="discount"
                                        placeholder="Discount In %">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Discount In Currency (*)</label>
                                    <input type="text" class="form-control form-control-sm" id=""
                                        name="currency"
                                        placeholder="Discount In Currency">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Created By (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="createdBy" placeholder="Created By">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Coupon Description (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="description"
                                        placeholder="Coupon Description">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Coupon Current Status (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="status"
                                        placeholder="Coupon Current Status">
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
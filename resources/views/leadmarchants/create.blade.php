@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pt-5">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Lead Marchant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active">Add Lead Marchant</li>
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
                        <h3 class="card-title">Add Lead Marchant</h3>
                        <a class="btn btn-teal ml-auto" href="/lead"><i class="far fa-eye"></i>  View The List Of
                                Lead Marchant</a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/storeLead" method ="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">First Name (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="firstName" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Last Name (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="lastName" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Email (*)</label>
                                    <input type="email" class="form-control form-control-sm" id="" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Mobile (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="mobile" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Phone </label>
                                    <input type="text" class="form-control form-control-sm" id="" name="phone" placeholder="Phone">
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
                                    <input type="text" class="form-control form-control-sm" id="" placeholder="City" name="city">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">State (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" placeholder="State" name="state">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Country (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" placeholder="Country" name="country">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Location</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="location" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Store Name (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="storeName" placeholder="Store Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Store Logo</label>
                                    <input type="file" class="form-control form-control-sm" id="" name="logo" placeholder="Store Logo">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Business Type (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="type"
                                        placeholder="Business Type">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Terms Condition</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="condition"
                                        placeholder="Terms Condition">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Store Contact</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="contact"
                                        placeholder="Store Contact">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Store Support Email (*)</label>
                                    <input type="email" class="form-control form-control-sm" id="" name="supportEmail"
                                        placeholder="Store Support Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Store Alertnate Contact</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="altContact"
                                        placeholder="Store Alertnate Contact">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Open Time</label>
                                    <input type="time" class="form-control form-control-sm" id="" placeholder="Open Time" name="openTime">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Close Time</label>
                                    <input type="time" class="form-control form-control-sm" id="" placeholder="Close Time" name="closeTime">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="">Google Map Link (*)</label>
                                    <input type="text" class="form-control form-control-sm" id="" name="maplink"
                                        placeholder="Google Map Link">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="control-label" for="">Merchant Description</label>
                                    <input type="text" class="form-control form-control-sm" id="" name ="description"
                                        placeholder="Merchant Description">
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
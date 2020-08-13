@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pt-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Review</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Add Review</li>
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
                <div class="card shadow ">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/review/store" method="post">
                        @csrf
                        <div class="card-body row">                       
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Merchant</label>
                                    <select type="text" class="form-control" id="" name="merchant"
                                        placeholder="Merchant">
                                        <option selected desabled>Select a merchant (*)</option>
                                        @foreach($leadmarchants as $leadmarchant)
                                        <option value="{{ $leadmarchant->id}}">{{ $leadmarchant->storeName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="">Review</label>
                                    <textarea id="" class="form-control" name="review" rows="4" cols="50">

                                   </textarea>
                                </div>
                            </div>
                            <div class="col-md-4 offset-md-3">
                                <div class="form-group">
                                    <div class="rating">
                                        <!--
                                    --> <input name="rating" value="5" id="e5" type="radio"></a><label
                                            for="e5">☆</label>
                                        <!--
                                            --><input name="rating" value="4" id="e4" type="radio"></a><label
                                            for="e4">☆</label>
                                        <!--
                                            --><input name="rating" value="3" id="e3" type="radio"></a><label
                                            for="e3">☆</label>
                                        <!--
                                            --><input name="rating" value="2" id="e2" type="radio"></a><label
                                            for="e2">☆</label>
                                        <!--
                                            --><input name="rating" id="e1" value="1" type="radio"></a><label
                                            for="e1">☆</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            @endsection
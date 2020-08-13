@extends('layouts.admin')

@section('content')
<div class="content-wrapper pt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Reviews</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active"> Reviews</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card shadow ">
                        <div class="card-body ">
                            @foreach($lead->reviews as $review)
                            <div class="row justify-content-center" style="font-size:0.8rem">
                                <div class="col-md-8">
                                    <p> {{ $review->leadmarchant->storeName}} </p>
                                    <div class="d-flex">
                                        <!-- @for($i = 0; $i < $review->rating; $i++) -->
                                        <h3 style="color:orange"><i class="fas fa-star"></i></h3>
                                        <!-- @endfor -->
                                    </div>
                                    <h5>{{ $review->user->name}}</h5>
                                    </h4>
                                    <p> {{ $review->review}} </p>
                                    <h4>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
@endsection
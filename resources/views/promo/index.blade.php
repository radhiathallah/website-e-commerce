@extends('admin.layout.index')
@section('title')
Promo
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Promo</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        @include('admin.layout.alert')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Produk</h4>
                    </div>
                    <div class="card-body text-dark">
                        <div class="table-responsive">
                            <a href="/tambah_promo" class="btn btn-primary mb-3" type="button">Tambahkan Promo</a>
                            @if ($promo == NULL)
                            <div class="text-center">
                                <p class="text-muted font-italic">No promo available</p>
                            </div>
                            @endif
                            @foreach ($promo as $p)
                            <div class="card mb-3 border border-primary">
                                <img src="{{asset('images/cover_promo/'.$p->cover)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$p->nama_promo}}</h5>
                                    <p class="card-text">{{$p->deskripsi}}</p>
                                    <a href="/produk_promo/{{$p->id}}" class="btn btn-secondary text-white"
                                        style="text-decoration:none;">Lihat
                                        Produk</a>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.layout.index')
@section('title')
Admin | Produk
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">{{Session::get('name')}}</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Produk Promo</a></li>
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
                            <div class="row">
                                @if($produk == NULL)
                                <div class="text-center text-muted font-italic col-12">
                                    <p>No Data Available</p>
                                </div>
                                @else
                                @foreach ($produk as $p)
                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                                    <div class="card mb-3 bg-light border-right">
                                        <img class="card-img-top img-fluid bg-white"
                                            src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="Card image cap">
                                        <div class="card-header">
                                            <h5 class="card-title">{{$p->nama_produk}}</h5>
                                            <p>{{$p->kategori->nama_kategori}}</p>
                                        </div>
                                        {{-- <div class="card-body">
                                            <p class="card-text">
                                            </p>
                                        </div> --}}
                                        <div class="card-footer bg-white">
                                            <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                            <h4 class="product-price">Rp
                                                {{number_format($diskon,2,',','.')}}
                                                <br>
                                                <del class="product-old-price">Rp
                                                    {{number_format($p->harga,2,',','.')}}</del>
                                            </h4>
                                            <button type="button" class="btn btn-primary float-right"
                                                data-toggle="modal" data-target="#produk{{$p->id}}"><i
                                                    class="fa fa-eye"></i>&nbspSee Product</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="produk{{$p->id}}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">{{$p->nama_produk}}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-2">
                                                                <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}"
                                                                    alt="" width="200px">
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <strong>Kategori </strong>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{$p->kategori->nama_kategori}}</p>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <strong>Merek </strong>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{$p->merek->nama_merek}}</p>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <strong>Harga </strong>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                                                    <p class="product-price">Rp
                                                                        {{number_format($diskon,2,',','.')}}
                                                                        <br>
                                                                        <del class="product-old-price">Rp
                                                                            {{number_format($p->harga,2,',','.')}}</del>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <strong>Jumlah </strong>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{$p->jumlah_produk}} pcs</p>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <strong class="font-bold">Deskripsi</strong>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    :
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <?=$p->deskripsi?>

                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="/produk/hapus/{{$p->id}}" type="button"
                                                                class="btn btn-danger text-white"
                                                                onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i
                                                                    class="fa fa-trash m-1"></i>Hapus</a>
                                                            <a href="/produk/ubah_produk/{{$p->id}}" type="button"
                                                                class="btn btn-success text-white"><i
                                                                    class="fa fa-edit m-1"></i>Ubah</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
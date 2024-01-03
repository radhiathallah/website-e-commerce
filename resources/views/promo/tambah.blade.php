@extends('admin.layout.index')
@section('title')
Tambah Promo
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Element</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Promo</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Promo</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        @include('admin.layout.alert')
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/add_promo" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Promo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_promo"
                                            placeholder="Nama Promo">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Diskon (%)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="diskon" placeholder="Diskon (%)">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_berakhir"
                                            placeholder="Tanggal Berakhir">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="deskripsi"
                                            placeholder="Deskripsi">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Produk</label>
                                    <select name="id_produk[]" id="id_produk" multiple>
                                        @foreach ($produk as $p)
                                        <option value="{{$p->nama_produk}}">{{$p->nama_produk}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Cover
                                        Promo</label>
                                    <div class="col-md-12">
                                        <div class="form-group m-2 text-center">
                                            <input type="file" name="cover" placeholder="Choose image" id="image">
                                            @error('image')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2 text-center">
                                        <img id="preview-image-before-upload" src="{{asset('img/not-found.jpg')}}"
                                            alt="preview image" style="max-height: 250px;">
                                    </div>

                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->

    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<script>
    new MultiSelectTag('id_produk')  // id
</script>
@endsection
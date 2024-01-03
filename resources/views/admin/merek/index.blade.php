@extends('admin.layout.index')
@section('title')
Admin | Merek
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Merek</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        @include('admin.layout.alert')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="/merek/tambah_merek" class="btn btn-secondary mb-4"><i
                                    class="fa fa-plus m-1"></i>Tambahkan merek</a>
                            <table id="example" class="display text-center" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Merek</th>
                                        <th>Cover Merek</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($merek==NULL)
                                    <tr class="text-center text-muted font-italic">No Data Avilable</tr>
                                    @else
                                    <?php $no=1 ?>
                                    @foreach ($merek as $k)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$k->nama_merek}}</td>
                                        <td><img src="{{asset('images/cover_merek/'.$k->cover_merek)}}" alt=""
                                                width="100px" height="100px"></td>
                                        <td>
                                            <a href="/merek/ubah_merek/{{$k->id}}"
                                                style="background-color:green;padding:5px;color:white;border-radius:4px;text-decoration:none;"><i
                                                    class="fa fa-edit m-1"></i>Ubah</a>
                                            <a href="/edit/"
                                                style="background-color:red;padding:5px;color:white;border-radius:4px;text-decoration:none;"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i
                                                    class="fa fa-trash m-1"></i>Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
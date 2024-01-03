@extends('admin.layout.index')
@section('title')
Admin | Tambah Kategori
@endsection
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Kategori</a></li>
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
                            <form action="/kategori/add_kategori" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_kategori"
                                            placeholder="Nama Kategori">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Cover
                                        Kategori</label>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function (e) {

  
  $('#image').change(function(){
           
   let reader = new FileReader();

   reader.onload = (e) => { 

     $('#preview-image-before-upload').attr('src', e.target.result); 
   }

   reader.readAsDataURL(this.files[0]); 
  
  });
  
});

</script>
@endsection
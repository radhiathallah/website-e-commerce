@extends('admin.layout.index')
@section('title')
Admin | Tambah Produk
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Produk</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        @include('admin.layout.alert')
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambahkan Data Produk</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/produk/add_produk" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_produk"
                                            placeholder="Nama Produk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="jumlah_produk"
                                            placeholder="Jumlah Produk (pcs)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            placeholder="Harga Produk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="id_kategori" class="form-control" id="">
                                            <option value="">---PILIH KATEGORI---</option>
                                            @foreach ($kategori as $k)
                                            <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Merek</label>
                                    <div class="col-sm-10">
                                        <select name="id_merek" class="form-control" id="">
                                            <option value="">---PILIH MEREK---</option>
                                            @foreach ($merek as $m)
                                            <option value="{{$m->id}}">{{$m->nama_merek}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi Produk</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="30" cols="30" id="editor" name="deskripsi"
                                            placeholder="Deskripsi Produk"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Foto
                                        Produk</label>
                                    <div class="col-md-12">
                                        <div class="form-group m-2 text-center">
                                            <input type="file" placeholder="Choose image" name="foto_produk" id="image"
                                                multiple>
                                            @error('image')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-2 text-center">
                                        <img id="preview-image-before-upload" src="{{asset('img/not-found.jpg')}}"
                                            alt="preview image" style="max-height: 250px;">
                                    </div>
                                    {{-- <div class="form-group-row">
                                        <a type="button" class="btn btn-primary" id="add_input"
                                            style="text-decoration:none;">Tambah Input</a>
                                    </div>


                                    <div class="form-group row mt-4" id="data"></div> --}}

                                    {{-- <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Color Picker</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-5">
                                                        <div class="example">
                                                            <p class="mb-1">Simple mode</p>
                                                            <input type="text" class="as_colorpicker form-control"
                                                                value="#7ab2fa">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-5">
                                                        <div class="example">
                                                            <p class="mb-1">Complex mode</p>
                                                            <input type="text" class="complex-colorpicker form-control"
                                                                value="#fa7a7a">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-5">
                                                        <div class="example">
                                                            <p class="mb-1">Gradiant mode</p>
                                                            <input type="text" class="gradient-colorpicker form-control"
                                                                value="#bee0ab">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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

<script>
    new MultiSelectTag('alat')  // id
</script>
<script>
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
<script>
    $(document).on('click', '.add_field', function() {
  $('<input type="text" class="input" name="field[]" value="">').insertAfter('.input:last');
})
</script>
<script>
    let dataRow = 0
    $('#add_input').click(()=>{
        dataRow++
        inputRow(dataRow)
    })
    inputRow = (i) => {
        let file = '<label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Foto Produk</label> <div class="col-md-12"><div class="form-group m-2 text-center"><input type="file" name="foto_produk" placeholder="Choose image" id="image">@error('image')<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>@enderror</div></div><div class="col-md-12 mb-2 text-center"><img id="preview-image-before-upload" src="{{asset('img/not-found.jpg')}}" alt="preview image" style="max-height: 250px;">'
        $('#data').append(file)
    }
</script>
@endsection
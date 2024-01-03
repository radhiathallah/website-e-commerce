@if(session()->has('sukses'))
<div class="alert alert-success solid alert-right-icon">
    <span><i class="mdi mdi-check"></i></span>
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button> <strong>Sukses!</strong> {{session('sukses')}}
</div>
@endif
@if(session()->has('gagal'))
<div class="alert alert-danger solid alert-right-icon">
    <span><i class="mdi mdi-help"></i></span>
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
    </button>
    <strong>Gagal!</strong> {{session('gagal')}}
</div>
@endif
@include('sweetalert::alert')
<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{asset('assets_admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets_admin/js/quixnav-init.js')}}"></script>
<script src="{{asset('assets_admin/js/custom.min.js')}}"></script>



<!-- Daterangepicker -->
<!-- momment js is must -->
<script src="{{asset('assets_admin/vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('assets_admin/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- clockpicker -->
<script src="{{asset('assets_admin/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
<!-- asColorPicker -->
<script src="{{asset('assets_admin/vendor/jquery-asColor/jquery-asColor.min.js')}}"></script>
<script src="{{asset('assets_admin/vendor/jquery-asGradient/jquery-asGradient.min.js')}}"></script>
<script src="{{asset('assets_admin/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js')}}"></script>
<!-- Material color picker -->
<script
    src="{{asset('assets_admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}">
</script>
<!-- pickdate -->
<script src="{{asset('assets_admin/vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('assets_admin/vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('assets_admin/vendor/pickadate/picker.date.js')}}"></script>



<!-- Daterangepicker -->
<script src="{{asset('assets_admin/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
<!-- Clockpicker init -->
<script src="{{asset('assets_admin/js/plugins-init/clock-picker-init.js')}}"></script>
<!-- asColorPicker init -->
<script src="{{asset('assets_admin/js/plugins-init/jquery-asColorPicker.init.js')}}"></script>
<!-- Material color picker init -->
<script src="{{asset('assets_admin/js/plugins-init/material-date-picker-init.js')}}"></script>
<!-- Pickdate -->
<script src="{{asset('assets_admin/js/plugins-init/pickadate-init.js')}}"></script>
<script src="{{asset('assets/vendor/summernote/js/summernote.min.js')}}"></script>
<!-- Summernote init -->
<script src="{{asset('assets/js/plugins-init/summernote-init.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<script src="{{asset('assets_admin/vendor/chartist/js/chartist.min.js')}}"></script>

<script src="{{asset('assets_admin/vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('assets_admin/vendor/pg-calendar/js/pignose.calendar.min.js')}}"></script>


<script src="{{asset('assets_admin/js/dashboard/dashboard-2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<!-- Datatable -->
<script src="{{asset('assets_admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets_admin/js/plugins-init/datatables.init.js')}}"></script>
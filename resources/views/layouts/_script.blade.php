<!-- plugins:js -->
<script src="{{ asset('Majestic/template/vendors/base/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('Majestic/template/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('Majestic/template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('Majestic/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('Majestic/template/js/off-canvas.js') }}"></script>
<script src="{{ asset('Majestic/template/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('Majestic/template/js/template.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('Majestic/template/js/dashboard.js') }}"></script>
<script src="{{ asset('Majestic/template/js/data-table.js') }}"></script>
<script src="{{ asset('Majestic/template/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('Majestic/template/js/dataTables.bootstrap4.js') }}"></script>
<!-- End custom js for this page-->

<script src="{{ asset('Majestic/template/js/jquery.cookie.js') }}" type="text/javascript"></script>

{{-- Summernote --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200
        });
    });
</script>

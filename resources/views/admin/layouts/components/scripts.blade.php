<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script src="https://codescandy.com/geeks-bootstrap-5//admin_asset/libs/@yaireo/tagify/dist/tagify.min.js"></script>

<script src="/admin_asset/plugins/ckeditor/ckeditor.js"></script>
<script src="/admin_asset/plugins/ckfinder_2/ckfinder.js"></script>
<script src="/admin_asset/library/finder.js"></script>

<script>
    const BASE_URL = "{{ env('BASE_URL') }}";
</script>
<script>
    // DataTable
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });

    // Tagify
    var inputTag = document.querySelector('input[name=meta_keyword]');
    new Tagify(inputTag);
</script>



<script>
    // Select2: Giới hạn danh mục
    $(".select_category").select2({
        maximumSelectionLength: 5
    });
</script>

<script src="/admin_asset/js/core/jquery-3.7.1.min.js"></script>
<script src="/admin_asset/js/core/popper.min.js"></script>
{{-- <script src="/admin_asset/js/core/bootstrap.min.js"></script> --}}

<!-- jQuery Scrollbar -->
<script src="/admin_asset/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="/admin_asset/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="/admin_asset/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="/admin_asset/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="/admin_asset/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="/admin_asset/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="/admin_asset/js/plugin/jsvectormap/jsvectormap.min.js"></script>
<script src="/admin_asset/js/plugin/jsvectormap/world.js"></script>

<!-- Sweet Alert -->
<script src="/admin_asset/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Kaiadmin JS -->
<script src="/admin_asset/js/kaiadmin.min.js"></script>

<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="/admin_asset/js/setting-demo.js"></script>
<script src="/admin_asset/js/demo.js"></script>

   <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>
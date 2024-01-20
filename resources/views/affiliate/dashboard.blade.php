@extends("affiliate.template")

@section("title")
Dashboard Afiliate
@endsection

@section("content")



@endsection

@section("script")

<script>
    $(function () {
        $('#datatable2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "order": [],
        });
    });
</script>

@endsection

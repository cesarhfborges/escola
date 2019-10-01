@if ($message = Session::get('success'))
    <script type="application/javascript">
        $(document).ready(function() {
            swal({
                toast: true,
                position: 'top-right',
                type: 'success',
                title: '{{ $message }}',
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
{{--    <div class="alert alert-success alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
@endif


@if ($message = Session::get('error'))
    <script type="application/javascript">
        $(document).ready(function() {
            swal({
                position: 'top-right',
                type: 'error',
                title: '{{ $message }}',
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
{{--    <div class="alert alert-danger alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
@endif


@if ($message = Session::get('warning'))
    <script type="application/javascript">
        $(document).ready(function() {
            swal({
                position: 'top-right',
                type: 'warning',
                title: '{{ $message }}',
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
{{--    <div class="alert alert-warning alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
@endif


@if ($message = Session::get('info'))
    <script type="application/javascript">
        $(document).ready(function() {
            swal({
                position: 'top-right',
                type: 'info',
                title: '{{ $message }}',
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
{{--    <div class="alert alert-info alert-block">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}
@endif


@if ($errors->any())
    <script type="application/javascript">
        $(document).ready(function() {
            swal({
                position: 'top-right',
                type: 'question',
                title: 'Verifique o formulário abaixo e tente novamente.',
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
{{--    <div class="alert alert-danger">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        Verifique o formulário abaixo e tente novamente.--}}
{{--    </div>--}}
@endif

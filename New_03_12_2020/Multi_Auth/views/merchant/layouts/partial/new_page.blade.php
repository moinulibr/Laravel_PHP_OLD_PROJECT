@extends('layouts.app')
@push('head_title')Blank Page @endpush

@push('extra-css')
<style>
    .red{color:red;}
</style>
<!-- Style -->
<!-- Style -->
<link rel="stylesheet" href="{{asset('backend/links')}}/vendors/select2/css/select2.min.css" type="text/css">
@endpush

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif
@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<!--==============================================================================================================--->
    <!------Page header / Page Title------->
    <div class="page-header">
        <div class="page-title">
            <h3>Page Title (Blank Page)</h3>
            <div>
                <div id="ecommerce-dashboard-daterangepicker" class="btn btn-outline-light">
                    <i class="ti-calendar mr-2 text-muted"></i>
                    <span></span>
                </div>
                <a href="#" class="btn btn-primary ml-2" data-toggle="dropdown">
                    <i class="ti-download"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Download</a>
                    <a href="#" class="dropdown-item">Print</a>
                </div>
            </div>
        </div>
    </div>
    <!------Page header / Page Title------->



    <!--******************************************************************************************************-->
    <!------Page  Details start from here------>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Content Title</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur debitis dignissimos doloremque fuga ipsa itaque magnam mollitia, necessitatibus neque officiis quam quas quia reiciendis reprehenderit sed suscipit ut voluptas.</p>
                </div>
            </div>
        </div>
    </div>
    <!------Page  Details End  here------>
    <!--******************************************************************************************************-->
    <!--========================================================================================================--->





    {{-- -
        <div class="page-header">
            <div class="page-title">
                <h3>Blank Page</h3>
            </div>
        </div>
    --}}

    @push('extra-js')

        <!-- Main scripts -->
        <script src="{{asset('backend/links')}}/vendors/bundle.js"></script>
        <!-- App scripts -->
        <script src="{{asset('backend/links')}}/assets/js/app.min.js"></script>
        <!-- Apex chart -->
        <script src="{{asset('backend/links')}}/../apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="{{asset('backend/links')}}/vendors/charts/apex/apexcharts.min.js"></script>

        <!-- Daterangepicker -->
        <script src="{{asset('backend/links')}}/vendors/datepicker/daterangepicker.js"></script>

        <!-- DataTable -->
        <script src="{{asset('backend/links')}}/vendors/dataTable/datatables.min.js"></script>

        <!-- Dashboard scripts -->
        <script src="{{asset('backend/links')}}/assets/js/examples/pages/ecommerce-dashboard.js"></script>


        <!-- Sweet alert -->
        <script src="{{asset('backend/links')}}/assets/js/examples/sweet-alert.js"></script>
        <!-- Toast examples -->
        <script src="{{asset('backend/links')}}/assets/js/examples/toast.js"></script>

        {{--
            <script>
                @if(Session::has('messege'))
                var type = "{{Session::get('alert-type','info')}}"
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('messege') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('messege') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('messege') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('messege') }}");
                        break;
                    }
                @endif
            </script>

                    swal("Good job!", "You clicked the button!", "success")
                    swal("Good job!", "You clicked the button!", "warning")
                    swal("Good job!", "You clicked the button!", "error")

                        <script type="text/javascript">
                                toastr.options = {
                                timeOut: 3000,
                                progressBar: true,
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                showDuration: 200,
                                hideDuration: 200
                            };
                            toastr.success('Successfully completed');
                            toastr.error('Something went wrong');
                            toastr.info('This is an informational message');
                            toastr.warning('You are currently not authorized');
                        </script>
        --}}

        <!-- Javascript -->
        <script src="{{asset('backend/links')}}/vendors/select2/js/select2.min.js"></script>
        <script>
            $('.select2').select2({
                placeholder: 'Select'
            });
        </script>


    @endpush
@endsection

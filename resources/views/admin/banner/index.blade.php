@extends('admin.layouts.admin_master')
@section('breadcumb')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Banner</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Landing-Page Banner</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    @endsection

    @section('content')
        <section class="content">
            <div class="container-fluid">
                @include('alerts.alerts')
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            {{-- <div class="box-title pull-right" style="margin-right: 1px;">
                                <a class="btn btn-block btn-primary" href="{{ route('admin.service.create') }}"> Add
                                    Service</a>
                            </div> --}}
                            <div class="pull-right"
                                style="text-align: -webkit-right;margin:20px;
                                                        ">
                                <a class="btn btn-primary" href="{{ route('admin.banner.create') }}"> Create Banner </a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">

                                <table id="bannerTable" class="table table-bordered table-striped" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                          
                                            <th id="operations_column" class="operations-tour">Operations</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    @section('script')
        <script>
            function deleteItem() {
                var id = $("#delete-banner #item_id").val();
                // console.log(id);

                $.ajax({
                    type: "DELETE",
                    url: "{{ url('admin/banner') }}/"+id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    success: function(result) {
                        $("#delete-banner").modal('hide');
                        $('#bannerTable').DataTable().ajax.reload();

                    }
                });
            }

            function OpenDeleteBox(id) {
                $("#delete-banner").modal('show');
                $("#delete-banner #item_id").val(id);
            }

     
                $('#bannerTable').DataTable({
                    processing: true,
                    serverSide: true,
                   
                    dataType: 'json',
                    ajax: '{{ route('admin.banner.list') }}',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'image',
                            name: 'image',
                          
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                    
                        
                        {
                            data: 'action',
                            name: 'action',
                            searchable:false,
                            orderable:false
                          
                        },
                       
                    ]
                });

            // });
        </script>
    @endsection

@extends('admin.layouts.admin_master')
@section('breadcumb')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit requirement </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit requirement </li>
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
                <div class="card card-primary">

                    <div class="pull-right" style="margin: 20px;">
                        <a class="btn btn-primary" href="{{ route('admin.requirement.index') }}"> Back </a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="AboutUsForm" action="{{ route('admin.requirement.update', $requirement->id) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                           

                            <div class="form-group">
                                <label for="requirementname">Name</label>
                                <input type="name" name="name" class="form-control" placeholder="Enter ..." required
                                    value="{{  $requirement->name }}">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label for="position">Number of Positions</label>
                                    <input type="number" name="position" class="form-control" placeholder="Enter ..."
                                        value="{{ $requirement->position }}"required>
                                </div>
                                <div class="col-6">
                                    <label for="experience">Experience</label>
                                    <input type="number" name="experience" class="form-control" placeholder="Enter ..."
                                        value="{{ $requirement->experience }}" required>
                                </div>

                            </div><br>
                            <div class="form-group">
                                <label for="experience">Description </label>
                                <textarea id="description" class="form-control" name="description" rows="3" placeholder="Enter ..."
                                    required> {{ $requirement->description }}</textarea>

                            </div>
                            <br>




                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection

    @section('script')
        <script>
            $('#description').summernote();
        </script>
    @endsection

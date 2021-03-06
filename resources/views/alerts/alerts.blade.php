
<div class="box-body">
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible" style="color: #a94442 !important; background-color: #f2dede !important; border-color: #ebccd1 !important;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
            {{ Session::get('error') }}
        </div>
    @endif
    @if(Session::has('info'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Info!</h4>
            {{ Session::get('info') }}
        </div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Warning!</h4>
            {{ Session::get('warning') }}
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible" style="color: #3c763d !important; background-color: #dff0d8 !important; border-color: #d6e9c6 !important;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{ Session::get('success') }}
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{ Session::get('status') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger" style="color: #a94442 !important; background-color: #f2dede !important; border-color: #ebccd1 !important;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul class="@if(count($errors) == 1) bullet_hide @endif">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>



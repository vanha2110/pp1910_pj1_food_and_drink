@extends('admin.layout.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create User</h1>
    <!-- <a href="template_admin/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>
<form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('admin.users.create')}}">
    @csrf
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Name</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
                <input type="text" name="name" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Email</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
                <input type="email" name="email" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Phone</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
                <input type="text" name="phone" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">Password</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
                <input type="password" name="password" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <button type="submit" class="btn btn-primary mt-2"> Create</button>
                    <button type="reset" class="btn btn-secondary mt-2">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
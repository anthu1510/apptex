@extends('layouts.dashboard')

@section('title', 'Password Update')

@section('pagecontent')
    <div class="row">
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    Password Change
                </div>
                <div class="card-body">
                    <form id="pass-update" action="{{ URL::to('dashboard/passwordupdate') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="old_pass">Enter Old Password</label>
                            <input type="hidden" name="u_id" id="u_id">
                            <input type="password" name="old_pass" id="old_pass" class="form-control validate[required]"
                                   placeholder="Enter Old Password">
                        </div>
                        <div class="form-group">
                            <label for="new_pass">Enter New Password</label>
                            <input type="password" name="new_pass" id="new_pass" class="form-control validate[required]"
                                   placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label for="con_pass">Enter New Password</label>
                            <input type="password" name="con_pass" id="con_pass" class="form-control validate[required,equals[new_pass]]"
                                   placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary pull-right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



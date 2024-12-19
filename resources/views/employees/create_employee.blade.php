-- @extends('layouts.master')
@section('title')
Create
@endsection

@section('body')
<div class="card">
    <div class="card-header">
        <strong>Normal</strong> Form
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="">
            <div class="form-group"><label for="first_name" class=" form-control-label">First Name</label><input type="text" id="first_name" name="first_name" placeholder="Enter First name.." class="form-control"><span class="help-block">Please enter your first name</span></div>
            <div class="form-group"><label for="last_name" class=" form-control-label">Last Name</label><input type="text" id="last_name" name="last_name" placeholder="Enter last name.." class="form-control"><span class="help-block">Please enter your last name</span></div>
            <div class="form-group"><label for="cin" class=" form-control-label">CIN</label><input type="text" id="cin" name="cin" placeholder="Enter cin.." class="form-control"><span class="help-block">Please enter your cin</span></div>
            <div class="form-group"><label for="situation" class=" form-control-label">Situation</label><input type="text" id="situation" name="situation" placeholder="Enter sitation.." class="form-control"><span class="help-block">Please enter your situation</span></div>
            <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" name="email" placeholder="Enter Email.." class="form-control"><span class="help-block">Please enter your email</span></div>
            <div class="form-group"><label for="contact" class=" form-control-label">Contact</label><input type="text" id="contact" name="contact" placeholder="Enter contact.." class="form-control"><span class="help-block">Please enter your password</span></div>
            <div class="form-group"><label for="departement_id" class=" form-control-label">Departement</label><input type="text" id="departement_id" name="departement_id" placeholder="Enter departement id.." class="form-control"><span class="help-block">Please enter your password</span></div>

        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
</div>
@endsection 
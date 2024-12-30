@extends('layouts.master')

@section('title')
Edit
@endsection

@section('body')
<div class="card">
    <div class="card-header">
        <strong>Normal</strong> Form
    </div>
    <div class="card-body card-block">
        <form action="{{ route('employee.update', $employee->id) }}" method="post" class="">
            @csrf
               @method('PUT')
            <div class="form-group">
                <label for="first_name" class="form-control-label">First Name</label>
                <input type="text" value="{{ $employee->first_name }}" id="first_name" name="first_name" placeholder="Enter First name.." class="form-control">
                <span class="help-block">Please enter your first name</span>
                @error('first_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name" class="form-control-label">Last Name</label>
                <input type="text" value="{{ $employee->last_name }}" id="last_name" name="last_name" placeholder="Enter last name.." class="form-control">
                <span class="help-block">Please enter your last name</span>
                  @error('last_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cin" class="form-control-label">CIN</label>
                <input type="text" value="{{ $employee->cin }}" id="cin" name="cin" placeholder="Enter CIN.." class="form-control">
                <span class="help-block">Please enter your CIN</span>
                  @error('cin')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="cnss" class="form-control-label">cnss</label>
                <input type="text" value="{{ $employee->cnss }}" id="cnss" name="cnss" placeholder="Enter cnss.." class="form-control">
                <span class="help-block">Please enter your cnss</span>
                  @error('cnss')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="stuation" class="form-control-label">Situation</label>
                <input type="text" value="{{ $employee->stuation }}" id="stuation" name="stuation" placeholder="Enter situation.." class="form-control">
                <span class="help-block">Please enter your situation</span>
                  @error('stuation')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="email" value="{{ $employee->email }}" id="email" name="email" placeholder="Enter Email.." class="form-control">
                <span class="help-block">Please enter your email</span>
                  @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="contact" class="form-control-label">Contact</label>
                <input type="text" value="{{ $employee->contact }}" id="contact" name="contact" placeholder="Enter contact.." class="form-control">
                <span class="help-block">Please enter your contact number</span>
                  @error('contact')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="departement_id" class="form-control-label">Department</label>
                <input type="text"  id="departement_id" name="departement_id" value="{{ $employee->departement_id }}" placeholder="Enter department ID. d." class="form-control">
                <span class="help-block">Please enter your department ID</span>
                @error('departement_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {{-- <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button> --}}
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

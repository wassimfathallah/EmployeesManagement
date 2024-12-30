@extends('layouts.master')

@section('title')
Create
@endsection

@section('body')
<div class="breadcrumbs">
    <!-- Breadcrumbs content -->
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">All employees</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-success center" data-toggle="modal" data-target="#employeeModal" data-url="{{ route('employee.show', $employee->id) }}">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary center"><i class="fa-solid fa-user-pen"></i></a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Employee Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Employee details will be loaded here -->
                hds
            </div>
        </div>
    </div>
</div>

<!-- JavaScript dependencies (e.g., jQuery, Bootstrap JS) -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Add the AJAX handling script here -->
<script>
    $(document).ready(function() {
        $('#employeeModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var url = button.data('url'); // Extract URL from data-* attributes

            var modal = $(this);
            modal.find('.modal-body').html('Loading...'); // Display loading message

            // AJAX request to fetch employee details
            $.ajax({
                url: url
                , method: 'GET'
                , success: function(response) {
                    modal.find('.modal-body').html(response);
                }
                , error: function(response) {
                    modal.find('.modal-body').html('An error occurred while loading the details.');
                }
            });
        });
    });

</script>
@endsection

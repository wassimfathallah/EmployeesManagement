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
                        @foreach ($allFilteredValues as $range => $values)
                     

                         @if (empty($values))
                        <p>No data found for the specified date.</p>
                        @else
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>Column A</th>
                                    <th>Column B</th>
                                    <th>Column C</th>
                                    <th>Column D</th>
                                    <th>Column E</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($values as $row)
                                <tr>
                                    <td>{{ $row[0] ?? '' }}</td>
                                    <td>{{ $row[1] ?? '' }}</td>
                                    <td>{{ $row[2] ?? '' }}</td>
                                    <td>{{ $row[3] ?? '' }}</td>
                                    <td>{{ $row[4] ?? '' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                        <h3>Sum du {{ $range_name=str_replace("!A:E"," ",$range) }} : {{ $allSums[$range] }}</h3>
                        @endif
                        @endforeach
                    </div>
                </div>
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

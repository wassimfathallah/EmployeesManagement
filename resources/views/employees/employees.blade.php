  @extends('layouts.master')

  @section('title')
  Create
  @endsection

  @section('body')


  <div class="breadcrumbs">
      {{-- <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>On Time Zahnvorsorge Employees</h1>
                    </div>
                </div>
            </div> --}}
      {{-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div> --}}
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
                                      {{-- <th>Situation</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Department</th> --}}
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($employees as $employee)
                                  <tr>
                                      <td>{{ $employee->first_name }}</td>
                                      <td>{{ $employee->last_name }}</td>
                                      <td>{{ $employee->email }}</td>
                                      {{-- <td>{{ $employee->departement_id }}</td> --}}
                                      {{-- <td>{{ $employee->email }}</td>
                                      <td>{{ $employee->contact }}</td>
                                      <td>{{ $employee->departement_id  }}</td> --}}
                                      <td>
                                        <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-success center" data-toggle="modal" data-target="#mediumModal"><i class="fa-light fa-circle-info">h</i> </a>
            
                                          <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary center">Edit </a>
                                          <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                      </td>
                                  </tr>

                                  @endforeach



                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>


          </div>
      </div><!-- .animated -->
  </div><!-- .content -->



  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>
                      There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra
                      and the mountain zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus
                      Dolichohippus. The latter resembles an ass, to which it is closely related, while the former two are more
                      horse-like. All three belong to the genus Equus, along with other living equids.
                  </p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Confirm</button>
              </div>
          </div>
      </div>
  </div>

  @endsection

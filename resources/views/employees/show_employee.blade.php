<div class=" col-md-12 col-sm-12 mb-3 mb-md-0 col-lg-12">
    <div class="card">
  
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1"> {{ $employee->last_name }}  {{ $employee->first_name }}</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i>  {{ $employee->email }}</div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <p><strong>First Name:</strong> {{ $employee->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $employee->last_name }}</p>
                <p><strong>CIN:</strong> {{ $employee->cin }}</p>
                <p><strong>CNSS:</strong> {{ $employee->cnss }}</p>
                <p><strong>Situation:</strong> {{ $employee->situation }}</p>
                <p><strong>Email:</strong> {{ $employee->email }}</p>
                <p><strong>Contact:</strong> {{ $employee->contact }}</p>
                <p><strong>Department ID:</strong> {{ $employee->departement_id }}</p>
                <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                <a href="#"><i class="fa fa-twitter pr-1"></i></a>
           
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary center"><i class="fa-solid fa-user-pen"></i></a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>
            </div>
        </div>
    </div>
</div>

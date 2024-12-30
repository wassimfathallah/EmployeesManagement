<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        //
        return view('employees.employees', compact('employees'));
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create_employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->validated());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    { 

 
        return view('employees.show_employee',compact('employee'));
   
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit_employee',compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        
        $employee->update($request->validated());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        employee::destroy($employee->id);

        return redirect()->route('employee.index')->with('success', 'Employee Deleted successfully.');

    }
}

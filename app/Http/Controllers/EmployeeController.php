<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employees;
    public function __construct(Employee $employee)
    {
        $this->employees = $employee;
    }

    public function index()
    {
        $employees = $this->employees->paginate(7);
        return view('employees.list', compact('employees'));
    }

    public function create()
    {
        return view('employees.add');
    }

    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->employee_group = $request->employee_group;
        $employee->name = $request->name;
        $employee->birthday = $request->birthday;
        $employee->sex = $request->sex;
        $employee->phone = $request->phone;
        $employee->cmnd = $request->cmnd;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();

        $message = 'thêm mới thành công!!!!';
        session()->flash('success', $message);

        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = $this->employees->findOrFail($id);

        return view('employees.edit', compact('employee'));
    }

    public function update()
    {

    }

    public function delete($id)
    {
        $employee = $this->employees->findOrFail($id);
        $employee->delete();

        return back();
    }

    public function search()
    {

    }
}

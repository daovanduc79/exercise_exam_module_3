<?php

namespace App\Http\Controllers;

use App\Employee;
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
        $employees = $this->employees->all();
        return view('employees.list', compact('employees'));
    }

    public function create()
    {
        return view('employees.add');
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function search()
    {

    }
}

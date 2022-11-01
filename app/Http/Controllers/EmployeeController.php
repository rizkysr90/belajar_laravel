<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        return view('view_employee');
    }
    public function delete() {
        return view('delete_employee');
    }
    public function edit() {
        return view('edit_employee');
    }
}

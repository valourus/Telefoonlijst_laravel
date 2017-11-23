<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class PagesController extends Controller {

    private const AO_DEPARTMENT = 1;
    private const IB_DEPARTMENT = 2;

    public function index() {
        return view("pages.welcome");
    }

    public function teamIB() {
        $departmentIB = Department::find(self::IB_DEPARTMENT);
        return view("pages.department", [
            "department" => $departmentIB,
        ]);
    }

    public function teamAO() {
        $departmentAO = Department::find(self::AO_DEPARTMENT);
        return view("pages.department", [
            "department" => $departmentAO,
        ]);
    }
}

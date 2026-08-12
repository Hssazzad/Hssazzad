<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function index()
    {
        return "Release Index";
    }

    public function getPatientData($patientId)
    {
        return "Patient Data for Release: " . $patientId;
    }

    public function store(Request $request)
    {
        return "Store Release";
    }
}

<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DischargeController extends Controller
{
    public function index()
    {
        return "Discharge Index";
    }

    public function getPatientData($patientId)
    {
        return "Patient Data for Discharge: " . $patientId;
    }

    public function store(Request $request)
    {
        return "Store Discharge";
    }
}

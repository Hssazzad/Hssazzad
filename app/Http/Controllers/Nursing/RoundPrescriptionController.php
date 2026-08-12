<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoundPrescriptionController extends Controller
{
    public function index()
    {
        return "RoundPrescription Index";
    }

    public function getData()
    {
        return "RoundPrescription Data";
    }

    public function getPatientAdmissionData($patientId)
    {
        return "Patient Admission Data for " . $patientId;
    }

    public function store(Request $request)
    {
        return "Store RoundPrescription";
    }
}

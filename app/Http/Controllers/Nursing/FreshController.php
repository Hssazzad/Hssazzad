<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreshController extends Controller
{
    public function index()
    {
        return "Fresh Index";
    }

    public function storePrescription(Request $request)
    {
        return "Store Fresh Prescription";
    }

    public function getPatientAdmissionData($patientId)
    {
        return "Patient Admission Data for " . $patientId;
    }

    public function getPostOperationMedicines()
    {
        return "PostOperation Medicines List";
    }

    public function getTemplateData($id)
    {
        return "Fresh Template Data for " . $id;
    }
}

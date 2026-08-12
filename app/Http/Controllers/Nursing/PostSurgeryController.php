<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostSurgeryController extends Controller
{
    public function index()
    {
        return "PostSurgery Index";
    }

    public function getPatientAdmissionData($patientId)
    {
        return "Patient Admission Data for " . $patientId;
    }

    public function storePrescription(Request $request)
    {
        return "Store PostSurgery Prescription";
    }

    public function applyTemplate(Request $request)
    {
        return "Apply PostSurgery Template";
    }

    public function getTemplateData($id)
    {
        return "PostSurgery Template Data for " . $id;
    }

    public function getPreOperationMedicines()
    {
        return "PreOperation Medicines List";
    }
}

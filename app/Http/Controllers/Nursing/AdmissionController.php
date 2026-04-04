<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    public function index()
    {
        return "Admission Index";
    }

    public function selectPatient()
    {
        return "Select Patient";
    }

    public function create()
    {
        return "Create Admission";
    }

    public function store(Request $request)
    {
        return "Store Admission (AdmissionController)";
    }

    public function applyTemplate(Request $request)
    {
        return "Apply Template (AdmissionController)";
    }

    public function template()
    {
        return "Template Management";
    }

    public function getTemplateData($id = null)
    {
        return "Template Data for " . $id;
    }

    public function edit($id)
    {
        return "Edit Prescription " . $id;
    }

    public function detail($id)
    {
        return "Admission Detail for " . $id;
    }
}

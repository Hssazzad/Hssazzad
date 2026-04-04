<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NursingController extends Controller
{
    public function create()
    {
        if (view()->exists('nursing.create')) {
            return view('nursing.create');
        }
    }

    public function Onaddmission()
    {
        if (view()->exists('nursing.onaddmission')) {
            return view('nursing.onaddmission');
        }
    }

    public function index()
    {
        return "Welcome to Nursing List Page";
    }

    public function Fresh()
    {
        if (view()->exists('nursing.fresh')) {
            return view('nursing.fresh');
        }
    }

    public function PostSurgery()
    {
        if (view()->exists('nursing.postsurgery')) {
            return view('nursing.postsurgery');
        }
    }

    public function Presurgery()
    {
        if (view()->exists('nursing.presurgery')) {
            return view('nursing.presurgery');
        }
    }

    // ✅ NEW: Round Prescription
    public function Roundprescription()
    {
        if (view()->exists('nursing.roundprescription')) {
            return view('nursing.roundprescription');
        }
    }

    // ✅ NEW: Discharge
    public function Discharge()
    {
        if (view()->exists('nursing.discharge')) {
            return view('nursing.discharge');
        }
    }

    // ✅ NEW: Release Patients
    public function Releasepatients()
    {
        if (view()->exists('nursing.releasepatients')) {
            return view('nursing.releasepatients');
        }
    }

    // Methods still needed by routes:
    public function onAdmission()
    {
        return "On Admission (NursingController)";
    }

    public function storeAdmission(Request $request)
    {
        return "Store Admission (NursingController)";
    }

    public function applyTemplate(Request $request)
    {
        return "Apply Template (NursingController)";
    }

    public function getAdmissionDetail($id)
    {
        return "Admission Detail (NursingController) for " . $id;
    }
}

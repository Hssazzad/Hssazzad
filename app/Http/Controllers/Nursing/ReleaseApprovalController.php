<?php

namespace App\Http\Controllers\Nursing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReleaseApprovalController extends Controller
{
    public function index()
    {
        return "ReleaseApproval Index";
    }

    public function approve(Request $request)
    {
        return "Approve Release";
    }

    public function reject(Request $request)
    {
        return "Reject Release";
    }
}

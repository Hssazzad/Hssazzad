<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function getTemplateData($title)
    {
        return "Template Data for title: " . $title;
    }

    public function getTemplateMedicines($id)
    {
        return "Template Medicines for ID: " . $id;
    }
}

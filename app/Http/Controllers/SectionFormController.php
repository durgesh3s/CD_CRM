<?php

namespace App\Http\Controllers;

use App\Models\SectionForm;
use Illuminate\Http\Request;

class SectionFormController extends Controller
{
    public function sectionFormData(Request $request)
    {
        $data = $request->all();

        $record = SectionForm::create($data);

        return response()->json([
            'message' => 'Data saved successfully',
            'data' => $record,
        ], 201);
    }
}

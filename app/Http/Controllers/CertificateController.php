<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    public function verifyCertificate(Request $request)
    {
        $validated = $request->validate([
            'certificate_number' => 'required|string'
        ]);

        $certificateNumber = $validated['certificate_number'];

        $filePath = storage_path('app/show/verification.txt');
        
        if (!File::exists($filePath)) {
            return response()->json(['status' => 'error', 'message' => 'Verification file not found.']);
        }

        $fileContents = File::get($filePath);
        
        if (strpos($fileContents, $certificateNumber) !== false) {
            return response()->json(['status' => 'success', 'message' => 'Certificate is valid!']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Certificate is invalid.']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $pdf = Pdf::loadView('pdf.default', [

        ])
            ->setPaper('a4', 'portrait');

        $pdf->setOption(['isRemoteEnabled' => true]);
        $pdf->setWarnings(true);

        return $pdf->download('default.pdf');
    }

    public function test(Request $request)
    {
        return view('pdf.default', [

        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(Job $job)
    {
//        $data = ['title' => 'Welcome to Laravel PDF Generation'];

        // Load the view and pass the data to it
        $pdf = PDF::loadView('jobs.pdf_view', [
            'job' => $job
        ]);

        // Return the generated PDF as a download
        return $pdf->download('example.pdf');

//        return view('jobs.pdf_view', [
//            'job' => $job
//        ]);
    }
}

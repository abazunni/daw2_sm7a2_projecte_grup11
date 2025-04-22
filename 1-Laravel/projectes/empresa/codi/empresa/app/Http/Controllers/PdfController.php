<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use App\Models\Professor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    /**
     * Generate PDF for all departments.
     */
    public function departamentsList()
    {
        $departaments = Departament::all();
        $pdf = PDF::loadView('pdf.departaments', compact('departaments'));
        return $pdf->download('departaments.pdf');
    }
    
    /**
     * Generate PDF for a specific department.
     */
    public function departamentDetail(Departament $departament)
    {
        $departament->load('professors');
        $pdf = PDF::loadView('pdf.departament_detail', compact('departament'));
        return $pdf->download('departament_' . $departament->identificador . '.pdf');
    }
    
    /**
     * Generate PDF for all professors.
     */
    public function professorsList()
    {
        // Eager load the departament relationship
        $professors = Professor::with('departament')->get();
        $pdf = PDF::loadView('pdf.professors', compact('professors'));
        return $pdf->download('professors.pdf');
    }
    
    /**
     * Generate PDF for a specific professor.
     */
    public function professorDetail(Professor $professor)
    {
        // Eager load the departament relationship
        $professor->load('departament');
        $pdf = PDF::loadView('pdf.professor_detail', compact('professor'));
        return $pdf->download('professor_' . $professor->identificador . '.pdf');
    }
}

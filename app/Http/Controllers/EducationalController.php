<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalController 
{
    public function showEducation()
    {
        $educationalBackground = [
            'Primary School' => 'Sta. Maria East Central School, Poblacion Sur, Sta. Maria, Ilocos Sur',
            'High School' => 'Oanari National High School, Oaqui #4, Luna, La Union',
            'College' => 'Ilocos Sur Polytechnic State College, Tagudin Campus'
        ];

        return view('pages.page2', compact('educationalBackground'));
    }
}

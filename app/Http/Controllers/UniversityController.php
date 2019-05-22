<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function saveUniversity(Request $request){

        $university = UniversityModel::create(
            [
                'image' => $request->image,
                'university_name' => $request->university_name,
                'location' => $request->location,
                'phone_numebr' => $request->phone_number,
                'email' => $request->email,
                'wesite' => $request->website,
                'description' => $request->description,
            ]
            );
            return 'Successful'

    }
}

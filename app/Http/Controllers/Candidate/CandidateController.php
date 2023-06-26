<?php

namespace App\Http\Controllers\Candidate;

use Auth;
use Illuminate\Http\Request;
use App\Models\CandidateEducation;
use App\Http\Controllers\Controller;
use App\Models\CandidateApplication;

class CandidateController extends Controller
{
    public function dashboard()
    {
        return view('candidate.dashboard');
    }

    public function education()
    {
        $educations = CandidateEducation::where('candidate_id',Auth::guard('candidate')->user()->id)->orderBy('id','desc')->get();
        return view('candidate.education', compact('educations'));
    }

    public function education_create()
    {
        return view('candidate.education_create');
    }

    public function education_store(Request $request)
    {
        $request->validate([
            'level' => 'required',
            'institute' => 'required',
            'degree' => 'required',
            'passing_year' => 'required'
        ]);

        $obj = new CandidateEducation();
        $obj->candidate_id = Auth::guard('candidate')->user()->id;
        $obj->level = $request->level;
        $obj->institute = $request->institute;
        $obj->degree = $request->degree;
        $obj->passing_year = $request->passing_year;
        $obj->save();

        return redirect()->route('candidate_education')->with('success', 'Education is added successfully.');
    }

    public function education_edit($id)
    {
        $education_single = CandidateEducation::where('id',$id)->first();

        return view('candidate.education_edit', compact('education_single'));
    }

    public function education_update(Request $request, $id)
    {
        $obj = CandidateEducation::where('id',$id)->first();

        $request->validate([
            'level' => 'required',
            'institute' => 'required',
            'degree' => 'required',
            'passing_year' => 'required'
        ]);

        $obj->level = $request->level;
        $obj->institute = $request->institute;
        $obj->degree = $request->degree;
        $obj->passing_year = $request->passing_year;
        $obj->update();

        return redirect()->route('candidate_education')->with('success', 'Education is updated successfully.');
    }

    public function education_delete($id)
    {
        CandidateEducation::where('id',$id)->delete();
        return redirect()->route('candidate_education')->with('success', 'Education is deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classs;
use App\Models\section;
use App\Models\Shift;
use Illuminate\Support\Facades\DB;

class foreignKeyController extends Controller
{
    //index page
    public function index()
    {

        $classs = Classs::all();
        return view('class.class_add', compact('classs'));
    } //end method


    //Add class
    public function addClass(Request $request)
    {

        //data insert process one

        // $classs = new Classs();
        // $classs->class_name=$request->class_name;
        // $classs->save();


        //Data insert process tow
        classs::insert([
            'class_name' => $request->class_name,

        ]);
        return redirect()->back()->with('sms', 'Class added successfully');
    } //end method

    //edit class
    public function editClass($id)
    {

        $classs = classs::find($id);
        return view('class.edit_class', compact('classs'));
    } //end method

    //update class
    public function updateClass(Request $request)
    {

        $classs = classs::find($request->id);
        $classs->class_name = $request->class_name;
        $classs->save();
        return redirect('/')->with('sms', 'student info update successfully');
    } //end method

    //delete class
    public function deleteClass($id)
    {

        $classs = classs::find($id);
        $classs->delete();
        return redirect('/')->with('message', 'class delete successfully');
    } //delete method


    //Add section
    public function addSection()
    {

        $classes = classs::all();
        $sections = section::all();
        return view('section.add_section', compact('classes', 'sections'));
    } //end method

    //store section
    public function storeSection(Request $request)
    {


        $section = new section();
        $section->class_id = $request->class_id;
        $section->section_name = $request->section_name;
        $section->save();

        return redirect()->back()->with('sms', 'Section added successfully');
    } //end method

    //edit section
    public function editSection($id)
    {

        $section = section::find($id);
        $classes = classs::all();

        return view('section.edit_section', compact('section', 'classes'));
    } //end method


    //update section
    public function updateSection(Request $request)
    {
        $section = section::find($request->id);

        $section->section_name = $request->section_name;
        $section->class_id = $request->class_id;

        $section->save();

        return redirect()->route('add.section')->with('message', 'Section updated successfully');
    } //end method

    //delete section
    public function deleteSection($id){

        $section = section::find($id);
        $section->delete();
        return redirect('/add/section')->with('message', 'class delete successfully');

    }//end method


    //add shift
    public function shiftAdd()
    {
        $classes = classs::all();
        $sections = section::all();
        return view('shift.shift_add', compact('classes', 'sections'));
    } //end class


    //shift store
    public function shiftStore(Request $request)
    {
        $shift = new Shift();
        $shift->shift_name = $request->shift_name;
        $shift->class_id = $request->class_id;
        $shift->section_id = $request->section_id;
        $shift->save();
        return redirect()->back()->with('sms', 'Shift added successfully');
    } //end method


    //shift view
    public function shiftView()
    {


        // $shifts = DB::table('shifts')
        // ->join('classses', 'classses.id', '=', 'shifts.class_id')
        // ->join('sections', 'sections.id', '=', 'shifts.section_id')

        // ->select('shifts.*', 'classses.class_name', 'sections.section_name')
        // ->get();

         $shifts = Shift::all();
         $classses = classs::all();
         $sections = section::all();


        return view('shift.shift_view', compact('shifts','classses','sections'));
    } //end method

    //shift edit
    public function shiftEdit($id){

        $shift = Shift::find($id);
        $classses = classs::all();
        $sections = section::all();
        return view('shift.edit_shift', compact('shift', 'classses', 'sections'));


    }//end method


    //update shift
    public function shiftUpdate(Request $request){
        $shift = Shift::find($request->shift_id);

        $shift->shift_name = $request->shift_name;
        $shift->class_id = $request->class_id;
        $shift->section_id = $request->section_id;
        $shift->save();
        return redirect('/view/shift')->with('sms', 'Shift updated successfully');


    }//end method
    public function shiftDelete($id){

        $shift= Shift::find($id);
        $shift->delete();
        return redirect('/view/shift')->with('sms', 'Shift updated successfully');
    }//end method




}//end class

<?php

namespace App\Http\Controllers;

use App\Models\JobDescription;
use Illuminate\Http\Request;

class JobDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_descriptions = JobDescription::all();
        return view("pages.job_description", compact("job_descriptions"))->with("home", "home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "user_id" => "required",
            "attribute.*" => "required",
            "value.*" => "required"
        ]);

        $attribute_collection = [];
        $attributes = $request->input("attribute");
        $values = $request->input("value");
        foreach ($attributes as $key => $value) {
            array_push($attribute_collection, ["id" => $key + 1, "attribute" => $value, "value" => $values[$key]]);
        }
        $job_description  = new JobDescription();

        $job_description->user_id = $request->input("user_id");
        $job_description->attribute_collection = json_encode($attribute_collection);
        $job_description->save();
        return  redirect("/job_description")->with("success", "Content Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job_descriptions = JobDescription::all();
        $user_datas = JobDescription::findOrFail($id);

        return view("sections.job_description_show", compact('job_descriptions', "user_datas"))->with("update_page", "update_page");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_descriptions = JobDescription::all();
        $user_datas = JobDescription::findOrFail($id);

        return view("pages.job_description_update", compact('job_descriptions', "user_datas"))->with("update_page", "update_page");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job_description  = JobDescription::findOrFail($id);
        $request->validate([
            "user_id" => "required",
            "attribute.*" => "required",
            "value.*" => "required"
        ]);

        $attribute_collection = [];
        $attributes = $request->input("attribute");
        $values = $request->input("value");
        foreach ($attributes as $key => $value) {
            array_push($attribute_collection, ["id" => $key + 1, "attribute" => $value, "value" => $values[$key]]);
        }
        $job_description->user_id = $request->input("user_id");
        $job_description->attribute_collection = json_encode($attribute_collection);
        $job_description->save();
        return  redirect("/job_description")->with("success", "Content Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = JobDescription::findOrFail($id);
        $user->delete();
        return redirect("/job_description")->with("success", "User Data Remove Successfully");
    }
}

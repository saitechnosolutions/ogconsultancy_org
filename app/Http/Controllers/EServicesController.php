<?php

namespace App\Http\Controllers;

use App\Models\JobDescription;
use App\Models\OnlineStatus;
use Illuminate\Http\Request;

class EServicesController extends Controller
{

    public function index()
    {
        return view("pages.e_services")->with("services", "services");
    }
    public function onlineStatus($id)
    {
        $onlineStatusDatas = OnlineStatus::query()->where("user_id", "=", $id)->get();

        if ($onlineStatusDatas->count()) {
            return view("sections.e_services_description", compact("onlineStatusDatas"));
        } else {
            return view("sections.e_services_error");
        }
    }


    public function jobDescription($id)
    {
        $jobDescriptionDatas = JobDescription::query()->where("user_id", "=", $id)->get();

        if ($jobDescriptionDatas->count()) {
            $attributeCollection =   json_decode($jobDescriptionDatas[0]["attribute_collection"]);
            return view("sections.e_services_description", compact("attributeCollection"))->with("jobDescription", "job_description");
        } else {
            return view("sections.e_services_error");
        }
    }
}

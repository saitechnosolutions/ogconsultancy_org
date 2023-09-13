<?php

namespace App\Http\Controllers;

use App\Models\OnlineStatus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use OCILob;

class TestController extends Controller
{
    public function  index(Request $request, $id)
    {


        $onlineStatusDatas = OnlineStatus::query()->where("user_id", "=", $id)->get();

        if ($onlineStatusDatas->count()) {
            $attributeCollection =   json_decode($onlineStatusDatas[0]["attribute_collection"]);
            return view("sections.e_services_description", compact("attributeCollection"));
        } else {
            return view("sections.e_services_error");
        }
    }
}

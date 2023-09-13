<?php

namespace App\Http\Controllers;

use App\Models\OnlineStatus;
use Illuminate\Http\Request;

class OnlineStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $online_statuses = OnlineStatus::all();
        return view("pages.online_status", compact("online_statuses"))->with("home", "home");
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
            "name" => "required",
            "description" => "required"
        ]);
        OnlineStatus::create($request->input());
        return  redirect("/online_status")->with("success", "Content Added Successfully");
    }

    public function show($id)
    {

        $online_statuses = OnlineStatus::all();
        $user_datas = OnlineStatus::findOrFail($id);

        return view("sections.online_status_show_section", compact('online_statuses', "user_datas"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $online_statuses = OnlineStatus::all();
        $user_datas = OnlineStatus::findOrFail($id);

        return view("pages.online_status_update", compact('online_statuses', "user_datas"));
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
        $onlineStatus  = OnlineStatus::findOrFail($id);
        $request->validate([
            "user_id" => "required",
            "name" => "required",
            "description" => "required"
        ]);

        $onlineStatus->update($request->input());

        return  redirect("/online_status")->with("success", "Content Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = OnlineStatus::findOrFail($id);
        $user->delete();
        return redirect("/online_status")->with("success", "User Data Remove Successfully");
    }
}

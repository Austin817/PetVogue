<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activityData = Activity::get();
        return view('admin.activity.index',compact('activityData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activityData = $request->all();

        if($request->hasFile('img')){
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('activity',$file);
            $activityData['img']= Storage::disk('myfile')->url($path);
        }

        activity::create($activityData);
        return redirect('/admin/activity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('admin.activity.edit',compact('activity'));
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
         //從資料庫找到資料
         $activity= Activity::find($id);
         //取出表單所有內容
         $activityData= $request->all();
         if ($request->hasFile('img')) {
             //刪除舊圖片
             File::delete(public_path().$activity->img);
             //存儲新圖片
             $file=$request->file('img');
             $path=Storage::disk('myfile')->putFile('activity',$file);
             $activityData['img']= Storage::disk('myfile')->url($path);
         }
         //更新資料庫
         $activity->update($activityData);
         return redirect('/admin/activity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);
        File::delete(public_path().$activity->img);
        $activity->delete();
        return redirect('/admin/activity');
    }
}

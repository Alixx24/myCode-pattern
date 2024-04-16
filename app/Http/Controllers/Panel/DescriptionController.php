<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\DescriptionRequest;
use App\Models\Admin\Description;
use Illuminate\Http\Request;
use Symfony\Component\Console\Descriptor\Descriptor;

class DescriptionController extends Controller
{
    public function index()
    {
        $descriptions = Description::orderBy('created_at', 'desc')->simplePaginate(15);
        // dd($menus[2]->children);
        return view('admin.panel.description.index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Description::$positions;
        return view('admin.panel.description.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DescriptionRequest $request)
    {
        $inputs = $request->all();
        $description = Description::create($inputs);
        return redirect()->route('admin.content.description.index')->with('swal-success', 'منوی  جدید شما با موفقیت ثبت شد');
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
    public function edit(Description $description)
    {
        // $parent_menus = Menu::where('parent_id', null)->get()->except($menu->id);
        return view('admin.panel.menu.edit', compact('menu', 'parent_menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Description $description)
    {
        $inputs = $request->all();
        $description->update($inputs);
        return redirect()->route('admin.content.menu.index')->with('swal-success', 'منوی  شما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Description $description)
    {
        $result = $description->delete();
        return redirect()->route('admin.content.description.index')->with('swal-success', ' منو شما با موفقیت حذف شد');
    }


    public function status(Description $description)
    {

        $description->status = $description->status == 0 ? 1 : 0;
        $result = $description->save();
        if ($result) {
            if ($description->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}

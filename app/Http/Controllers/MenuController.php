<?php

namespace App\Http\Controllers;

use App\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'package' => 'required',
            'goals' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if(!file_exists('uploads/menu'))
            {
                mkdir('uploads/menu', 0777 , true);
            }
            $image->move('uploads/menu',$imagename);
        }else {
            $imagename = 'default.png';
        }
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->package = $request->package;
        $menu->goals = $request->goals;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->image = $imagename;
        $menu->save();
        return redirect()->route('menu.index');
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
        $menu = Menu::find($id);
        return view('admin.menu.edit',compact('menu'));

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
        $this->validate($request,[
            'name' => 'required',
            'package' => 'required',
            'goals' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $menu =Menu::find($id);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if(!file_exists('uploads/menu'))
            {
                mkdir('uploads/menu', 0777 , true);
            }
            $image->move('uploads/menu',$imagename);
        }else {
            $imagename = $menu->image;
        }
        $menu->name = $request->name;
        $menu->package = $request->package;
        $menu->goals = $request->goals;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->image = $imagename;
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if (file_exists('uploads/menu/'.$menu->image))
        {
            unlink('uploads/menu/'.$menu->image);
        }
       
        $menu->delete();
        return redirect()->back();
    }
}

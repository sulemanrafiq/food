<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

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
       // dd($menus);

        return view('menus.index',compact('menus'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//            return view('menus.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       $created = Menu::create(
            [
                'item_name' => $request->item_name,
                'type' => $request->type,
                'price' => $request->price,
                'description' => $request->description
            ]);

       if($created){
           return redirect()->route('menus.index')->with('message','Created Successfully');
       }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $menus = Menu::find($id);
        return view('menus.edit',compact('menus'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {

        //
        $menus=Menu::find($id);
        $menus -> item_name = $request->input('item_name');
        $menus -> type = $request->input('type');
        $menus -> price = $request->input('price');
        $menus -> description = $request->input('description');
        $menus->save();


        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $menus=Menu::find($id);
        $menus->delete();
        return redirect()->route('menus.index');
    }
    public function display()
    {
        $menus = Menu::all();
        // dd($menus);

        return view('menus.display',compact('menus'));
    }
}

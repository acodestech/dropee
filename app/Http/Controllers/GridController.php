<?php

namespace App\Http\Controllers;

use App\Models\Colour;
use App\Models\Grid;
use App\Models\Style;
use Illuminate\Http\Request;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.main');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $currentId)
    {
        $gridOld = Grid::where('id', $currentId)->first();
        $gridNew = Grid::where('id', $request->grid_id)->first();

        if ($currentId != $request->grid_id) {
            $gridNew->title = $gridOld->title;

            $gridOld->title = '';
            $gridOld->style_id = 1;
            $gridOld->colour_id = 1;
            $gridOld->save();
        }

        $gridNew->style_id = $request->grid_style_id;
        $gridNew->colour_id = $request->grid_colour_id;

        $result = $gridNew->save();

        $status = $result ? 1 : 0;
        $message = $result ? __('Grid has been updated') : __('Failed to update grid');
        $icon = $result ? 'primary' : 'danger';

        return response()->json([
            'status' => $status,
            'message' => $message,
            'icon' => $icon
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDisplay(Request $request)
    {
        if ($request->ajax()) {
            $results = Grid::with(['style', 'colour'])->get();
            $grids = [];
            foreach ($results as $result) {
                $grids[$result['row']][$result['column']] = $result;
            }

            $view = view('home/ajax')->with(['type' => 'retrieve-display', 'grids' => $grids])->render();
            return $view;
        }
    }

    public function getForm(Request $request)
    {
        if ($request->ajax()) {
            $results = Grid::all()->toArray();
            $grids = [];
            foreach ($results as $result) {
                $grids[$result['row']][$result['column']] = $result;
            }

            $styles = Style::all()->toArray();
            $grid = Grid::where('id', $request->id)->first();
            $gridId = $grid->id;
            $gridStyleId = $grid->style_id;

            $colours = Colour::all()->toArray();
            $gridColourId = $grid->colour_id;

            $view = view('home/ajax')->with(['type' => 'retrieve-form', 'grids' => $grids, 'title' => $request->title, 'gridId' => $gridId, 'styles' => $styles, 'gridStyleId' => $gridStyleId, 'colours' => $colours, 'gridColourId' => $gridColourId])->render();
            return $view;
        }
    }
}

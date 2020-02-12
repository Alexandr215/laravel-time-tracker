<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects\Projects;
use DataTables;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Projects::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('frontend.index',compact('request'));
    }
    public function store(Request $request)
    {
        Projects::updateOrCreate(['id' => $request->projects_id],
            ['name' => $request->name, 'content' => $request->detail]);

        return response()->json(['success'=>'Product saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Projects::find($id);
        return response()->json($projects);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Projects::find($id)->delete();

        return response()->json(['success'=>'Project deleted successfully.']);
    }
}

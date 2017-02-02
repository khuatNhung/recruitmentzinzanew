<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruitment;
use App\Http\Requests\RecruitmentRequest;
use Carbon;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // echo "Dây là index";
        $items = Recruitment::orderBy('id','DESC')->paginate(5);
        return view('backend.recruitment.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.recruitment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $deadline=date_create($request->deadline);
        // Carbon\Carbon::parse($request->deadline)->format('d/m/Y');
        $this->validate($request, [
            'title' => 'required',
            'deadline' => 'after:tomorrow',
        ]);
        // $weeks = Request::text('deadline');
        // $deadline=date_create($request->deadline)->format('Y-m-d h:i:s');
        // $request->deadline=$deadline;
        // return print_r($request->all());
        // $recruit= new Array();
        // foreach ($request as $key => $value) {
        //     $recruit->$key=$value;
        // }
        Recruitment::create($request->all());
        return redirect()->route('recruitment.index')
                        ->with('success','Bạn đã thêm mới thành công tin tuyển dụng');
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
        $item = Recruitment::find($id);
        return view('backend.recruitment.show',compact('item'));
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
        $item = Item::find($id);
        return view('backend.recruitment.edit',compact('item'));
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
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        Recruitment::find($id)->update($request->all());
        return redirect()->route('backend.recruitment.index')
                        ->with('success','Item updated successfully');
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
        Recruitment::find($id)->delete();
        return redirect()->route('recruitment.index')
                        ->with('success','Chúc mừng bạn, bạn đã xóa thành công!');
    }
}

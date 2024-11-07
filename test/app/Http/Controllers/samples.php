<?php

namespace App\Http\Controllers;

use App\sampless;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SoftDeletes;
class samples extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
		//$listings=sampless::withTrashed()->get();   //  show deleted and non deleted both 
		//$listings=sampless::onlyTrashed()->get();   //  show deleted only 
		$listings=sampless::get();   //  show non deleted records
		//echo '<pre>'; print_r($listings); die;
		
		return view('listing',['listings'=>$listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
		return view('add-sample');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$request->validate(['name'=>'required','state'=>'required','zip'=>'required','amount'=>'required','qty'=>'required','item'=>'required']);
		
        $data=['name'=>$request->name,'state'=>$request->state,'zip'=>$request->zip,'amount'=>$request->amount,'qty'=>$request->qty,'item'=>$request->item];
		
		sampless::insert($data);
		return redirect('/')->with('success','Created successfully');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function show(sample $sample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
       
		$sample=sampless::find($id);	
		return view('edit-sample',['sample'=>$sample]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		$request->validate(['name'=>'required','state'=>'required','zip'=>'required','amount'=>'required','qty'=>'required','item'=>'required']);
		
       $data=['name'=>$request->name,'state'=>$request->state,'zip'=>$request->zip,'amount'=>$request->amount,'qty'=>$request->qty,'item'=>$request->item];
       sampless::where('id',$request->id)->update($data);
	   return redirect('/')->with('success','Updated successfully');
	  
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
      sampless::find($id)->delete();
	  //DB::table('sampless')->where('id',$id)->delete();		
	  return redirect('/')->with('success','Deleted successfully');
    }
}

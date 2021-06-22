<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Magicnote;
use Illuminate\Http\Request;



class MagicnoteController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create($id)
    {
        return view('create')->with('noteArr',Magicnote::findorfail($id));
    }

    
    public function store(Request $request)
    {
        $res = new Magicnote;
        $res->title=$request->input('title');
        $res->note=$request->input('note');
        $res->save();
        Alert::success('Congratulations!', 'Note Added Sucessfully');

        return redirect('show');
    }

    
    public function show(Magicnote $magicnote)
    {
        return view('show')->with('noteArr', Magicnote::paginate(8));
    }

    
    public function edit(Magicnote $magicnote)
    {
        //
    }

    
    public function update(Request $request, Magicnote $magicnote)
    {
        $res = Magicnote::find($request->id);
        $res->title = $request->input('title');
        $res->note = $request->input('note');
        $res->save();
        Alert::success('Congratulations!', 'Note Updated Sucessfully');
        return redirect('show');
    }


    public function destroy(Magicnote $magicnote, $id)
    {
        Magicnote::destroy(array('id',$id));
        Alert::success('Congratulations!', 'Note Deleted Sucessfully');
        return redirect('show');
        
    }
}

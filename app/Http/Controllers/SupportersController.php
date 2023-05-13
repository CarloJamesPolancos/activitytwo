<?php

namespace App\Http\Controllers;
use App\Models\Supporters; 
use Illuminate\Http\Request;

class SupportersController extends Controller
{
    
    public function index()
    {
        $supporters = Supporters::all();
      return view ('supporters.index')->with('supporters', $supporters);
    }

    
    public function create()
    {
        return view('supporters.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        supporters::create($input);
        return redirect('supporters')->with('flash_message', 'Supporter Added!');
    }

    
    public function show($id)
    {
        $supporters = Supporters::find($id);
        return view('supporters.show')->with('supporters', $supporters);
    }

    
    public function edit($id)
    {
        $supporters = Supporters::find($id);
        return view('supporters.edit')->with('supporters', $supporters);
    }

    
    public function update(Request $request, $id)
    {
        $supporters = Supporters::find($id);
        $input = $request->all();
        $supporters->update($input);
        return redirect('supporters')->with('flash_message', 'Supporter Updated!');
    }

    
    public function destroy($id)
    {
        Supporters::destroy($id);
        return redirect('supporters')->with('flash_message', 'Supporter Deleted!');  
    }
}

<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $comics = Comic::all();
         $comics  = Comic::orderBy('id','desc')->paginate(6);
        //dd($comics);
        //passo il dato alla vista in maniera compatta
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->slug = Str::slug($data['title'], '-');
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // // $new_comic->sale_date = $comic_item['sale_date'];
        //  $new_comic->type = $data['type'];

         //dd($new_comic);
         // dd('====================');
        $data['slug'] =  Str::slug($data['title'], '-');
        $new_comic->fill($data);
        //dd($new_comic); 
        $new_comic->save();
        return redirect()->route('comics.show',$new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $comic = Comic::find($id);
        // dd($comic);
        if($comic){
            return view('comics.show', compact('comic'));
        }
        abort(404, 'produt not found in database');
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        // dd($comic);
        if ($comic) {
          return view('comics.edit', compact('comic'));
        }
        abort(404, 'produt not found in database');
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
    //dd($data);
        $data['slug'] =  Str::slug($data['title'], '-');
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', $comic->title);
    }
}

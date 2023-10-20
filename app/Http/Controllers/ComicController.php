<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        // $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic)
        ->with('message_type', 'success')
        ->with('message','comic created with success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($comic);
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
        $data = $this->validation($request->all(), $comic->id);
        $comic->update($data);

        return redirect()->route('comics.show', $comic)
        ->with('message_type', 'success')
        ->with('message','comic updated with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')
        ->with('message_type', 'danger')
        ->with('message','comic eleminated with success');
    }


    private function validation($data) {
        $validator = Validator::make(
          $data,
          [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|string',
            'price' => 'required|decimal:2',
            'series' => 'required|string',
            'sale_date'=> 'required|date',
            'type' => 'required|string',
          ],
          [
            'title.required' => 'The title is required',
            'title.string' => 'The title must be a string',

            'description.string' => 'The description must be a string',
            
            'thumb.string' => 'The thumb must be a url',

            'price.required' => 'The price is required',
            'price.integer' => 'The price must be a number',

            'series.required' => 'The series is required',
            'series.string' => 'The series must be a string',

            'sale_date.required' => 'The sale date is required',
            'sale_date.date' => 'The sale date must be a date',

            'type.required' => 'The type is required',
            'type.string' => 'The type must be a string',
          ]
        )->validate();
      
        return $validator;
      }
}
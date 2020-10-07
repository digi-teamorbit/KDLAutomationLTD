<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\WhatWeDoHome;
use Illuminate\Http\Request;
use Image;
use File;

class WhatWeDoHomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $whatwedohome = WhatWeDoHome::where('title', 'LIKE', "%$keyword%")
                ->orWhere('short_description', 'LIKE', "%$keyword%")
                ->orWhere('long_description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $whatwedohome = WhatWeDoHome::paginate($perPage);
            }

            return view('admin.what-we-do-home.index', compact('whatwedohome'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.what-we-do-home.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'short_description' => 'required',
			'image' => 'required'
		]);

            $whatwedohome = new whatwedohome($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $whatwedohome_path = 'uploads/whatwedohomes/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($whatwedohome_path) . DIRECTORY_SEPARATOR. $profileImage);

                $whatwedohome->image = $whatwedohome_path.$profileImage;
            }
            
            $whatwedohome->save();

            return redirect('admin/what-we-do-home')->with('flash_message', 'WhatWeDoHome added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $whatwedohome = WhatWeDoHome::findOrFail($id);
            return view('admin.what-we-do-home.show', compact('whatwedohome'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $whatwedohome = WhatWeDoHome::findOrFail($id);
            return view('admin.what-we-do-home.edit', compact('whatwedohome'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'short_description' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $whatwedohome = whatwedohome::where('id', $id)->first();
            $image_path = public_path($whatwedohome->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/whatwedohomes/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/whatwedohomes/'.$fileNameToStore;               
        }


            $whatwedohome = WhatWeDoHome::findOrFail($id);
             $whatwedohome->update($requestData);

             return redirect('admin/what-we-do-home')->with('flash_message', 'WhatWeDoHome updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('whatwedohome','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            WhatWeDoHome::destroy($id);

            return redirect('admin/what-we-do-home')->with('flash_message', 'WhatWeDoHome deleted!');
        }
        return response(view('403'), 403);

    }
}

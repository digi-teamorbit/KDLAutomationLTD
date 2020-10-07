<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\HomeInnerBanner;
use Illuminate\Http\Request;
use Image;
use File;

class HomeInnerBannerController extends Controller
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $homeinnerbanner = HomeInnerBanner::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $homeinnerbanner = HomeInnerBanner::paginate($perPage);
            }

            return view('admin.home-inner-banner.index', compact('homeinnerbanner'));
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.home-inner-banner.create');
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'image' => 'required'
		]);

            $homeinnerbanner = new homeinnerbanner($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $homeinnerbanner_path = 'uploads/homeinnerbanners/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($homeinnerbanner_path) . DIRECTORY_SEPARATOR. $profileImage);

                $homeinnerbanner->image = $homeinnerbanner_path.$profileImage;
            }
            
            $homeinnerbanner->save();

            return redirect('admin/home-inner-banner')->with('flash_message', 'HomeInnerBanner added!');
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $homeinnerbanner = HomeInnerBanner::findOrFail($id);
            return view('admin.home-inner-banner.show', compact('homeinnerbanner'));
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $homeinnerbanner = HomeInnerBanner::findOrFail($id);
            return view('admin.home-inner-banner.edit', compact('homeinnerbanner'));
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'image' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $homeinnerbanner = homeinnerbanner::where('id', $id)->first();
            $image_path = public_path($homeinnerbanner->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/homeinnerbanners/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/homeinnerbanners/'.$fileNameToStore;               
        }


            $homeinnerbanner = HomeInnerBanner::findOrFail($id);
             $homeinnerbanner->update($requestData);

             return redirect('admin/home-inner-banner')->with('flash_message', 'HomeInnerBanner updated!');
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
        $model = str_slug('homeinnerbanner','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            HomeInnerBanner::destroy($id);

            return redirect('admin/home-inner-banner')->with('flash_message', 'HomeInnerBanner deleted!');
        }
        return response(view('403'), 403);

    }
}

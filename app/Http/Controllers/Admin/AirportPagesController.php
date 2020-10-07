<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AirportPage;
use Illuminate\Http\Request;
use Image;
use File;

class AirportPagesController extends Controller
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $airportpages = AirportPage::where('page_name', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $airportpages = AirportPage::paginate($perPage);
            }

            return view('admin.airport-pages.index', compact('airportpages'));
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.airport-pages.create');
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'page_name' => 'required',
			'name' => 'required'
		]);

            $airportpages = new airportpage($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $airportpages_path = 'uploads/airportpages/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($airportpages_path) . DIRECTORY_SEPARATOR. $profileImage);

                $airportpages->image = $airportpages_path.$profileImage;
            }
            
            $airportpages->save();

            return redirect('admin/airport-pages')->with('flash_message', 'AirportPage added!');
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $airportpage = AirportPage::findOrFail($id);
            return view('admin.airport-pages.show', compact('airportpage'));
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $airportpage = AirportPage::findOrFail($id);
            return view('admin.airport-pages.edit', compact('airportpage'));
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'page_name' => 'required',
			'name' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $airportpages = airportpage::where('id', $id)->first();
            $image_path = public_path($airportpages->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/airportpages/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/airportpages/'.$fileNameToStore;               
        }


            $airportpage = AirportPage::findOrFail($id);
             $airportpage->update($requestData);

             return redirect('admin/airport-pages')->with('flash_message', 'AirportPage updated!');
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
        $model = str_slug('airportpages','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            AirportPage::destroy($id);

            return redirect('admin/airport-pages')->with('flash_message', 'AirportPage deleted!');
        }
        return response(view('403'), 403);

    }
}

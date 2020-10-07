<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Inquiry2;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;

class AirportController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('airport_banners')->where('id',1)->first();
        $cms_home1 = DB::table('airport_pages')->where('id',5)->first();
        $cms_home2 = DB::table('airport_pages')->where('id',6)->first();
        $cms_home3 = DB::table('airport_pages')->where('id',7)->first();
        $cms_home4 = DB::table('airport_pages')->where('id',8)->first();
        $cms_home5 = DB::table('airport_pages')->where('id',9)->first();
        $projects = DB::table('airport_projects')->get();
        $what_we_do = DB::table('what_we_do_airports')->orderBy('id', 'DESC')->get()->take(3);
        return view('airport/index', compact('banner', 'cms_home1', 'cms_home2', 'cms_home3', 'cms_home4', 'cms_home5', 'projects', 'what_we_do'));
    }

    public function aboutUs()
    { 
        $inner_banner1 = DB::table('airport_inner_banners')->where('id',1)->first();
        $cms_about = DB::table('airport_pages')->where('id',1)->first();
        return view('airport/about', compact('inner_banner1', 'cms_about'));
    }

    public function projects()
    { 
        $inner_banner2 = DB::table('airport_inner_banners')->where('id',2)->first();
        $cms_projects = DB::table('airport_pages')->where('id',2)->first();
        $projects = DB::table('airport_projects')->get();
        return view('airport/project', compact('inner_banner2', 'cms_projects', 'projects'));
    }

    public function whatWeDo()
    { 
        $inner_banner3 = DB::table('airport_inner_banners')->where('id',3)->first();
        $cms_whatWeDo = DB::table('airport_pages')->where('id',3)->first();
        $what_we_do = DB::table('what_we_do_airports')->get();
        return view('airport/what_we_do', compact('inner_banner3', 'cms_whatWeDo', 'what_we_do'));
    }

    public function contactUs()
    { 
        $inner_banner4 = DB::table('airport_inner_banners')->where('id',4)->first();
        $cms_contact = DB::table('airport_pages')->where('id',4)->first();
        return view('airport/contact', compact('inner_banner4', 'cms_contact'));
    } 

    public function contactSubmit(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $inquiry = new inquiry2;
        $inquiry->inquiries_fname = $request->first_name;
        $inquiry->inquiries_lname = $request->last_name;
        $inquiry->inquiries_email = $request->email;
       $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
}



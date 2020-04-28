<?php

namespace App\Http\Controllers;

use App\about;
use App\contact;
use App\faq2;
use App\agb;
use App\gallery;
use App\help;
use App\news;
use App\message;
use App\place;
use App\hotel;
use App\our_team;
use App\program;
use App\service;
use App\slider;
use App\sub_program;
use App\sub_service;
use App\testimonial;
use App\vidoe;
use App\why;
use App\booking;
use App\data;
use App\frist_cart;
use Config;
use App;
use Illuminate\Http\Request;

class Websitecontroller extends Controller
{
    
        public function publish(){
     
       
        return redirect('/Home/en');
        }

    public function index($locale){
         App::setLocale($locale);
        $slider=slider::all();
        $service=sub_service::all();
        $program=sub_program::all();
        $why=why::all();
        $test=testimonial::all();
         $hot=sub_service::where('hotoffer',1)->get();
        $news=news::orderByRaw('updated_at - created_at DESC LIMIT 3')->get();
        return view('website.home',['slider'=>$slider,'service'=>$service,'program'=>$program,'why'=>$why,'test'=>$test,'news'=>$news,'hot'=>$hot]);
    }
    
      public function select($locale){
         App::setLocale($locale);
      
        $program=program::all();
       
        return view('website.select',['program'=>$program]);
    }
    public function history($locale){
         App::setLocale($locale);
        $about=about::find(1);
        $why=why::all();
        $test=testimonial::all();
        $team=our_team::all();
        return view('website.history',['about'=>$about,'why'=>$why,'test'=>$test,'team'=>$team]);
    }
    public function ourservices($name,$locale){
         App::setLocale($locale);
        $service_id=service::where('name_en',$name)->orwhere('name_fr',$name)->orwhere('name_de',$name)->orwhere('name_it',$name)
            ->orwhere('name_es',$name)
            ->first();
        $sub=sub_service::where('service_id',$service_id['id'])->get();
        $ser=sub_service::all();

        return view('website.ourservices',['sub'=>$sub,'service_id'=>$service_id,'ser'=>$ser]);
    }
    public function allservices($locale){
         App::setLocale($locale);

        $ser=service::all();

        return view('website.Show_all_services',['ser'=>$ser]);
    }
   public function ourprograms($name,$locale){
        App::setLocale($locale);
        $name2=str_replace('_', ' ',$name);
        $service_id=program::where('name_en',$name2)->orwhere('name_fr',$name2)->orwhere('name_de',$name2)->orwhere('name_it',$name2)
            ->orwhere('name_es',$name2)
            ->first();
        $sub=sub_program::where('program_id',$service_id['id'])->get();
        $ser=sub_program::all();
        return view('website.ourprograms',['sub'=>$sub,'service_id'=>$service_id,'ser'=>$ser]);
    }
    
      public function hotoffers($locale){
          App::setLocale($locale);
        // $service_id=program::where('name_en',$name)->orwhere('name_fr',$name)->orwhere('name_de',$name)->orwhere('name_it',$name)
        //     ->orwhere('name_es',$name)
        //     ->first();
        $sub=sub_service::where('hotoffer',1)->paginate(3);
     
        return view('website.hotoffer',['sub'=>$sub]);
    }


    public function service($name,$locale){
         App::setLocale($locale);
        $serv3=sub_service::paginate(3);
        App::setLocale($locale);
        $name2=str_replace('_', ' ',$name);
        $service=sub_service::where('name_en',$name2)->orwhere('name_fr',$name2)->orwhere('name_de',$name2)->orwhere('name_it',$name2)
            ->orwhere('name_es',$name2)
            ->first();

        return view('website.single_service',['service'=>$service,'serv3'=>$serv3]);
    }
    public function program($name,$locale){
         App::setLocale($locale);
        $name2=str_replace('_', ' ',$name);
        $serv5=sub_program::all();
        $service=sub_program::where('name_en',$name2)->orwhere('name_fr',$name2)->orwhere('name_de',$name2)->orwhere('name_it',$name2)
            ->orwhere('name_es',$name2)
            ->first();

        return view('website.single_program',['service'=>$service,'serv5'=>$serv5]);
    }
    public function news($locale){
         App::setLocale($locale);
        $news=news::paginate(4);
        return view('website.news',['news'=>$news]);
    }
    
     public function place($locale){
          App::setLocale($locale);
        $news=place::all();
        return view('website.place',['news'=>$news]);
    }
    
     public function hotel($locale){
          App::setLocale($locale);
       $news=hotel::all();
        return view('website.hotel',['news'=>$news]);
    }
    
    
     public function singl_hotel($id,$locale){
          App::setLocale($locale);
        $news=hotel::find($id);
        return view('website.singl_hotel',['news'=>$news]);
    }
    
      public function singl_place($id,$locale){
           App::setLocale($locale);
        $news=place::find($id);
        return view('website.single_place',['news'=>$news]);
    }
    
    public function blog($locale){
         App::setLocale($locale);
        return view('website.blog');
    }

    public function contact($locale){
        App::setLocale($locale);
        $con=contact::find(1);
        return view('website.contact',['con'=>$con]);
    }

    public function faq($locale){
         App::setLocale($locale);
        // $help=help::all();
        $faq=faq2::find(1);
        // $vid=vidoe::find(1);
        return view('website.help',['faq'=>$faq]);
    }
    public function gallery($locale){
         App::setLocale($locale);
        $gallery=gallery::all();

        return view('website.gallery',['gallery'=>$gallery]);
    }
 
   public function myaccount($locale){
        App::setLocale($locale);
        return view('website.myaccount');
    }
    public function editprofile($locale){
         App::setLocale($locale);
    return view('website.editprofile');
     }
    public function edit_profile(Request $request){
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'fb'=>'required',
                'insta'=>'required',
                'address'=>'required',
                'phone'=>'required',
                'note'=>'required',
                'image'=>'mimes:jpeg,bmp,png',
            ]);

        $client=data::where('client_id',$request->client)->get();
        if(count($client)==0){
        $test=new data();
        $test->name=$request->name;
        $test->fb=$request->fb;
        $test->email=$request->email;
        $test->address=$request->address;
        $test->phone=$request->phone;
        $test->inst=$request->insta;
        $test->about=$request->note;
        $test->client_id=$request->client;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
            }else{
            $test=data::where('client_id',$request->client)->first();
            $test->name=$request->name;
            $test->fb=$request->fb;
            $test->email=$request->email;
            $test->address=$request->address;
            $test->phone=$request->phone;
            $test->inst=$request->insta;
            $test->about=$request->note;
            $test->client_id=$request->client;
            if($request->file('image') !=null)
            {
                $filname1=time().".".$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('img',$filname1);
                $test->img=$filname1;
            }

        }
        if($test->save()){
            return back();
        }
    }
    public function booking($locale){
         App::setLocale($locale);
        return view('website.booking');
    }
      public function agb($locale){
           App::setLocale($locale);
           $agb=agb::find(1);
        return view('website.agb',['agb'=>$agb]);
    }
    
    
        public function custom($id,$locale){
           App::setLocale($locale);
        $slider=slider::all();
        // $child=child::all();
        $sub_prog=sub_program::find($id);

        return view('website.Customize',['slider'=>$slider,'sub_prog'=>$sub_prog]);
    }


   public function first( Request $request ){

        $this->validate($request,
            [
                // 'level'=>'required',
                'dates'=>'required',
               'adult'=>'required',
                'child'=>'required',
               'prog'=>'required',


            ]);

      // echo $request->dates;
       $date=explode('-',$request->dates);
       $from=date($date['0']);
       $to=date($date['1']);
        $test=new frist_cart();
        $test->from=$from;
        $test->to=$to;
        $test->Adult=$request->adult;
        $test->child=$request->child;
        $test->program=$request->prog;
        $test->program_l_id=$request->level;
       if($test->save()){
           $id=$test->id;
          $cart=frist_cart::find($id);
             return view('website.booking',['cart'=>$cart]);
       }else{
           return back();
       }




    }



    public function addbooking( Request $request ){



        $test=new booking();
        $test->from=$request->from;
        $test->to=$request->to;
        $test->Adult=$request->adult;
        $test->child=$request->child;
        $test->program_l_id=$request->level;
        $test->user_id=$request->user;
        $test->last_name=$request->last;
        $test->first_name=$request->first;
        $test->email=$request->email;
        $test->phone=$request->phone;


        $test->city=$request->city;
        $test->country=$request->country;
        $test->street=$request->street;
        $test->code=$request->code;
        $test->state=$request->state;
        $test->note=$request->note;

        if($test->save()){

            return redirect("Home");
        }




    }

     public function Main_Search(Request $request,$locale)
    {
 App::setLocale($locale);
        $this->validate($request,
            [
                // 'adults' => 'required',
                // 'child' => 'required',
                'prog' => 'required',
            ]);

        if ($request->adults == null && $request->adults == null && $request->prog == null) {

            return view('website.main_search');
        } else {
            $q = $request->prog;
            $search = sub_program::where('name_en', 'LIKE', '%' . $q . '%' //or 'name_it', 'LIKE', '%' . $q . '%' or 'name_de', 'LIKE', '%'
               // . $q . '%' or 'name_fr', 'LIKE', '%' . $q .
               // '%' or 'name_es', 'LIKE', '%' . $q . '%' or 'city', 'LIKE', '%' . $q . '%'
            )->get();
        }
        if (count($search) > 0) {

            return view('website.main_search',['search'=>$search]);
        } else {

            return view('website.main_search');


        }
    }
    
       public function contactusMassge(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $test=new message();

        $test->name=$request->name;
        $test->email=$request->email;
        $test->phone=$request->phone;
        $test->subject=$request->subject;
        $test->message=$request->message;


        if($test->save()){
            // alert()->success(trans('main.your_message_send_successfully'));
        return back();
        }
    }
}

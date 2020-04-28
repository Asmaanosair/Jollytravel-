<?php

namespace App\Http\Controllers;

use App\hotel;
use App\hotel_img;
use Illuminate\Http\Request;

class hotelcontroller extends Controller
{
    public function index(){
        $prog=hotel::paginate(10);
        return view('admin.hotel.hotel',['prog'=>$prog]);
    }
    public function create(){

        $admin=hotel::all();
        return view('admin.hotel.c_hotel',['admin'=>$admin]);
    }
    function add(Request $request){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'des_en'=>'required',
                'des_fr'=>'required',
                'des_de'=>'required',
                'des_es'=>'required',
                'des_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                'image'=>'required',



            ]);
        $test=new hotel();
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->m_img=$filname1;
        }


        if($test->save()){


            return back();
        }

    }
    public function edit($id){
        $pro=hotel::find($id);


        return view('admin.hotel.e_hotel',['pro'=>$pro]);
    }
    function update(Request $request ,$id){

        $this->validate($request,
            [
                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'des_en'=>'required',
                'des_fr'=>'required',
                'des_de'=>'required',
                'des_es'=>'required',
                'des_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                's_des_it'=>'required',

            ]);
        $test=hotel::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->m_img=$filname1;
        }


        if($test->save()){


            return back();
        }

    }
    function delete($id){
        $test=hotel::find($id);
        $test->delete();
        return back();

    }
      function add_image(Request $request, $id)
    {
        $files = [];
        foreach ($request->file('image') as $media) {
            if (!empty($media)) {
                $destinationPath = 'img';
                $filename = $media->getClientOriginalName();
                $media->move($destinationPath, $filename);
                $files[] = $filename;
            }

        }
        // print_r($files);


        foreach ($files as $key => $row) {

            $img2 = new hotel_img();
            $img2->img = $row;
            $img2->hotel_id = $id;
            $img2->save();

        }
        if ($img2->save()) {


            return back();

        }

    }

    function delete_img($id)
    {
        $test = hotel_img::find($id);
        $test->delete();
        return back();


    }
}

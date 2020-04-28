<?php

namespace App\Http\Controllers;

use App\home_word;
use Illuminate\Http\Request;

class transcontroller extends Controller
{
    function home(){
        $home=home_word::find(1);
        return view('admin.transilation.home_trans',['home'=>$home]);
    }

    function update(Request $request){


        $test=home_word::find(1);
        $test->home=implode(',',$request->home);
        $test->ourhistory=implode(',',$request->ourhistory);
        $test->ourprogram=implode(',',$request->ourprogram);
        $test->gallery=implode(',',$request->gallery);
        $test->currency=implode(',',$request->currency);
        $test->language=implode(',',$request->language);
        $test->hotoffer=implode(',',$request->hotoffer);
        $test->usefulltoknow=implode(',',$request->usefulltoknow);
        $test->contact=implode(',',$request->contact);
        $test->news=implode(',',$request->news);
        $test->sight=implode(',',$request->sight);
        $test->hotel=implode(',',$request->hotel);
        $test->faq=implode(',',$request->faq);
        $test->agb=implode(',',$request->agb);
        $test->search=implode(',',$request->search);
        $test->persons=implode(',',$request->persons);
        $test->child=implode(',',$request->child);
        $test->adult=implode(',',$request->adult);
        $test->finestprogram=implode(',',$request->finestprogram);
        $test->selectedtours=implode(',',$request->selectedtours);
        $test->allprograms=implode(',',$request->allprograms);
        $test->showhot=implode(',',$request->showhot);
        $test->chooseus=implode(',',$request->chooseus);
        $test->app=implode(',',$request->app);
        $test->des1_app=implode(',',$request->des1_app);
        $test->des2_app=implode(',',$request->des2_app);
        $test->android=implode(',',$request->android);
        $test->iphone=implode(',',$request->iphone);
        $test->testimonail=implode(',',$request->testimonail);
        $test->subscrib=implode(',',$request->subscrib);
        $test->des_sub=implode(',',$request->des_sub);
        $test->email_sub=implode(',',$request->email_sub);
        $test->partners=implode(',',$request->partners);
        $test->findus=implode(',',$request->findus);
        $test->about=implode(',',$request->about);
        $test->email=implode(',',$request->email);
        $test->phone=implode(',',$request->phone);
        $test->address=implode(',',$request->address);
        $test->callnow=implode(',',$request->callnow);
        $test->getin=implode(',',$request->getin);
        $test->indvidualrequest=implode(',',$request->indvidualrequest);

        if($test->save()){


           return back();
        }

    }
}

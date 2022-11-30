<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\Models\Place;
use App\Models\News;
use App\Models\News_cat;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Map;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\PortfolioCat;
use App\Models\ClientCat;
use App\Models\Client;

use App\Models\AlbumCat;
use App\Models\Album;

use App\Models\Activity;
use App\Models\SocialActivity;
use App\Models\Achievement;
use App\Models\Video;

class FrontendController extends Controller
{
    

    public function index(Request $request){
        $data['lang'] = session()->get('changed_language');
        $data['sliders']= Slider::where('status','1')->orderBy('id','desc')->limit(8)->get();
        $data['maps']= Map::where('status','1')->orderBy('id','desc')->limit(5)->get();
       // $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
        $data['client_cat']= ClientCat::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['client_front']= Client::where('status','1')->orderBy('id','desc')->limit(9)->get();
        $data['portfolio']= Portfolio::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['news']=News::where('status','1')->orderBy('id','desc')->limit(3)->get();
        $data['activities']=Activity::where('status','1')->orderBy('id','desc')->limit(3)->get();
         $data['social_activities']=SocialActivity::where('status','1')->orderBy('id','desc')->limit(3)->get();
         $data['achievements']=Achievement::where('status','1')->orderBy('id','desc')->limit(3)->get();
          //dd($data['news']);
        $data['overview']= About::where('status','1')->first();  
        $data['place']= Place::where('status','1')->orderBy('id','desc')->limit(4)->get();
         $data['page_name'] ='Home';
      // dd($data);

     return view('frontend.index',$data);

    }

    //news 

    public function latestNews(Request $request){
         $data['lang'] = session()->get('changed_language');

    	 $data['news']=News::where('status','1')->paginate(9);
    	 $data['cat'] =News_cat::all();
    	 //dd($data['news']);

    	 return view('frontend.news',$data);
    }

     public function newsDetails(Request $request,$slug){
         $data['news']=News::where('status','1')->paginate(6);
         $data['news_details']=News::where('slug',$slug)->first();
         $data['cat'] =News_cat::all();
         //dd($data['news']);

         return view('frontend.news_details',$data);
    }

    public function pageDetails(Request $request,$slug){

          $data['page']=Page::where('slug',$slug)->first();

          return view('frontend.page',$data);

    }


    public function HotelBooking(Request $request){
             $data['hotels']=Place::where('status','1')->where('type','hotel')->orderBy('id','desc')->paginate(9);
             //dd($data['hotels']);


             return view('frontend.hotel.index',$data);


    }

    public function TourBooking(Request $request){
             $data['tours']=Place::where('status','1')->where('type','tour')->orderBy('id','desc')->paginate(9);
             //dd($data['hotels']);


             return view('frontend.tour.index',$data);


    }

    public function singleDestination(Request $request,$id){
         $data['hotels']=Place::where('status','1')->where('type','hotel')->orderBy('id','desc')->limit(5)->get();
        
          $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
         //dd($id);

         $data['destination']=PopularDes::where('id',$id)->first();
         //dd( $data['destination']);
        return view('frontend.single_destination',$data);
    }


    public function newsWiseCategory(Request $request,$category){

         $data['cat'] =News_cat::all();

         $data['all_data']=DB::table('news')
                          ->leftjoin('news_cats','news.cat_id','news_cats.id')
                         
                          ->select('news.*','news_cats.title')
                          ->orderBy('news.id','desc')
                          ->where('news.cat_id',$category)
                          ->paginate(10);
        return view('frontend.news-category-wise',$data);   


    }

    public function albumCat(){
     
       
        $data['maps']= Map::where('status','1')->orderBy('id','desc')->limit(5)->get();
       // $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
        $data['client_cat']= ClientCat::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['client_front']= Client::where('status','1')->orderBy('id','desc')->limit(9)->get();
        $data['portfolio']= Portfolio::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['news']=News::where('status','1')->orderBy('id','desc')->limit(3)->get();
          //dd($data['news']);
       
       $data['overview']= About::where('status','1')->first();  

          $data['album_name']=AlbumCat::all();
           $data['page_name'] ='Album';

          return view('frontend.album_name',$data);  


    }

    public function albumCatPhoto(Request $request,$id){

       
        $data['maps']= Map::where('status','1')->orderBy('id','desc')->limit(5)->get();
       // $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
        $data['client_cat']= ClientCat::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['client_front']= Client::where('status','1')->orderBy('id','desc')->limit(9)->get();
        $data['portfolio']= Portfolio::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['news']=News::where('status','1')->orderBy('id','desc')->limit(3)->get();
          //dd($data['news']);
        $data['overview']= About::where('status','1')->first();  
      

          $data['album_name']=AlbumCat::all();
          $data['album_photo']=Album::where('cat_id',$id)->paginate();
          $data['album_detail']=AlbumCat::where('id',$id)->first();
          $data['page_name'] ='Album';

          return view('frontend.album_photo',$data);  


    }

     public function videos(Request $request){

       
        $data['maps']= Map::where('status','1')->orderBy('id','desc')->limit(5)->get();
       // $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
        $data['client_cat']= ClientCat::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['client_front']= Client::where('status','1')->orderBy('id','desc')->limit(9)->get();
        $data['portfolio']= Portfolio::where('status','1')->orderBy('id','desc')->limit(6)->get();
        $data['news']=News::where('status','1')->orderBy('id','desc')->limit(3)->get();
          //dd($data['news']);
       
        $data['overview']= About::where('status','1')->first(); 
        $data['all_video']=Video::where('status','1')->orderBy('id','desc')->paginate(6); 

          $data['album_name']=AlbumCat::all();
         // $data['album_photo']=Album::where('cat_id',$id)->paginate();
          //$data['album_detail']=AlbumCat::where('id',$id)->first();
          $data['page_name'] ='Album';

          return view('frontend.all_video',$data);  


    }




}

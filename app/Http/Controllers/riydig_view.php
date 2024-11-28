<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactUs;
use App\Models\service;
use App\Models\project;
use App\Models\contact;
use App\Models\blog;
use App\Models\keyword;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;
class riydig_view extends Controller
{
    public function return_distinict_data_api(){
        return response()->json(["message"=>project::distinct()->pluck('type')]);
    }
    public function return_home_view(){
        $data=service::limit(6)->get(); //PASS to Service section
        $data1=project::distinct()->pluck('type'); //pass to Projects Section
        $data3=blog::limit(3)->orderBy('id','desc')->get();//


        return view("index",compact('data','data1','data3'));
    }

    public function return_services_view(){
        $data=service::get();
        return view("services",compact('data'));
    }  

  
    public function service_view(Request $request){
        $data=service::find($request->id);
        return view("single_services.serviceDynamic",compact('data'));
    }


    public function return_about_view(){
        return view("about");
    }
    // public function return_clients_view(){
    //     return view("clients");
    // }  


     public function return_contact_view(){
        return view("contact");
    }
     public function return_portfolio_view(){
        $data1=project::distinct()->pluck('type');//to distinict Data
        $data2=project::get();
        return view("portfolio",compact('data1','data2'));
    } 

    public function Single_Blog_view(Request $request){
            try{
                $data=blog::where('id',$request->id)->first();
                $keyword=keyword::where('blog_id',$request->id)->get();
            
                return view("single_blog",compact('data','keyword'));
            }
            catch(\Exception $e)
            {
                return $e->getMessage();
            }
      
    } 

    public function Blogs_view(Request $request){
          try{
            $data=blog::orderBy("id","desc")->get();
           
        
            return view("blogs",compact('data'));
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
      
    } 
   
   
    public function SEO_view(){
        return view("single_services.1_SEO");
    }
  public function AEO_view(){
        return view("single_services.2_AEO");
    }
  public function SEM_view(){
        return view("single_services.3_SEM");
    }
 public function Brand_Strategy_view(){
        return view("single_services.4_Brand_Strategy");
    }
public function Brand_Identity_view(){
        return view("single_services.5_Brand_Identity");
    }
public function Marketing_Strategy_view(){
        return view("single_services.6_Marketing_Strategy");
    }
public function Social_Media_Marketing_view(){
        return view("single_services.7_Social_Media_Marketing");
    }
public function Influncer_Marketing_view(){
        return view("single_services.8_Influncer_Marketing");
    }

public function Media_Buying_view(){
        return view("single_services.9_Media_Buying");
    }
public function OOH_view(){
        return view("single_services.10_OOH");
    }

public function Website_view(){
        return view("single_services.11_Website");
    }
    public function Mobile_App_view(){
        return view("single_services.12_Mobile_App");
    }
     public function contact_us( Request $req){
        $name = "Funny Coder";
            try {
                $data=contact::create([
                            'name'=>$req->name,
                            'email'=>$req->email,
                            'message'=>$req->message,
                            'status'=>0
                        ]);
                        if($data)
                        {
                            Mail::to('amr.ratebyan@gmail.com')->send(new contactUs(['name' => $req->name,'email'=>$req->email,'message'=>$req->message]));
                            return redirect()->back()->with('success', 'Email sent successfully!'); // Redirect with success message
                        }
                } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Error sending email: ' . $e->getMessage()]); // Redirect with error message
            }

    
    }


    
}

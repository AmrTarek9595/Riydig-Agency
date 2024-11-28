<?php

namespace App\Http\Controllers;
use App\Http\Middleware\RedirectIfNotAuthenticated;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\service;
use App\Models\project;
use App\Models\contact;
use App\Models\blog;
use App\Models\keyword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(RedirectIfNotAuthenticated::class)->except(['registerPost','loginPost']);
    }


         public function index(Request $request)
        {
                return  view("auth.mainPage");
        }

        public function registerPost(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed', 
            
            ]);
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput(); 
            
            }
        
            try{
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();
                // return back()->with('success', 'Register successfully');

                }
                catch(\Exception $e){
                    return $e->getMessage();
                }
    
        }
        public function loginPost(Request $request)
        {
                        $credetials = [
                        'email' => $request->email,
                        'password' => $request->password,
                        ];
                        if (Auth::attempt($credetials)) {
                        return redirect('/mainPage')->with('success', 'Login berhasil');
                        }
                        return back()->with('error', 'Email or Password');
        }

        public function logout(Request $request)
        {
            Auth::logout();
            return redirect()->route('view-login');
        }





            /**
             * 
             * Services Functions For Admin (Add,Delete,Display)
             */
            //Add New Servie via Admin
        public function addNewServices(Request $request)
        {
          
            return view('auth.services.newService');
        }
        public function addNewServices_post(Request $request)
        {
          
            $request->validate([
                
                'file' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096'
            ]);
            if($request->has('file'))
            {
                $data = base64_encode(file_get_contents($request->file));
                // Display the output
                $src = 'data:image/png'.';base64,'.$data;
                // Display the output
                $imageName = time().'.'.$request->file->extension();
                $request->file->move(public_path('images'), $imageName);


          
                    $data=service::create(
                        [
                        'title_en'=>$request->title_en,
                        'quotation_en'=>$request->quotation_en,
                        'body_en'=>$request->body_en,
                        'title_ar'=>$request->title_ar,
                        'quotation_ar'=>$request->quotation_ar,
                        'body_ar'=>$request->body_ar,
                        'image_name'=>$imageName,
                        'image_base64'=>$src
                        ]);

            if($data)
            {
                return redirect()->back()->with('success', 'Image uploaded successfully.');
            }
            else{
                return redirect()->back()->with('error', 'error During Upload');
            }

            }
            else{
                return redirect()->back()->with('error', 'Must Select Image');

            }
           
           
        }
        //Display All Services With Data As Compact
        public function DisplayServices(Request $request)
        {
          $data=service::paginate(5);
            return view('auth.services.display_services',compact('data'));
        } 
        //Delete Service
        public function deleteService(Request $request)
        {
          $data=service::find($request->id);
          $filePath = "../public/images/".$data->image_name;

                if (unlink($filePath)) {
                   $data->delete();
                   return redirect()->back()->with('success', 'Data Removed Successful');
                } else {
                    $data->delete();
                    return redirect()->back()->with('success', 'Data Removed Successful');
                }

          
        } 

             //  Update Service in Admin
        public function updateService(Request $request)
        {
            $data=service::find($request->id);
          return view('auth.services.editService',compact('data'));
        } 
        // Action To Update Services 
         public function updateService_post(Request $request)
        {
            if($request->has('file'))
            {
                $returned_data=service::find($request->id);
                $data = base64_encode(file_get_contents($request->file));
                // Display the output
                $src = 'data:image/png'.';base64,'.$data;
      
                

                        $imageName = time().'.'.$request->file->extension();
                        $request->file->move(public_path('images'), $imageName);
                        $returned_data->update(
                        [
                        'title_en'=>$request->title_en,
                        'quotation_en'=>$request->quotation_en,
                        'body_en'=>$request->body_en,
                        'title_ar'=>$request->title_ar,
                        'quotation_ar'=>$request->quotation_ar,
                        'body_ar'=>$request->body_ar,
                        'image_name'=>$imageName,
                        'image_base64'=>$src

                        
                        ]);
                         return redirect()->back()->with('success', 'Data updated Successful');
             
             

           
            }
            else{
                $returned_data=service::find($request->id);
                $returned_data->update(
                    [
                    'title_en'=>$request->title_en,
                    'quotation_en'=>htmlspecialchars($request->quotation_en),
                    'body_en'=>$request->body_en,
                    'title_ar'=>$request->title_ar,
                    'quotation_ar'=>$request->quotation_ar,
                    'body_ar'=>$request->body_ar,
                    
                    ]);
                     return redirect()->back()->with('success', 'Data Updated Successful');

            }
            
      
        } 
             /**
             * 
             * End Service Section
             */
                /**
                 * 
                 * Start Contact US Section
                 */
        
        public function contactUsAdmin(Request $request)
        {
            $data=contact::orderBy("id","desc")->get();
            return view('auth.contact_us.contact_us',compact('data'));
        }
        public function updateContact(Request $request)
        {
            $data=contact::where("id",$request->id)->update(["status"=>1]);
            return back()->with("success","Updated Successful");
        }
      
         /**
             * 
             * End Contact US Section
             */
       
        /**
         * 
         * Start Projects Section
         */
        public function AddNewProject(Request $request)
        {
          
            return view('auth.projects.addNewProject');
        }
        // Get Inputs To Pass to database
        public function AddNewProject_post(Request $request)
        {
            $request->validate([
                
                'image_name' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
            ]);
            if($request->has('image_name'))
            {
                    $imageName = time().'.'.$request->image_name->extension();
                    $request->image_name->move(public_path('images/projects'), $imageName);
                    $data=project::create(
                        [
                        'project_title'=>$request->project_title,
                        'type'=>$request->type,
                        'image_name'=>$imageName,
                        'description'=>$request->description,
                        
                        ]);

            if($data)
            {
                return redirect()->back()->with('success', 'Image uploaded successfully.');
            }
            else{
                return redirect()->back()->with('error', 'error During Upload');
            }

            }
            else{
                return redirect()->back()->with('error', 'Must Select Image');

            }

          
            
        }
        //Delete Service
        public function deleteProject(Request $request)
        {
          $data=project::find($request->id);
          $filePath = "../public/images/projects/".$data->image_name;

                if (unlink($filePath)) {
                   $data->delete();
                   return redirect()->back()->with('success', 'Data Removed Successful');
                } else {
                    $data->delete();
                    return redirect()->back()->with('success', 'Data Removed Successful');
                }

          
        } 
        //Display Projects To Admin
        public function DisplayProjects(Request $request)
        {
            $data=project::orderBy('id','desc')->paginate(5);
            return view('auth.projects.DisplayProjects',compact('data'));
      
        }
        // UpdateProject
        public function updateProject(Request $request)
        {
            $data=project::find($request->id);
            return view('auth.projects.EditProject',compact('data'));
        } 

            // Action To Update Services 
            public function updateProject_post(Request $request)
            {
                $returned_data=project::find($request->id);
                if($request->has('image_name'))
                {
                    
                    
                    $filePath = "../public/images/projects/".$returned_data->image_name;
                    try{
                        if ( unlink($filePath) ) 
                        {
                            

                                $imageName = time().'.'.$request->image_name->extension();
                                $request->image_name->move(public_path('images/projects'), $imageName);
                                
                                if($request->type=="")
                                {
                                            $returned_data->update(
                                            [
                                            'project_title'=>$request->project_title,
                                            'image_name'=>$imageName,
                                            'description'=>$request->description,
                                        
                            
                                            ]);
                                            return redirect()->back()->with('success', 'Data updated Successful');
                                }
                            else{
                                    $returned_data->update(
                                        [
                                        'project_title'=>$request->project_title,
                                        'image_name'=>$imageName,
                                        'description'=>$request->description,
                                        'type'=>$request->type
                        
                                        ]);
                                        return redirect()->back()->with('success', 'Data updated Successful');
                                }
                        } 
                        else{
                            return "ss";
                        }
                
                    }
                    catch(\Exception $e){
                        return $e->getMessage();
                    }
            
                    
                
                }

                else if(!$request->has('image_name'))
                {
                    
                    
                    try{
                        if($request->type=="")
                                {
                                            $returned_data->update(
                                            [
                                            'project_title'=>$request->project_title,
                                            
                                            'description'=>$request->description,
                                        
                            
                                            ]);
                                            return redirect()->back()->with('success', 'Data updated Successful');
                                }
                            else{
                                    $returned_data->update(
                                        [
                                        'project_title'=>$request->project_title,
                                        
                                        'description'=>$request->description,
                                        'type'=>$request->type
                        
                                        ]);
                                        return redirect()->back()->with('success', 'Data updated Successful');
                                }
                        } 
                
                
                    
                    catch(\Exception $e){
                        return $e->getMessage();
                    }
            
                    
                
                }



                

            

                
            
            } 
             /**
             * 
             * End Project Section
             */
            // return AddBlog View
            public function AddBlog(Request $request)
            {
            
                return view('auth.blogs.NewBlog');
            }
             // return AddBlog To DB
            public function AddBlog_post(Request $request)
            {
                        try{

                        
                        $imageName = time().'_en.'.$request->file->extension();
                        $request->file->move(public_path('images/blogs'), $imageName);
                        $data=blog::create([
                            "title_en"=>$request->title_en,
                            "quotation_en"=>$request->quotation_en,
                            "body_en"=>$request->body_en,
                            "image_en"=>$imageName

                        ]);

                        if($data)
                        {
                            $tags = $request->input('tags'); 
                            
                            $tagsArray = explode(',', $tags); 
                            foreach ($tagsArray as $tag) { 
                                keyword::create(['keyword' => $tag,'blog_id'=>$data->id]); 
                                echo htmlspecialchars($tag) . '<br>'; } 
                                return redirect()->back()->with('success', 'Blog and Tags are submitted successfully!');
                        }
                    }
                    catch(\Exception$e)
                    {
                        return $e->getMessage();
                    }
            }
            // Return View with Compact For All Blogs
            public function DisplayBlogs(Request $request)
            {
            try{
            $data=blog::orderBy('id','desc')->paginate(5);

            return view('auth.blogs.DisplayBlogs',compact('data'));
            }

            catch(\Exception $e)
            {
                return $e->getMessage();
            }
            }
            //updateBlog
            public function updateBlog(Request $request)
            {
                $data=blog::find($request->id);
                $data1=keyword::where('blog_id', $request->id)->pluck('keyword');
                return view('auth.blogs.EditBlog',compact('data','data1'));
            } 
            public function updateBlog_Post(Request $request)
            {

                if($request->has('image_name'))
                {
                    try{
          
                        
                        $imageName = time().'_en.'.$request->image_name->extension();
                        $request->image_name->move(public_path('images/blogs'), $imageName);
                        $data=blog::where("id",$request->id)->update([
                            "title_en"=>$request->title_en,
                            "quotation_en"=>$request->quotation_en,
                            "body_en"=>$request->body_en,
                            "image_en"=>$imageName

                        ]);

                        if($data)
                        {
                            $tags = $request->input('tags'); 
                            $delete_old_data=keyword::where('blog_id',$request->id)->delete();

                            $tagsArray = explode(',', $tags); 
                            foreach ($tagsArray as $tag) { 
                                keyword::create(['keyword' => $tag,'blog_id'=>$request->id]); 
                                echo htmlspecialchars($tag) . '<br>'; } 
                                return redirect()->back()->with('success', 'Blog and Tags are submitted successfully!');
                        }
                    }
                    catch(\Exception$e)
                    {
                        return $e->getMessage();
                    }
                }
                else{
                    try{
                        $data=blog::where("id",$request->id)->update([
                            "title_en"=>$request->title_en,
                            "quotation_en"=>$request->quotation_en,
                            "body_en"=>$request->body_en,
                    

                        ]);

                        if($data)
                        {
                            $tags = $request->input('tags'); 
                            $delete_old_data=keyword::where('blog_id',$request->id)->delete();

                            $tagsArray = explode(',', $tags); 
                            foreach ($tagsArray as $tag) { 
                                keyword::create(['keyword' => $tag,'blog_id'=>$request->id]); 
                                echo htmlspecialchars($tag) . '<br>'; } 
                                return redirect()->back()->with('success', 'Blog and Tags are submitted successfully!');
                        }
                    }
                    catch(\Exception$e)
                    {
                        return $e->getMessage();
                    }
                }
            } 
            public function DeleteBlog(Request $request)
            {

                $data=blog::where('id',$request->id)->delete();
                if($data)
                {
                    $data2=keyword::where('blog_id',$request->id)->delete();
                    return back()->with('success','successfully Deleted');
                }
                else{
                    return back()->with('error','Try Again');
                }
            } 



}

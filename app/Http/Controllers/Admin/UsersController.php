<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Email;
use App\Models\DeactivateDays;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailLink;
use App\Models\Role;
use App\Models\Employee;
use App\Models\Equipment;
use App\Models\Image;
use App\Models\PinRequest;
use App\Models\WithdrawalRequest;
use App\Models\TeamBonusRequest;
use App\Models\RewardBonusRequest;
use App\Models\TeamUser;
use App\Models\Pin;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscription;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $user = User::where('id',1)->first();
        $services = Service::limit(3)->get();
        $reviews = Review::get();
        $images = Slider::all();
        $reviewscount = Review::count();
        $equipments = Equipment::limit(4)->get();
        return view('index')->with([
            'user'=>$user,
            'services'=>$services,
            'reviews'=>$reviews,
            'images'=>$images,
            'reviewscount'=>$reviewscount,
            'equipments'=>$equipments,
        ]);
    }

    public function dashboard()
    {
        $user = User::where('id',1)->first();
        return view('admin.dashboard')->with('user',$user);
    }
    public function image($id, $name)
    {
        $user = User::where('id',1)->first();
        return view('admin.change-image')->with([
            'user'=>$user,
            'id'=>$id,
            'name'=>$name,
        ]);
    }
    public function changeimage(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'image' => ['required' ,'max:10000'],            
        ]);

        if($request->name=='review')
        {
            $table = Review::where('id',$request->id)->first();
            $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/review/');
            $table->image = $image;
            $table->save();
            return  redirect()->route('reviews')->with('message', 'Image Updated Successfully');   
        }
        elseif($request->name=='project')
        {
            $table = Project::where('id',$request->id)->first();
            $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/project/');
            $table->image = $image;
            $table->save();
            return  redirect()->route('projects')->with('message', 'Image Updated Successfully');
        }
        elseif($request->name=='employee')
        {
            $table = Employee::where('id',$request->id)->first();
            $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/team/');
            $table->image = $image;
            $table->save();
            return  redirect()->route('teamlist')->with('message', 'Image Updated Successfully');
        }
        elseif($request->name=='service')
        {
            $table = Service::where('id',$request->id)->first();
            $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/service/');
            $table->image = $image;
            $table->save();
            return  redirect()->route('services')->with('message', 'Image Updated Successfully');
        }
        elseif($request->name=='equipment')
        {
            $table = Equipment::where('id',$request->id)->first();
            $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/equipment/');
            $table->image = $image;
            $table->save();
            return  redirect()->route('equipments')->with('message', 'Image Updated Successfully');
        }
        elseif($request->name=='equipment_logo')
        {
            $table = Equipment::where('id',$request->id)->first();
            $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/equipment/');
            $table->logo = $image;
            $table->save();
            return  redirect()->route('equipments')->with('message', 'Logo Updated Successfully');
            
        }
    }

    public function gallery()
    {
        $user = User::where('id',1)->first();
        $videos = Video::all();
        $images = Image::all();
        return view('gallery')->with([
            'user'=>$user,
            'images'=>$images,
            'videos'=>$videos,
        ]);
    }

    public function ourequipments()
    {
        $equipments = Equipment::all();
        $user = User::where('id',1)->first();
        return view('our-equipments')->with([
            'user'=>$user,
            'equipments'=>$equipments,
        ]);
    }
    public function viewprojects()
    {
        $projects = Project::all();
        $user = User::where('id',1)->first();
        return view('view-projects')->with([
            'user'=>$user,
            'projects'=>$projects,
        ]);
    }
    public function subscribe(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:subscriptions'],            
        ]);

        $subscribtion = new Subscription();
        $subscribtion->email = $request->email;
        
        $subscribtion->save();
        
        return  redirect()->route('contactus')->with('message', 'Subscribed Successfully');   
    }
    public function sendmessage(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'string', 'max:100000'],
            'email' => ['required', 'string', 'max:100000'],
            'subject' => ['required', 'max:100000'],
            'message' => ['required', 'string', 'max:100000'],        ]);
            $name = $request->name; 
            $email = $request->email;
            $subject = $request->subject;
            $message = $request->message;
            $user = User::first();
      
            Mail::to($user->email)->send(new SendEmailLink($name,$email,$subject,$message));
            return redirect()->route('contactus')->with('message', 'Message Sent Successfully');         
    }
    public function sendinquiry(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'string', 'max:100000'],
            'phonenumber' => ['required', 'string', 'max:100000'],
            'companyname' => ['required', 'string', 'max:100000'],
            'city' => ['required', 'string', 'max:100000'],
            'email' => ['required', 'string', 'max:100000'],
            'equipment' => ['required', 'max:100000'],
            'message' => ['required', 'string', 'max:100000'],        ]);
            $name = $request->name; 
            $companyname = $request->companyname; 
            $city = $request->city; 
            $phonenumber = $request->phonenumber; 
            $email = $request->email;
            $equipment = $request->equipment;
            $message = $request->message;
            $user = User::first();
      
            Mail::to($user->email)->send(new Email($name,$email,$equipment,$message,$phonenumber,$companyname,$city));
            return redirect()->route('booknow')->with('message', 'Message Sent Successfully'); 
    }
    public function aboutus()
    {
        $user = User::where('id',1)->first();
        $employees = Employee::limit(4)->get();
        return view('aboutus')->with([
            'user'=>$user,
            'employees'=>$employees
        ]);
    }
    public function service()
    {
        $user = User::where('id',1)->first();
        $services = Service::get();
        return view('services')->with([
            'user'=>$user,
            'services'=>$services,
        ]);
    }
    public function company()
    {
        $user = User::where('id',1)->first();
        $employees = Employee::limit(4)->get();
        return view('company')->with([
            'user'=>$user,
            'employees'=>$employees
        ]);
    }
    public function contactus()
    {
        $user = User::where('id',1)->first();
        return view('contactus')->with('user',$user);
    }
    public function booknow()
    {
        $user = User::where('id',1)->first();
        $equipments = Equipment::all();
        return view('booknow')->with([
            'user'=>$user,
            'equipments'=>$equipments,
        ]);
    }

    public function team()
    {
        $user = User::where('id',1)->first();
        $employees = Employee::all();
        return view('team')->with([
            'user'=>$user,
            'employees'=>$employees
        ]);
    }

    public function gotochangepassword()
    {
        $user = User::where('id',1)->first();
        return view('auth.change-password')->with('user',$user);
    }

    public function teamlist()
    {
        $sno = 0;
        $employees = Employee::all();
        $user = User::where('id',1)->first();
        
        return view('admin.team')->with([
            'employees'=>$employees,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    public function edit($id)
    {       
        $user = User::where('id',1)->first();
        $employee = Employee::where('id',$id)->first();
        return view('admin.edit')->with([
            'user'=>$user,
            'employee'=>$employee
        ]);

    }
    public function addemployee()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-employee')->with([
            'user'=>$user,
        ]);

    }

    public function storeemployee(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'string', 'max:100000'],
            'image' => ['required', 'max:100000'],
            'designation' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $employee = new Employee();
        $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/team/');
        $employee->image = $image;
        $employee->name = $request->name;
        $employee->facebook = $request->facebook;
        $employee->instagram = $request->instagram;
        $employee->twitter = $request->twitter;
        $employee->linkedin = $request->linkedin;
        $employee->youtube = $request->youtube;
        $employee->designation = $request->designation;
        
        $employee->save();
        
        return  redirect()->route('teamlist')->with('message', 'Employee Added Successfully');   
    }
    public function updateemployee(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'string', 'max:100000'],
            'designation' => ['required', 'string', 'max:100000'],
            'facebook' => ['required', 'string', 'max:100000'],
            'instagram' => ['required', 'string', 'max:100000'],
            'twitter' => ['required', 'string', 'max:100000'],
            'linkedin' => ['required', 'string', 'max:100000'],
            'youtube' => ['required', 'string', 'max:100000'],
        ]);

        $user = User::where('id',1)->first();
        $employee = Employee::where('id',$request->id)->first();
        
        $employee->name = $request->name;
        $employee->facebook = $request->facebook;
        $employee->instagram = $request->instagram;
        $employee->twitter = $request->twitter;
        $employee->linkedin = $request->linkedin;
        $employee->youtube = $request->youtube;
        $employee->designation = $request->designation;
        
        $employee->save();
        
        return  redirect()->route('teamlist')->with('message', 'Details Updated Successfully');   
    }

    public function services()
    {
        $sno = 0;
        $services = Service::all();
        $user = User::where('id',1)->first();
        
        return view('admin.services')->with([
            'services'=>$services,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    public function editservice($id)
    {       
        $user = User::where('id',1)->first();
        $service = Service::where('id',$id)->first();
        return view('admin.edit-service')->with([
            'user'=>$user,
            'service'=>$service
        ]);

    }
    public function addservice()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-service')->with([
            'user'=>$user,
        ]);

    }

    public function storeservice(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'image' => ['required', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $service = new Service();
        $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/service/');
        $service->image = $image;
        $service->title = $request->title;
        $service->description = $request->description;
        
        $service->save();
        
        return  redirect()->route('services')->with('message', 'Service Added Successfully');   
    }
    public function updateservice(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $service = Service::where('id',$request->id)->first();
        
        $service->title = $request->title;
        $service->description = $request->description;
        
        $service->save();
        
        return  redirect()->route('services')->with('message', 'service Updated Successfully');   
    }
    public function videos()
    {
        $sno = 0;
        $videos = Video::all();
        $user = User::where('id',1)->first();
        
        return view('admin.videos')->with([
            'videos'=>$videos,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   
    public function subscriptions()
    {
        $sno = 0;
        $subscriptions = Subscription::all();
        $user = User::where('id',1)->first();
        
        return view('admin.subscriptions')->with([
            'subscriptions'=>$subscriptions,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    
    public function addvideo()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-video')->with([
            'user'=>$user,
        ]);

    }

    public function storevideo(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'link' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $video = new Video();
        $video->link = $request->link;
        
        $video->save();
        
        return  redirect()->route('videos')->with('message', 'Video Added Successfully');   
    }

    public function images()
    {
        $sno = 0;
        $images = Image::all();
        $user = User::where('id',1)->first();
        
        return view('admin.images')->with([
            'images'=>$images,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    
    public function addimage()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-image')->with([
            'user'=>$user,
        ]);

    }

    public function storeimage(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'max:100000'],
            
        ]);
        $user = User::where('id',1)->first();
        $image = new Image();
        $img = app('App\Http\Controllers\UploadImageController')->storage_upload($request->name,'/app/public/images/');
        $image->name = $img;
        
        $image->save();
        
        return  redirect()->route('images')->with('message', 'Image Added Successfully');   
    }

    public function slider()
    {
        $sno = 0;
        $images = Slider::all();
        $user = User::where('id',1)->first();
        
        return view('admin.slider')->with([
            'images'=>$images,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    
    public function addsliderimage()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-slider-image')->with([
            'user'=>$user,
        ]);

    }

    public function storesliderimage(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'name' => ['required', 'max:100000'],
            
        ]);
        $user = User::where('id',1)->first();
        $image = new Slider();
        $img = app('App\Http\Controllers\UploadImageController')->storage_upload($request->name,'/app/public/slider/');
        $image->name = $img;
        
        $image->save();
        
        return  redirect()->route('slider')->with('message', 'Image Added Successfully');   
    }

    public function destroysliderimage($id)
    {       
        if(Slider::count()>1)
        {
        $image= Slider::where('id',$id)->first();
        $image->delete();
        return redirect()->route('slider')->with('message', 'Image Deleted Successfully');  
        }
        else
        {
            return redirect()->route('slider')->with('issue', 'Slider must have atleast one Image');  
        }
    }

    public function equipments()
    {
        $sno = 0;
        $equipments = Equipment::all();
        $user = User::where('id',1)->first();
        
        return view('admin.equipments')->with([
            'equipments'=>$equipments,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    public function editequipment($id)
    {       
        
        $user = User::where('id',1)->first();
        $equipment = Equipment::where('id',$id)->first();
        return view('admin.edit-equipment')->with([
            'user'=>$user,
            'equipment'=>$equipment
        ]);

    }
    public function addequipment()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-equipment')->with([
            'user'=>$user,
        ]);

    }

    public function storeequipment(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'image' => ['required', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $equipment = new Equipment();
        $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/equipment/');
        $logo = app('App\Http\Controllers\UploadImageController')->storage_upload($request->logo,'/app/public/equipment/');
        $equipment->image = $image;
        $equipment->title = $request->title;
        $equipment->logo = $logo;
        $equipment->description = $request->description;
        
        $equipment->save();
        
        return  redirect()->route('equipments')->with('message', 'Equipment Added Successfully');   
    }
    public function updateequipment(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $equipment = Equipment::where('id',$request->id)->first();
        
        $equipment->title = $request->title;
        $equipment->description = $request->description;
        
        $equipment->save();
        
        return  redirect()->route('equipments')->with('message', 'Equipment Updated Successfully');   
    }

    public function projects()
    {
        $sno = 0;
        $projects = Project::all();
        $user = User::where('id',1)->first();
        
        return view('admin.projects')->with([
            'projects'=>$projects,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    public function editproject($id)
    {       
        
        $user = User::where('id',1)->first();
        $project = Project::where('id',$id)->first();
        return view('admin.edit-project')->with([
            'user'=>$user,
            'project'=>$project
        ]);

    }
    public function addproject()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-project')->with([
            'user'=>$user,
        ]);

    }

    public function storeproject(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'image' => ['required', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $project = new Project();
        $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/project/');
        $project->image = $image;
        $project->title = $request->title;
        $project->description = $request->description;
        
        $project->save();
        
        return  redirect()->route('projects')->with('message', 'Project Added Successfully');   
    }
    public function updateproject(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            
        ]);

        $user = User::where('id',1)->first();
        $project = Project::where('id',$request->id)->first();
        
        $project->title = $request->title;
        $project->description = $request->description;
        
        $project->save();
        
        return  redirect()->route('projects')->with('message', 'Project Updated Successfully');   
    }

    public function reviews()
    {
        $sno = 0;
        $reviews = Review::all();
        $user = User::where('id',1)->first();
        
        return view('admin.reviews')->with([
            'reviews'=>$reviews,
            'user'=>$user,
            'sno'=>$sno
        ]);

    }   

    public function editreview($id)
    {       
        
        $user = User::where('id',1)->first();
        $review = Review::where('id',$id)->first();
        return view('admin.edit-review')->with([
            'user'=>$user,
            'review'=>$review
        ]);

    }
    public function addreview()
    {       
        $user = User::where('id',1)->first();
        return view('admin.add-review')->with([
            'user'=>$user,
        ]);

    }

    public function storereview(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'image' => ['required', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            'name' => ['required', 'string', 'max:100000'],
            'CustomerType' => ['required', 'string', 'max:100000'],
            'rate' => ['required', 'string', 'max:100000'],
        ]);

        $user = User::where('id',1)->first();
        $review = new Review();
        $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->image,'/app/public/review/');
        $review->image = $image;
        $review->title = $request->title;
        $review->description = $request->description;
        $review->name = $request->name;
        $review->c_type = $request->CustomerType;
        $review->rate = $request->rate;
        
        $review->save();
        
        return  redirect()->route('reviews')->with('message', 'Review Added Successfully');   
    }
    public function updatereview(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'title' => ['required', 'string', 'max:100000'],
            'description' => ['required', 'string', 'max:100000'],
            'name' => ['required', 'string', 'max:100000'],
            'CustomerType' => ['required', 'string', 'max:100000'],
            'rate' => ['required', 'string', 'max:100000'],
        ]);

        $user = User::where('id',1)->first();
        $review = Review::where('id',$request->id)->first();
        
        $review->title = $request->title;
        $review->description = $request->description;
        $review->name = $request->name;
        $review->c_type = $request->CustomerType;
        $review->rate = $request->rate;
        
        $review->save();
        
        return  redirect()->route('reviews')->with('message', 'Review Updated Successfully');   
    }

    public function update(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'email' => ['required', 'string', 'max:100000'],
            'number' => ['required', 'string', 'max:1000000'],
            'worktime' => ['required', 'string', 'max:100000'],
            'videolink' => ['required', 'string', 'max:100000'],
            'facebook' => ['required', 'string', 'max:100000'],
            'instagram' => ['required', 'string', 'max:100000'],
            'twitter' => ['required', 'string', 'max:100000'],
            'linkedin' => ['required', 'string', 'max:100000'],
            'youtube' => ['required', 'string', 'max:100000'],
        ]);

        $user = User::where('id',1)->first();
        if($request->logo!=Null)
        {
            $logo = app('App\Http\Controllers\UploadImageController')->storage_upload($request->logo,'/app/public/Logo/');
            $user->logo = $logo;
        }
        if($request->logodark!=Null)
        {
            $logodark = app('App\Http\Controllers\UploadImageController')->storage_upload($request->logodark,'/app/public/Logo/');
            $user->logodark = $logodark;
        }
        if($request->titleicon!=Null)
        {
            $titleicon = app('App\Http\Controllers\UploadImageController')->storage_upload($request->titleicon,'/app/public/Logo/');
            $user->titleicon = $titleicon;
        }
        $user->email = $request->email;
        $user->number = $request->number;
        $user->worktime = $request->worktime;
        $user->videolink = $request->videolink;
        $user->facebook = $request->facebook;
        $user->instagram = $request->instagram;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;
        $user->youtube = $request->youtube;
        $user->map = $request->map;
        
        $user->save();
        
        return  redirect()->back()->with('message', 'Details Updated Successfully');   
    }

    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // $user->userid = Auth::user()->userid;
        // $user->six_digit_Id = Auth::user()->six_digit_Id;
        // $user->name = Auth::user()->name;
        // $user->email = Auth::user()->email;
        // $user->lock = Auth::user()->lock;
        // $user->number = Auth::user()->number;
        
        DB::table('users')
        ->where('id', Auth::user()->id)  // find your user by their email
        ->update(array('password' => Hash::make($request->password)));
        
        return redirect()->route('dashboard');
    }


    public function destroy(Employee $employee)
    {       
        if(Employee::count()>1)
        {
            $employee->delete();
        
            return  redirect()->route('teamlist')->with('message', 'Employee Deleted Successfully');   
        }
        else
        {
            return redirect()->route('teamlist')->with('issue', 'There must be atleast one Employee');  
        }
          
    }
    public function destroyservice($id)
    {     
        if(Service::count()>1)
        {
            $service = Service::where('id',$id)->first();
            $service->delete();
            
            return  redirect()->route('services')->with('message', 'Service Deleted Successfully');   
        }
        else
        {
            return redirect()->route('services')->with('issue', 'There must be atleast one Service');  
        }  
         
    }
    public function destroyequipment($id)
    {       
        $equipment = Equipment::where('id',$id)->first();
        $equipment->delete();
        
        return  redirect()->route('equipments')->with('message', 'Equipment Deleted Successfully');  
    }
    public function destroyproject($id)
    {       
        $project = Project::where('id',$id)->first();
        $project->delete();
        
        return  redirect()->route('projects')->with('message', 'Project Deleted Successfully');  
    }
    public function destroyreview($id)
    {       
        $review = Review::where('id',$id)->first();
        $review->delete();
        
        return  redirect()->route('reviews')->with('message', 'Review Deleted Successfully');  
    }
    public function destroyvideo($id)
    {       
        $video = Video::where('id',$id)->first();
        $video->delete();
        
        return redirect()->route('videos')->with('message', 'Video Deleted Successfully');  
    }
    public function destroyimage($id)
    {       
        $image= Image::where('id',$id)->first();
        $image->delete();
        
        return redirect()->route('images')->with('message', 'Image Deleted Successfully');  
    }

}

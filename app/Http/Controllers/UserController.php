<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Videos;
use App\Models\Mediacover;
use App\Models\Questions;
use App\Models\Answers;
use App\Models\Course_files;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class UserController extends Controller
{

    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.user-dashboard');
    }


    public function instructorCourses()
    {
        $cozes=Courses::All();
        return view('user.instructor.instructor-courses')->with('cozes',$cozes);
    }

    public function  analytics()
    {
        return view('user.instructor.analytics');
    }

public function   instructorDashboard()
{
    return view('user.instructor.instructor-dashboard');
}

public function getVideo($video)
{
    $fileContents = Storage::disk('local')->get("tempvideos/{$video}");
    $response = Response($fileContents, 200);
    $response->header('Content-Type', "video/mp4");
    return $response;
}
public function getPdf($pdf)
{
    $fileContents = Storage::disk('local')->get("temppdfs/{$pdf}");
    $response = Response($fileContents, 200);
    $response->header('Content-Type', "pdf");

    return $response;
}
public function getPpt($ppt)
{
    $fileContents = Storage::disk('local')->get("tempppt/{$ppt}");
    $response = Response($fileContents, 200);
    $response->header('Content-Type','image/{explode(".",$ppt)[1]}');

    return $response;
}

public function getcopic($pic)
{
    $fileContents = Storage::disk('local')->get("coverpic/{$pic}");
    $response = Response($fileContents, 200);
    $response->header('Content-Type','image/{explode(".",$pic)[1]}');

    return $response;
}
public function getcovid($vid)
{
    $fileContents = Storage::disk('local')->get("covervid/{$vid}");
    $response = Response($fileContents, 200);
    $response->header('Content-Type','image/{explode(".",$vid)[1]}');

    return $response;
}
public function  viewCourse($id)
{  $course=course::find($id);

    $videos=$course->Videos;

    $covid=$course->mediaCover->where('file_type','covervid')->first();

    $copic=MediaCover::Where('course_id',$id)->where('file_type','coverpic')->first();


    return view('user.instructor.viewcourse')->with('videos', $videos)
    ->with('course', $course)
    ->with('covid', $covid)
    ->with('copic', $copic);

}

public function pptpics(Request $request){

    $ppts=Course_files::where('file_type', 'pptcourse')->where('videos_id',$request->id)->get();

    return Response()->json($ppts);
}

// Add course page 1
public function addCourse()
{

$corses=Category::all();

$subcorses=Subcategory::all();



     return view('user.instructor.create-courses')->with('corses',$corses)->with('subcorses',$subcorses);
}
public function postaddCourse(Request $request)
{
    $validatedData = $request->validate([
        'course_title' => 'required|unique:courses,course_title',
        'course_subt' => 'required',
        'language' => 'required',
        'category_Id' => 'required',
        'subcategory_Id' => 'required',
        'mainrequire' => 'required',
        'mainwlearn' => 'required',
        'price' => 'required',
        'course_des'=>'required',

    ]);
    $course = new Course();
try{
     $course_ided =  $course->create($validatedData);


}
catch(\Illuminate\Database\QueryException $ex)
{
    dd($ex->getMessage());
}
    return redirect()->route('addcontent',['id'=>$course_ided->id]);
}

//Add course page 2
public function  addVideos($idcourse)
{
    return view('user.instructor.addvideo')->with('course_id',$idcourse);
}
public function  postaddVideos(Request $request)
{

    //  $validatedData = $request->validate([
    // 'description' => 'required',
    // 'videos'=>'required|mimes:mp4',
    // 'pdfes'=>'required|mimes:pdf',
    // 'pptxes'=>'required|mimes:pptx',
    // ]);
    $cvideo = new Videos();

//if request containd video files
// if($request->hasfile('videos'))
// {
    $videos = new Videos();
    // $filed=$request->file('videos');
    // $filename = $filed->getClientOriginalName();
    // //if video contains the require extension
    // $video = Youtube::upload(
    //     $filed->getPathName(), [
    //     'title'       => $filename,
    //     'description' => 'nakwalify videos',
    //     'status'=>'unlisted',
    // ]);

        // $path="https://www.youtube.com/watch?v={$video->getVideoId()}";
        $path=$request->videos;
        $videos->video_title=$path;
        $videos->video_type="videocourse";
        $videos->video_path=$path;
        $videos->course_id=$request->course_id;
        $videos->video_desc=$request->description;
        $videos->save();
        $cvideo=$videos;

//}
if($request->hasfile('pdfes')&&$cvideo!=null)
{
    $coursef = new Course_files();
    $filed=$request->file('pdfes');
    $filename = $filed->getClientOriginalName();

       $path=$filed->store('/temppdf');
        $coursef->course_file_title=$filename;
        $coursef->file_type="pdfcourse";
        $coursef->file_path=$path;
        $coursef->videos_id=$cvideo->id;
        $coursef->save();

}
 if(isset($request->pptxes)&&$cvideo!=null)
{
      foreach($request->file('pptxes') as $pptes){
    $course = new Course_files();

    $filename = $pptes->getClientOriginalName();

       $path=$pptes->store('/tempppt');
        $course->course_file_title=$filename;
        $course->file_type="pptcourse";
        $course->file_path=$path;
        $course->videos_id=$cvideo->id;
        $course->save();
    }
    }

return Response()->json($cvideo);

}
public function  addQuestion($id)
{
    return view('user.instructor.addquestions')->with("video_id",$id);
}
public function  addQuestionpost(Request $request)
{

$question=new Questions();
if($request->question!=null){
$question->question=$request->question;
$question->questiontype=$request->questiontype;
$question->video_id=$request->video_id;
$question->save();


if($request->answer!=null){
    $ans=$request->answer;
    $anstype=$request->correct;

    for( $i=0; $i<sizeof($ans); $i++){
        $answerz=new Answers();
        $answerz->answer=$ans[$i];
        if(isset($anstype[$i])){

            $answerz->answertype="true";
        }
        else
        {
            $answerz->answertype="false";
        }
        $answerz->question_id=$question->id;
        $answerz->save();
    }
}
}

return Response()->json($question);
}
public function takequiz($id)
{
    $qstns=Questions::where('id',$id)->get();

    return view('user.instructor.questin')->with("qstn",$qstn);
}
public function  quizpost(Request $request)
{
    return view('user.instructor.addquestions')->with("video_id",$id);
}


public function  addVideosajax(Request $request)
{
    //      $validatedData = $request->validate([
    //     'videos' => 'required|mimes:mp4|max:2048',

    // ]);


    $coursef = new Course_files();


    //if request containd video files
    if($request->hasfile('videos'))
    {
        $filed=$request->file('videos');
        $filename = $filed->getClientOriginalName();


        //if video contains the require extension
           $path=$filed->store('/tempvideos');

            $coursef->course_file_title=$filename;
            $coursef->file_type="videocourse";
            $coursef->file_path=$path;
            session()->push('videos',$coursef);

            return Response()->json([
                "success" => true,
                "file" => '/videos'
            ]);

    }

   return Response()->json([
    "success" => false,
    "file" => ''
    ]);

}

public function  addpdfsajax(Request $request)
{
    //      $validatedData = $request->validate([
    //     'videos' => 'required|mimes:mp4|max:2048',

    // ]);

    $request->session()->get('coursepdffile');
    $coursef = new Course_files();


    //if request containd video files
    if($request->hasfile('pdfs'))
    {
        $filed=$request->file('pdfs');
        $filename = $filed->getClientOriginalName();
        // $extension = $files->getClientOriginalExtension();
        // $check=in_array($extension,$allowedfileExtension);

        //if video contains the require extension
           $path=$filed->store('/temppdfs');

            $coursef->course_file_title=$filename;
            $coursef->file_type="videopdf";
            $coursef->file_path=$path;
            session()->push('pdfs',$coursef);

            return Response()->json([
                "success" => true,
                "file" => '/pdfs'
            ]);

    }

   return Response()->json([
    "success" => false,
    "file" => ''
   ]);

}
//delete video
public function destroyvid($id,Request $request){

    $value = $request->session()->pull('coursefile', 'default');

    foreach($value as $vids){

        if(trim($vids->course_file_title,"")==trim($id,"")){
                if (($key = array_search($vids, $value)) !== false) {
                    unset($value[$key]);
                    $image_path = app_path("videos/{$vids->course_file_title}");

                    if (File::exists($image_path)) {

                        unlink($image_path);
                    }
                }
            }
    }
    session()->put('coursefile',$value);
    return response()->json([

        'success' => 'Record deleted successfully!'

    ]);

}
public function destroypdf($id,Request $request){

    $value = $request->session()->pull('coursepdffile', 'default');

    foreach($value as $vids){

        if(trim($vids->course_file_title,"")==trim($id,"")){
                if (($key = array_search($vids, $value)) !== false) {
                    unset($value[$key]);
                    $image_path = app_path("pdfs/{$vids->course_file_title}");

                    if (File::exists($image_path)) {

                        unlink($image_path);
                    }
                }
            }
    }
    session()->put('coursepdffile',$value);
    return response()->json([

        'success' => 'Pdf deleted successfully!'

    ]);

}

//Add cover page 3 save all
public function  addCover($id)
{

   if( $id!=null){
    return view('user.instructor.addcover')->with('courseid',$id);
   }
   else{
    return redirect()->route('addcontent',['id'=>$id]);
   }
}

public function  postaddCover(Request $request)
{
    $validatedData = $request->validate([
        'coverpic' => 'required|max:5048',


    ]);


                if($request->hasfile('coverpic'))
                {
                      $coursecoverpic=new Mediacover();
                      $filed=$request->file('coverpic');
                      $filename = $filed->getClientOriginalName();

                     $path=$filed->store('/coverpic');
                     $coursecoverpic->course_id=$request->courseid;
                     $coursecoverpic->title=$filename;
                     $coursecoverpic->file_type="coverpic";
                     $coursecoverpic->file_path=$path;
                     $coursecoverpic->save();
                }
                if($request->hasfile('covervid'))
                {

                    $coursecovervid=new Mediacover();
                    $filevid=$request->file('covervid');
                    $filename = $filevid->getClientOriginalName();

                    $path=$filevid->store('/covervid');
                    $coursecovervid->course_id=$request->courseid;;
                    $coursecovervid->title=$filename;
                    $coursecovervid->file_type="covervid";
                    $coursecovervid->file_path=$path;

                    $coursecovervid->save();
                }


return redirect()->route('viewcourse',['id'=>$request->courseid]);
}


public function courseDetail($id)
{

    $selcoz=Course::find($id);
    return view('user.instructor.coursedetail')->with('selcoz',$selcoz);
}

public function addcategory(Request $request)
{

    $category = Category::create([
        'category_name' => $request->category_name,

    ]);

    return Response()->json($category);
   }
public function addsubcategory(Request $request)
{

    $subcategory = SubCategory::create([
        'subcategory_name' => $request->subcategory_name,
        'category_id' => $request->category_Id,
    ]);

    return Response()->json($subcategory);
}

public function deleteacc()
{
    return view('user.account.deleteacc');
}
public function review()
{
    return view('user.instructor.review');
}
public function coursepurch()
{
    return view('user.instructor.coursepurch');
}
public function notification()
{
    return view('user.account.notification');
}
public function myaccount()
{
    return view('user.account.myaccount');
}
public function earnings()
{
    return view('user.instructor.earnings');
}
public function skills()
{
    return view('user.student.skills');
}
public function badges()
{
    return view('user.student.badges');
}
public function cert()
{
    return view('user.student.certificate');
}
public function createcert()
{
    return view('user.instructor.createcert');
}
public function category()
{

    $coz=Course::all();
    return view('user.category')->with('coz',$coz);
}
public function accSetting()
{
    return view('user.account.accsetting');
}
public function lcontent()
{
    return view('layouts.learncontent');
}
}

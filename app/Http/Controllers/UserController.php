<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Userpic;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Videos;
use App\Models\Mediacover;
use App\Models\Questions;
use App\Models\Answers;
use App\Models\Wishlist;
use App\Models\Course_files;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use DateTime;
use DateInterval;

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

    public function EditUser(Request $request)
    {


            $euser = new User();

            $muser = User::findOrFail(auth()->user()->id);
            if(isset($muser)){
                $muser->update([
             'fname' => $request->fname,
             'lname' => $request->lname,
             'email' => $request->email,
                ]);

                return response()->json([

                    'success' => 'Record deleted successfully!'

                ]);
            }

        }


    public function EditUserphoto(Request $request)
    {
            $pic = new Userpic();


            $muser = Userpic::where('user_id',auth()->user()->id)->first();

            if($request->hasfile('profpic'))
             {
                $filed = $request->file('profpic');
                $path = $filed->store('/profpic');
                if(isset($muser)){
                    $muser->update([
                        "file_title" => $filed->getClientOriginalName(),
                        "file_path" =>  $path,
                        "user_id" => auth()->user()->id,
                    ]);
                    return response()->json([

                        'success' => 'photo updated successfully!'

                    ]);
                }
                else{


                $pic->file_path= $path;
                $pic->user_id=auth()->user()->id;
                $pic->file_title=$filed->getClientOriginalName();

                $pic->save();
                return response()->json([

                    'success' => 'photo added successfully!'

                ]);
                }
            }


    }

    public function instructorCourses()
    {
        $cozes = Course::All();
        return view('user.instructor.instructor-courses')->with('cozes', $cozes);
    }

    public function analytics()
    {
        return view('user.instructor.analytics');
    }

    public function instructorDashboard()
    { $users = User::All();
        $cozes = Course::All();
        $totalall=Wishlist::all();
        return view('user.instructor.instructor-dashboard')->with('cozes', $cozes)
        ->with('toll', $totalall)
        ->with('users', $users);
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
        $response->header('Content-Type', 'image/{explode(".",$ppt)[1]}');

        return $response;
    }

    public function getcopic($pic)
    {
        $fileContents = Storage::disk('local')->get("coverpic/{$pic}");
        $response = Response($fileContents, 200);
        $response->header('Content-Type', 'image/{explode(".",$pic)[1]}');

        return $response;
    }

    public function profpic($pic)
    {
        $fileContents = Storage::disk('local')->get("profpic/{$pic}");
        $response = Response($fileContents, 200);
        $response->header('Content-Type', 'image/{explode(".",$pic)[1]}');

        return $response;
    }
    public function getcovid($vid)
    {
        $fileContents = Storage::disk('local')->get("covervid/{$vid}");
        $response = Response($fileContents, 200);
        $response->header('Content-Type', 'image/{explode(".",$vid)[1]})}');

        return $response;
    }

    public function viewCourse($id)
    {
        $course = course::find($id);
$meid=Wishlist::select('video_id')
                ->where('course_id',$id)->
                where('user_id',auth()->user()->id)->
                where('wishtype',"video")
                ->max('video_id');
        $videos = $course->Videos;
        // $covid=$course->mediaCover->where('file_type','covervid')->first();
        // $copic=MediaCover::Where('course_id',$id)->where('file_type','coverpic')->first();


        return view('user.instructor.viewcourse')->with('videos', $videos)
            ->with('meid', $meid)
            ->with('course', $course);


    }

    public function pptpics(Request $request)
    {

        $ppts = Course_files::where('file_type', 'pptcourse')->where('videos_id', $request->id)->get();

        return Response()->json($ppts);
    }

    public function listpics($id)
    {

        $pptic = Mediacover::where('course_id', $id)->get();

        return view('user.instructor.listpic')->with('pptic', $pptic);
    }

    public function deletepics($id)
    {
        $pic = Mediacover::find($id);
        $pic->delete();

        return Response()->json($pic);
    }

// Add course page 1
    public function addCourse()
    {

        $corses = Category::all();

        $subcorses = Subcategory::all();


        return view('user.instructor.create-courses')->with('corses', $corses)->with('subcorses', $subcorses);
    }
    //editcourse
    public function editCourse($id)
    {

        $maincourse =Course::find($id);
        $corses = Category::all();
        $subcorses = Subcategory::all();


        return view('user.instructor.edit-course')->with('corses', $corses)
        ->with('mcourse', $maincourse)
        ->with('subcorses', $subcorses);
    }
    public function posteditCourse(Request $request)
    {


        $course = Course::findOrFail($request->cid);
        $validatedData = $request->validate([
            'course_title' => 'required',
            'course_subt' => 'required',
            'language' => 'required',
            'category_Id' => 'required',
            'subcategory_Id' => 'required',
            'mainrequire' => 'required',
            'mainwlearn' => 'required',
            'price' => 'required',
            'course_des' => 'required',

        ]);

        try {

            $course->fill($validatedData)->save();


        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
        return redirect()->route('editcontent', ['id' => $course->id]);
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
            'course_des' => 'required',

        ]);
        $course = new Course();
        try {
            $course_ided = $course->create($validatedData);


        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
        return redirect()->route('addcontent', ['id' => $course_ided->id]);
    }

    public function deletecourse($id)
{
    $c = Course::find($id);
    foreach($c->Videos as $vi)
    {
        foreach($vi->question as $qn)
        {
            foreach($qn->answers as $an)
                {
                    $an->delete();
                }
            $qn->delete();
        }
        $vi->delete();
    }
        $c->delete();

        return Response()->json($c);
}
//Add course page 2

public function getDuration($url){


}
    public function addVideos($idcourse)
    {



        $videz=Videos::where('course_id',$idcourse)->get();
        return view('user.instructor.addvideo')->with('vidoz', $videz)
        ->with('course_id', $idcourse);
    }
    public function addVideos_edit($idcourse)
    {
        $videz=Videos::where('course_id',$idcourse)->get();
        return view('user.instructor.addvideo-edit')->with('vidoz', $videz);
    }
    public function postaddVideos(Request $request)
   {
   if(isset($request->video_id)){
        $coursem = Videos::findOrFail($request->video_id);
   }

        $cvideo = new Videos();
        $videos = new Videos();


        $path = $request->videos;
        $vat=explode('/',$path);
        $video_id=$vat[count($vat)-1];

        $dat=file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&part=contentDetails&key=AIzaSyBVwTLZE07d_pCEqifn42YFpcqDzD-wE3c');
        $duration = json_decode($dat, true);
        foreach ($duration['items'] as $vidTime) {
            $vTime= $vidTime['contentDetails']['duration'];
        }

        $start = new DateTime('@0'); // Unix epoch
        $start->add(new DateInterval($vTime));
        $vTime = $start->format('i:s');


        if(isset($coursem)){
            $coursem->update([
       "video_title" => $path,
       "video_path" => $path,
       "video_type" => $vTime,
       "video_desc" => $request->description,
       "course_id" => $request->course_id
            ]);

        $cvideo = $coursem;
    }
    else
    {
        $videos->video_title = $path;
        $videos->video_path = $path;
        $videos->video_type = $vTime;
        $videos->video_desc = $request->description;
        $videos->course_id = $request->course_id;

        $videos->save();
        $cvideo = $videos;
    }
//}
        if ($request->hasfile('pdfes') && $cvideo != null) {
            $coursef = new Course_files();
            $filed = $request->file('pdfes');
            $filename = $filed->getClientOriginalName();

            $path = $filed->store('/temppdf');
            $coursef->course_file_title = $filename;
            $coursef->file_type = "pdfcourse";
            $coursef->file_path = $path;
            $coursef->videos_id = $cvideo->id;
            $coursef->save();

        }
        if (isset($request->pptxes) && $cvideo != null) {
            foreach ($request->file('pptxes') as $pptes) {
                $course = new Course_files();

                $filename = $pptes->getClientOriginalName();

                $path = $pptes->store('/tempppt');
                $course->course_file_title = $filename;
                $course->file_type = "pptcourse";
                $course->file_path = $path;
                $course->videos_id = $cvideo->id;
                $course->save();
            }
        }

        return Response()->json($cvideo);

    }

    public function postaddVideos_edit(Request $request)
    {

        $coursem = Course::findOrFail($request->course_id);

        $cvideo = new Videos();

//if request containd video files
// if($request->hasfile('videos'))
// {
        $videos = new Videos();



        $path = $request->videos;
        $vat=explode('/',$path);
        $video_id=$vat[count($vat)-1];

        $dat=file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&part=contentDetails&key=AIzaSyBVwTLZE07d_pCEqifn42YFpcqDzD-wE3c');
        $duration = json_decode($dat, true);
        foreach ($duration['items'] as $vidTime) {
            $vTime= $vidTime['contentDetails']['duration'];
        }

        $start = new DateTime('@0'); // Unix epoch
        $start->add(new DateInterval($vTime));
        $vTime = $start->format('i:s');

        $videos->video_title = $path;
        $videos->video_type = $vTime;
        $videos->video_path = $path;
        $videos->course_id = $request->course_id;
        $videos->video_desc = $request->description;
        if(isset($coursem)){
            $coursem->fill($videos)->save();
        $cvideo = $coursem;
    }
    else
    {
        $videos->save();
        $cvideo = $videos;
    }
//}
        if ($request->hasfile('pdfes') && $cvideo != null) {
            $coursef = new Course_files();
            $filed = $request->file('pdfes');
            $filename = $filed->getClientOriginalName();

            $path = $filed->store('/temppdf');
            $coursef->course_file_title = $filename;
            $coursef->file_type = "pdfcourse";
            $coursef->file_path = $path;
            $coursef->videos_id = $cvideo->id;
            $coursef->save();

        }
        if (isset($request->pptxes) && $cvideo != null) {
            foreach ($request->file('pptxes') as $pptes) {
                $course = new Course_files();

                $filename = $pptes->getClientOriginalName();

                $path = $pptes->store('/tempppt');
                $course->course_file_title = $filename;
                $course->file_type = "pptcourse";
                $course->file_path = $path;
                $course->videos_id = $cvideo->id;
                $course->save();
            }
        }

        return Response()->json($cvideo);

    }
    //-----------Question-----------------------
    public function addQuestion($id)
    {
        $qstnlst=Questions::where('video_id',$id)->get();
        return view('user.instructor.addquestions')->with("qlst", $qstnlst)
        ->with("video_id", $id);
    }

    public function addQuestionpost(Request $request)
    {

        $question = new Questions();
        if ($request->question != null) {
            $question->question = $request->question;
            $question->questiontype = $request->questiontype;
            $question->video_id = $request->video_id;
            $question->save();


            if ($request->answer != null) {
                $ans = $request->answer;
                $anstype = $request->correct;


                for ($i = 0; $i < sizeof($ans); $i++) {
                    $answerz = new Answers();
                    $answerz->answer = $ans[$i];
                    if (isset($anstype[$i])) {

                        $answerz->answertype = "true";
                    } else {
                        $answerz->answertype = "false";
                    }

                    $answerz->question_id = $question->id;
                    $answerz->save();
                }
            }
        }

        return Response()->json($question);
    }
    public function deleteqstn($id)
{
    $q =Questions::find($id);

        $q->delete();
        $a=Answers::where('question_id',$id)->get();
        foreach($a as $an)
        {
            $an->delete();
        }

        return Response()->json($q);
}
//--------------question-------------------------
    public function takequiz($id)
    {
        $vido = Videos::find($id);
        $qstn = Questions::where('video_id', $id)->get();
        if (isset($qstn)) {
            return view('user.instructor.questin')->with("qstn", $qstn)->with("vido", $vido);
        }
        return redirect()->route('viewcourse', ['id' => $id]);
    }

    public function quizpost(Request $request)
    {
        $qstn = Questions::where('video_id', $request->videoid)->get();
        $videos = Videos::find($request->videoid);

        $count = 0;

        foreach ($qstn as $qnt) {
            $f = $qnt->id;
            $c = $request->$f;
            if (isset($c)) {
                $art = Answers::where('id', $c)->first()->answertype;
                if ($art == "true") {
                    $count++;
                }

            }
        }

        return view('user.instructor.results')->with('marks', $count)
            ->with('total', count($qstn))
            ->with('videos', $videos);
    }


    public function addVideosajax(Request $request)
    {
        //      $validatedData = $request->validate([
        //     'videos' => 'required|mimes:mp4|max:2048',

        // ]);


        $coursef = new Course_files();


        //if request containd video files
        if ($request->hasfile('videos')) {
            $filed = $request->file('videos');
            $filename = $filed->getClientOriginalName();


            //if video contains the require extension
            $path = $filed->store('/tempvideos');

            $coursef->course_file_title = $filename;
            $coursef->file_type = "videocourse";
            $coursef->file_path = $path;
            session()->push('videos', $coursef);

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

    public function addpdfsajax(Request $request)
    {
        //      $validatedData = $request->validate([
        //     'videos' => 'required|mimes:mp4|max:2048',

        // ]);

        $request->session()->get('coursepdffile');
        $coursef = new Course_files();


        //if request containd video files
        if ($request->hasfile('pdfs')) {
            $filed = $request->file('pdfs');
            $filename = $filed->getClientOriginalName();
            // $extension = $files->getClientOriginalExtension();
            // $check=in_array($extension,$allowedfileExtension);

            //if video contains the require extension
            $path = $filed->store('/temppdfs');

            $coursef->course_file_title = $filename;
            $coursef->file_type = "videopdf";
            $coursef->file_path = $path;
            session()->push('pdfs', $coursef);

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
public function deletevid($id)
{

    $p = Videos::find($id);
        $p->delete();

        return Response()->json($p);
}
    public function destroyvid($id, Request $request)
    {

        $value = $request->session()->pull('coursefile', 'default');

        foreach ($value as $vids) {

            if (trim($vids->course_file_title, "") == trim($id, "")) {
                if (($key = array_search($vids, $value)) !== false) {
                    unset($value[$key]);
                    $image_path = app_path("videos/{$vids->course_file_title}");

                    if (File::exists($image_path)) {

                        unlink($image_path);
                    }
                }
            }
        }
        session()->put('coursefile', $value);
        return response()->json([

            'success' => 'Record deleted successfully!'

        ]);

    }

    public function destroypdf($id, Request $request)
    {

        $value = $request->session()->pull('coursepdffile', 'default');

        foreach ($value as $vids) {

            if (trim($vids->course_file_title, "") == trim($id, "")) {
                if (($key = array_search($vids, $value)) !== false) {
                    unset($value[$key]);
                    $image_path = app_path("pdfs/{$vids->course_file_title}");

                    if (File::exists($image_path)) {

                        unlink($image_path);
                    }
                }
            }
        }
        session()->put('coursepdffile', $value);
        return response()->json([

            'success' => 'Pdf deleted successfully!'

        ]);

    }

//Add cover page 3 save all
    public function addCover($id)
    {

        return view('user.instructor.addcover')->with('courseid', $id);
    }

    public function postaddCover(Request $request)
    {
        $validatedData = $request->validate([
            'coverpic' => 'required|max:5048',


        ]);


        if ($request->hasfile('coverpic')) {
            $coursecoverpic = new Mediacover();
            $filed = $request->file('coverpic');
            $filename = $filed->getClientOriginalName();

            $path = $filed->store('/coverpic');
            $coursecoverpic->course_id = $request->courseid;
            $coursecoverpic->title = $filename;
            $coursecoverpic->file_type = "coverpic";
            $coursecoverpic->file_path = $path;
            $coursecoverpic->save();
        }
        if ($request->hasfile('covervid')) {

            $coursecovervid = new Mediacover();
            $filevid = $request->file('covervid');
            $filename = $filevid->getClientOriginalName();

            $path = $filevid->store('/covervid');
            $coursecovervid->course_id = $request->courseid;;
            $coursecovervid->title = $filename;
            $coursecovervid->file_type = "covervid";
            $coursecovervid->file_path = $path;

            $coursecovervid->save();
        }


        return redirect()->route('viewcourse', ['id' => $request->courseid]);
    }
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('term');

          $filterResult =Course::select('course_title')
          ->where('course_title', 'LIKE', '%'. $query. '%')->pluck('course_title');;

          return response()->json($filterResult);
    }
    public function searchcourse($search)
    {

        $cozes = Course::where('course_title','like','%'.$search.'%')->orderBy('id')->paginate(6);
        return view('user.student.searchcoz')->with('cozes', $cozes);
    }

    public function searchcoursepost(Request $request)
    {
        $cozes = Course::where('course_title','like','%'.$request->search.'%')->orderBy('id')->paginate(6);
        return view('user.student.searchcoz')->with('cozes', $cozes)
        ->with('searched', $request->search);
    }
    public function courseDetail($id)
    {

        $selcoz = Course::find($id);
        return view('user.instructor.coursedetail')->with('selcoz', $selcoz);
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
    public function wishlist(Request $request)
    {

        $wishd=Wishlist::where('course_id',$request->course_id)->
                         where('user_id',$request->user_id)->
                         where('video_id',$request->video_id)->
                         where('wishtype',$request->vel)->get();

                         if(count($wishd)>0){

                            return Response()->json($wishd);

                         }
                         else{
                            $wish = Wishlist::create([
                                'course_id' => $request->course_id,
                                'user_id' => $request->user_id,
                                'video_id' => $request->video_id,
                                'wishtype' => $request->vel,
                            ]);

                            return Response()->json($wish);
                         }

    }


    public function review()
    {
        return view('user.instructor.review');
    }

    public function coursepurch($id)
    {
        $course=Course::find($id);
        return view('user.instructor.coursepurch')->with('course',$course);
    }

    public function notification()
    {
        return view('user.account.notification');
    }

    public function myaccount()
    {
        $totalall=Wishlist::all();

        $wishes= $totalall->where('user_id',auth()->user()->id);
        $co=$wishes->groupBy("course_id");



        return view('user.account.myaccount')->with("wishes",$wishes)->with("totalall",$totalall)
        ->with("co",$co);
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
        $coz = Course::all();
        $cat = Category::all();
        $subcat = SubCategory::all();
        return view('user.category')->with('coz', $coz)
        ->with('cat', $cat)
        ->with('subcat', $subcat);
    }

    public function accSetting()
    {
        $muser = User::findOrFail(auth()->user()->id);
        return view('user.account.accsetting')->with('muser',$muser);
    }
    public function accSettingpost(Request $request)
    {
        $pic = new Userpic();
        $euser = new User();

        $muser = User::findOrFail(auth()->user()->id);
        if(isset($muser)){
        if($request->hasfile('profpic'))
         {
           $filed = $request->file('profpic');

        $path = $filed->store('/profpic');
        $pic->fil_path= $path;
        $pic->user_id=auth()->user()->id;
        $pic->file_title=$filed->getClientOriginalName();

        $pic->save();
         }
         $euser->fname = $request->fname;
         $euser->lname = $request->lname;
         $euser->email = $request->email;

         $muser->fill($euser)->save();
        return view('user.account.accsetting');
        }
    }

    public function lcontent()
    {
        return view('layouts.learncontent');
    }


}

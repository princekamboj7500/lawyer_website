<?php

use Carbon\Carbon;
use App\Doc;
use App\CaseTable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderDue;
use App\CustomUser;
use App\Appointment;
use App\Directory;
use App\Notifications\ReminderNotifications;
use App\LawyerProfile;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);

Route::controller(PaymentController::class)->group(function(){
    Route::get('stripe/{user}', 'index')->name('payment.stripe');
    Route::post('stripe', 'stripe')->name('stripe.post');
});

$user = auth()->user();

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/', [PagesController::class,'index']);

Route::get('/lawbook',[PagesController::class,'lawbook']);

Route::get('/services',[PagesController::class,'services']);

// Lawyer and client routes

Route::middleware(['user.active'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
    Route::get('/home',[PagesController::class,'home']);
    Route::get('/cases', [PagesController::class,'cases']);
    Route::get('/clients', [PagesController::class,'clients']);
    Route::post('/search/cases', [PagesController::class,'searchCases']);
    Route::post('/search/clients', [PagesController::class,'searchClients']);
    Route::get('/reminder', [PagesController::class,'reminder']);
    Route::post('/reminder', [PagesController::class,'storeReminder']);
    Route::get('/profile', [PagesController::class,'profile']);
    Route::get('/docs',[PagesController::class,'docs']);
    Route::get('docs/upload', [PagesController::class,'uploaddocs']);
    Route::get('cases/add', [PagesController::class,'addcase']);
    Route::post('/cases/add',[PagesController::class,'store']);
    Route::get('/cases/current', [PagesController::class,'currentcases']);
    Route::get('/cases/show/{id}',function($id){
        $case = CaseTable::find($id);
        $docs = $docs = Doc::where('case_id', $case->id)->with(['uploadedBy:id,type,name'])->get();

        return view('pages.showCase')->with(['case' => $case, 'docs' => $docs]);
    });
    //update
    Route::get('/update-case-status/{case_id}/{status}', [PagesController::class, 'updateCaseStatus'])->name('case.updateStatus');
    Route::post('/update/acts/{id}', [PagesController::class,'updateActs']);
    Route::post('/update/petitioner/{id}', [PagesController::class,'updatePetitioner']);
    Route::post('/update/respondent/{id}', [PagesController::class,'updateRespondent']);
    Route::post('/docs/upload',[PagesController::class,'upload']);
    Route::post('/add/hearing/{id}', [PagesController::class,'addHearing']);

    Route::get('/view/hearing',function(){
        return view('pages.demoHearinng');
    });
    Route::get('/appointment', function () {
        return view('pages/appointment');
    });
    Route::post('/appointment',[PagesController::class,'appointment']);
    Route::get("/subscriptions", [PagesController::class, 'getSubscriptions']);

    Route::get('/case-summary', function () {
        $session = Session::all();
        $case_type = Session::get('bot_issue_type') ? Session::get('bot_issue_type') : 'Civiel recht';
        $lawyers = CustomUser::where('type', 'lawyer')->where('specializations', 'LIKE', '%"'.$case_type.'"%')->limit(3)->get();
        return view('pages.summary')->with(['session' => $session,'lawyers' => $lawyers]);
    });
    Route::post('/update/profile/{id}',[PagesController::class,'updateprofile']);
});

Route::get('/admin', function () {
    $result = CustomUser::where('type','!=','admin')->get();
    return view("admin/admin",compact('result'));
});

Route::get('/lawyers', function () {
    return view('pages/lawyers');
});

Route::get('/request/appointment/{id}', function ($id) {
    if(Auth::check())    
        return view('pages/requestAppointment')->with('id',$id);
    else
        return redirect('/login');
});

Route::post('/request/appointment/{id}', [PagesController::class,'requestAppointment']);

Route::get('download/{path}', function ($path) {
    return response()->download(storage_path('app/docs/' . $path));
});

Route::get('view/{path}',function($path){
    return response()->file(storage_path('app/docs/' . $path));
});

Route::get('/admin/cases', function () {
    $cases = DB::table('case_table')
                ->join('customusers as client', 'case_table.client_id', '=', 'client.id')
                ->join('customusers as lawyer', 'case_table.lawyer_id', '=', 'lawyer.id')
                ->select('case_table.*', 'client.name as client_name', 'lawyer.name as lawyer_name')
                ->get();
    return view('admin.cases',compact('cases'));
});
Route::get('/admin/cases/show/{id}',function($id){
    $case = CaseTable::find($id);
    $docs = $docs = Doc::where('case_id', $case->id)->with(['uploadedBy:id,type,name'])->get();

    return view('admin.show-case')->with(['case' => $case, 'docs' => $docs]);
});
Route::get('/admin/user/show/{id}',function($id){
    $profile = CustomUser::find($id);
    return view('admin.user-detail')->with(['profile' => $profile]);
});

Route::get('/admin/content-management', [PagesController::class, 'getPageContents']);
Route::get('/admin/blogs', [PagesController::class, 'getBlogs']);
Route::post('/admin/create/blog', [PagesController::class, 'createBlog'])->name('blog.store');
Route::get('/admin/edit/blog/{id}', [PagesController::class, 'editBlog']);
Route::post('/admin/update/blog/{id}',[PagesController::class,'updateBlog']);
Route::post('/admin/upload', [PagesController::class, 'uploadImage'])->name('upload');
Route::post('/admin/update-content', [PagesController::class, 'updateContent'])->name('update.content');

Route::get('/admin/docs', function () {
    return view('admin.docs');
});
Route::get('/admin/reminder', function () {
    return view('admin.reminder');
});

Route::get('/test', function () {
    event(new App\Events\ReminderAdded(auth()->user()->id,auth()->user()->name,'Appointment',auth()->user()->type,'TEST DESCRIPTION',Carbon::now()->toDateTimeString()));
    //return "Event has been sent!";
    return redirect('/dashboard');
});

Route::get('/email', function () {
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->to('earnmoneyonline5253@gmail.com');
	});
});

Route::get('/search/lawyers', function () {
    return view('pages.searchLawyers');
});

// //docs
Route::get('/docs/verify/{id}', function ($id) {
    $updateDoc = Doc::find($id);
    $updateDoc->verified = "verified";
    $client = CustomUser::find($updateDoc->upload_by);
    $document = $updateDoc->document_name;
    $description = $updateDoc->description;
    $caseID = $updateDoc->case_id;
    $updateDoc->save();
    $clientName = $client->name;
    $clientEmail = $client->email;
    $data = array('name'=>$clientName, 'email'=>$clientEmail ,'document' =>$document,'caseID'=>$caseID, 'description'=>$description);
    Mail::send('email.doc', $data, function($message) use ($data) {
        $message->to($data['email'], $data['name'])->subject
            ('Document Verified!');
        $message->from('webportalforlawyers@gmail.com','Hatim');
    });
    return redirect('/docs');
});

Route::get('/docs/unverify/{id}', function ($id) {
    $updateDoc = Doc::find($id);
    $updateDoc->verified = "rejected";
    $updateDoc->save();
    return redirect('/docs');
});

//appointment
Route::get('/appointment/accept/{id}', function ($id) {
    $updateApp = Appointment::find($id);
    $updateApp->accepted = "accepted";
    $user = CustomUser::find($updateApp->user_id);
    $date = $updateApp->date;
    $updateApp->save();
    $name = $user->name;
    $email = $user->email;
    $lawyer = auth()->user();
    $lawyerName = $lawyer->name;
    $lawyerEmail = $lawyer->email;
    $data = array('name'=>[$lawyerName,$name], 'email'=>[$lawyerEmail,$email],'date'=>$date);
    Mail::send('email.appointment', $data, function($message) use ($data) {
        $message->to($data['email'], $data['name'])->subject
            ('Appointment Scheduled!');
        $message->from('webportalforlawyers@gmail.com','Hatim');
    });
    return redirect('/dashboard');
});

Route::get('/appointment/unaccept/{id}', function ($id) {
    $updateApp = Appointment::find($id);
    $updateApp->accepted = "rejected";
    $updateApp->save();
    return redirect('/dashboard');
});

Route::get('/show/profile/{id}',function($id){
    $profile = CustomUser::find($id);
    return view('pages.showProfile')->with('profile',$profile);
})->name('admin.view.user');

//admin
Route::post('/admin/add', [PagesController::class,'addAdmin']);
Route::post('/admin/add/case', [PagesController::class,'addAdminCase']);
Route::post('/admin/add/client', [PagesController::class,'addAdminClient']);
Route::post('/admin/add/docs', [PagesController::class,'addAdminDoc']);
Route::post('/admin/add/reminder', [PagesController::class,'addAdminReminder']);
Route::post('/admin/remove/{id}', [PagesController::class,'deleteAdmin']);
Route::post('/admin/remove/case/{id}', [PagesController::class,'deleteCase']);
Route::post('/admin/remove/client/{id}', [PagesController::class,'deleteClient']);
Route::post('/admin/remove/doc/{id}', [PagesController::class,'deleteDoc']);
Route::post('/admin/remove/reminder/{id}', [PagesController::class,'deleteReminder']);
Route::get('/admin/activate-user/{id}', [PagesController::class,'activateUser'])->name('admin.user.active');


// //mail
Route::get('/send/email', [PagesController::class,'emailSend']);
// Route::get('/sendbasicemail','MailController@basic_email');
// Route::get('/sendhtmlemail','MailController@html_email');
// Route::get('welcome/{id}', 'MailController@lawyerWelcome');

//lawbook search
// Route::post('/search/lawbook', function (Request $request) {
//     $q = Input::get ( 'searchTerm' );
//     $laws = Directory::where('name','LIKE','%'.$q.'%')->orWhere('detail','LIKE','%'.$q.'%')->get();
//     if(count($laws) > 0)
//         return view('lawbook')->with('laws',$laws)->withQuery ( $q );
//     else return view ('lawbook')->withMessage('No Details found. Try to search again !');
// });
Route::post('/search/lawbook',[PagesController::class,'searchLawbook']);
Route::get('/search/lawyers', function(){
    return view('pages.searchLawyers');
});
Route::post('/search/lawyers',[PagesController::class,'searchLawyers']);
Route::post('/search/lawyers/category',[PagesController::class,'searchLawyersCategory']);

//test
// Route::get('/test', function () {
//     $user = auth()->user();
//     //$user->notify(new Reminder("Welcome to the Web Portal for Lawyers."));
//     $name = $user->name;
//         $email = $user->email;
//         $data = array('name'=>$name, 'email'=>$email);
//         Mail::send('email.lawyerWelcome', $data, function($message) use ($data) {
//             $message->to($data['email'], $data['name'])->subject
//                 ('Welcome to the Web Portal');
//             $message->from('webportalforlawyers@gmail.com','Hatim');
//         });
//     return view('/dashboard');
//     // return date('Y-d-m');
// });


//search 
Route::post('/search/clients', [PagesController::class,'searchCLawyers']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

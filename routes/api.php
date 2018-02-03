<?php

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\User;
use App\Models\Training;
use App\Models\Project;
use App\Models\Product;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Msgcontact;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/skills', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Skill::get();
});

Route::middleware('auth:api')->get('/users', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return User::get();
});


Route::middleware('auth:api')->get('/trainings', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Training::get();
});

Route::middleware('auth:api')->get('/projects', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Project::get();
});

Route::middleware('auth:api')->post('/sendmail', function (Request $request) {
    header("Access-Control-Allow-Origin: *"); 
    $result = JSON_decode($request->getContent(),true);
    
    $msgcontact = new Msgcontact();
    $msgcontact->category_id = $result['raison'] ;
    $msgcontact->last_name = $result['nom'] ;
    $msgcontact->first_name = $result['prenom'] ;
    $msgcontact->email = $result['addrMail'];
    $msgcontact->phone = $result['tel'] ;
    $msgcontact->subject = $result['sujet'] ;
    $msgcontact->message = $result['msguser'] ;
    $msgcontact->save();

    Mail::to('kozluk.pierre@gmail.com')
          ->send(new Contact($result));


    if(count(Mail::failures()) > 0) {
        return "Echec lors du traitement !". $result;

    } 
    else{
        return "Succès du traitement.";
    }
});

Route::get('/products', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Product::get();
});


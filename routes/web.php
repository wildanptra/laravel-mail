<?php
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email',function(){
    $data = [
        'name' => 'Wildan Pratama',
        'body' => 'Testing Kirim Email'
    ];

    Mail::to('wildanptra03@gmail.com')->send(new SendEmail($data));

    dd("Email Berhasil dikirim.");
});

Route::get('/test-email', function(){
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('emails.index', [], function($message){
        $message->from('creativeindohomecare@gmail.com')->to('hamdani.hams456@gmail.com', 'Hamdani')->subject('Welcome !');
    });
    dd("Email Berhasil dikirim.");
});

Route::get('/test', function()
{
	$beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
	$beautymail->send('welcome', [], function($message)
	{
		$message
			->to('hamdani.hams456@gmail.com', 'John Smith')
			->subject('ANJAY WILDAN GANTENG!');
	});

});

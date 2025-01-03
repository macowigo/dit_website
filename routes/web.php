<?php

use App\Http\Controllers\Admin\WebsiteVisitorsController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes([
  'verify' => false,
  'register'=>false,
  'reset'=>false,
  'login'=>false
]);


Route::get('login/1f6ce084-e1a8-4435-8518/3385791e2b36', 'Auth\LoginController@showLoginForm')->name('login_1');
Route::post('login/1f6ce084-e1a8-4435-8518/3385791e2b36', 'Auth\LoginController@login')->name('login_2');

############Landing Page####################
Route::group(
 [   'middleware' => ['guest'],
     'prefix' => '/',
 ], function () {

Route::get('/', 'web\HomePageController@index')->name('web.home.index');

});


Route::group(
[   'middleware' => ['guest'],
    'prefix' => '/ad18942s08oub',
], function (){

  Route::get('/news', 'web\HomePageController@news')->name('web.home.news');
  Route::get('/results', 'web\HomePageController@results')->name('web.home.results');
  Route::get('/mnews', 'web\HomePageController@mnews')->name('web.home.mnews');
  Route::get('/new/{id}', 'web\HomePageController@single_new')->name('web.home.single_new');
  Route::get('/news_attachment/{id}', 'web\HomePageController@news_attachment')->name('web.home.news_attachment');
  Route::get('/event_attachment/{id}', 'web\HomePageController@event_attachment')->name('web.home.event_attachment');
  Route::get('/event/{id}', 'web\HomePageController@single_event')->name('web.home.single_event');
  Route::get('/events', 'web\HomePageController@events')->name('web.home.events');
  Route::get('/project', 'web\HomePageController@project')->name('web.home.project.index');
  Route::get('/ntp-project', 'web\HomePageController@ntp')->name('web.home.project.ntp');
  Route::get('/ongoing-projects', 'web\HomePageController@ongoing')->name('web.home.project.ongoing');
  Route::get('/inhub', 'web\HomePageController@inhub')->name('web.home.project.inhub');
  Route::get('/inhub/2023-2024', 'web\HomePageController@inhub2')->name('web.home.project.inhub2');


  Route::get('/alumni', 'web\AlumniPageController@index')->name('web.alumni.index');
  Route::get('/register/alumni', 'web\AlumniPageController@register')->name('web.alumni.register');
  Route::post('/alumni', 'web\AlumniPageController@store')->name('web.alumni.post');

  Route::get('/publication', 'web\HomePageController@publication')->name('web.about_us.publication');
  Route::get('/partners', 'web\HomePageController@partners')->name('web.about_us.partners');


  Route::get('/about', 'web\AboutPageController@index')->name('web.about_us.index');
  Route::get('/publication_attachment/', 'web\AboutPageController@publication_attachment')->name('web.about.publication_attachment');
  Route::get('/contact', 'web\ContactPageController@index')->name('web.contact.index');
  Route::get('/dit-company', 'web\CompanyPageController@index')->name('web.company.index');
  Route::get('/management', 'web\ManagementPageController@index')->name('web.management.index');
  Route::get('/e_resources', 'web\HomePageController@e_resources')->name('web.home.e_resources');

});

/*ADMISSION  */
Route::group(
[   'middleware' => ['guest'],
    'prefix' => '/academic',
], function (){

  Route::get('/admission/programme', 'admission\ProgrammeController@index')->name('admission.programme');
  Route::get('/admission/requirements', 'admission\ProgrammeController@requirements')->name('admission.requirements');
  Route::get('/admission/fees', 'admission\ProgrammeController@fees')->name('admission.fees');
  /*Route::get('/apply', 'admission\ApplyPageController@index')->name('admission.apply'); */

});

/*DEPARTMENTS*/
Route::group(
[   'middleware' => ['guest'],
    'prefix' => '/stats_webull',
], function (){

Route::get('/department/{id}{name}', 'departments\DepartmentPageController@index')->name('department.index');
Route::get('/department/{id}/staff', 'departments\DepartmentPageController@staffs')->name('department.staff');
Route::get('/about/staff', 'web\StaffPageController@all_staff')->name('web.all_staff');
Route::get('/about/staff/{id}', 'web\StaffPageController@single_staff')->name('web.single_staff');

/*CAMPUSES*/
Route::get('/campus/', 'campus\CampusPageController@index')
->name('web.campus.index');
Route::get('/campuses/{id}{name}', 'campus\CampusPageController@campuses')
->name('web.campuses.cmp');
Route::get('/myunga', 'campus\MyungaPageController@myunga_campus')
->name('web.campus.myunga');
});

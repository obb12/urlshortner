<?php
use App\Url;
use Illuminate\Http\Request;

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
Route::get('/api/shorturl/{id}', function ($id) {
  $url = Url::find($id);
  return redirect()->away($url->original_url);

});
Route::post('/api/shorturl/new', function (Request $request) {
  $url = new Url;
  if (filter_var($request->url, FILTER_VALIDATE_URL) === FALSE) {
    return response()->json(['error' =>'invalid URL']);

}
$url->original_url = $request->url;
$url->save();
    return response()->json(['original_url' =>$url->original_url,'short_url' => $url->id]);
});

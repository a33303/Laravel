<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryNewsContoller;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;


$text = 'Приветствуя Вас на моей странице!';
$title = 'Первый сайт на Laravel';

Route::get('/', function () use ($text, $title){
    return <<<php
<!doctype   html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <title>$title</title>
</head>
<body>
    <h1>$text</h1>
    Моя первая страница на Laravel
</body>
</html>
php;
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [IndexController::class, 'index'])
        ->name('admin');
    Route::resource('news', AdminNewsController::class);
    Route::resource('categories', CategoryController::class);
});

Route::group(['prefix' => 'news', 'as' => 'news.'], function() {
    Route::get('/', [NewsController::class, 'index'])
        ->name('index');
    Route::get('/{id}', [NewsController::class, 'show'])
      ->where('id','\d+')
        ->name('show');
    Route::get('/create', [NewsController::class, 'create'])
        ->name('create');

});

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback');
Route::get('/login', [AuthController::class, 'index'])
    ->name('login');

Route::get('/category', [CategoryNewsContoller::class, 'index'])
    ->name('category');


/*Route::get('/add_news', [AddNewsController::class, 'add_news'])
    ->name('add_news');*/

/*
 * <div><a href="/">Home</a><a href="/catery">Category</a></div>
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



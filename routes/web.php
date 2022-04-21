<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Category;
use App\Models\Home;
use App\Models\User;
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


#Dengan Controller
Route::get('/home', [HomeController::class, 'index']);


#Tanpa Controller
/*Route::get('/home', function () {

    return view('home', [
        // Kita bisa membuat title dinamis dengan memanggil variabel ini di halaman blade
        "title" => "Halaman Home",
        // postingan mengambil data dari model Home dengan function all()
        "postingan" => Home::all()
    ]);
});
*/




#Dengan Controller
// halaman single post di halaman home
Route::get('/home/{post:slug}', [HomeController::class, 'onePost']);

#Tanpa Controller
/*
halaman single post di halaman home
Route::get('/home/{slug}', function($slug) {

    return view('singlepost', [
        "title" => "Halaman Slug",
        "slugPost" => Home::find($slug)
    ]);
});
 */



#Dengan Controller
Route::get('/about', [AboutController::class, 'showImage']);


#Tanpa Controller
/* 
Route::get('/about', function () {
    # Kita mengirim data sehingga di view cukup echo nama variabel
    return view('about', [
        "title" => "Halaman About",

        "name1" => "Beomgyu",
        "nationality1" => "Korea",
        "image1" => "beomgyu.jpg",

        "name2" => "Taehyun",
        "nationality2" => "Korea",
        "image2" => "taehyun.jpg",

        "name3" => "Sana",
        "nationality3" => "Japan",
        "image3" => "sana.jpg",

        "name4" => "Eunha",
        "nationality4" => "Korea",
        "image4" => "eunha.jpg",

        "name5" => "Taehyung",
        "nationality5" => "Korea",
        "image5" => "btsV.png",

        "name6" => "Yeonjun",
        "nationality6" => "Korea",
        "image6" => "txtyeonjun.png",

        "name7" => "Soobin",
        "nationality7" => "Korea",
        "image7" => "txtsoobin.jpeg",

        "name8" => "Hueningkai",
        "nationality8" => "Korea",
        "image8" => "txthyuka.jpg"
    ]);
});
*/




#Dengan Controller
Route::get('/contact', [ContactController::class, 'showNumber']);





#Tanpa Controller  
/* 
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Halaman Contact",

        "name1" => "Beomgyu",
        "email1" => "txt.beomgyu@bighitmusic.com",
        "contact1" => "+8263063163",

        "name2" => "Taehyun",
        "email2" => "txt.taehyun@bighitmusic.com",
        "contact2" => "+8235213210",

        "name3" => "Sana",
        "email3" => "twice.sana@jyp.com",
        "contact3" => "+8214725023",

        "name4" => "Eunha",
        "email4" => "viviz.eunha@bpm.com",
        "contact4" => "+8271274841",

        "name5" => "Taehyung",
        "email5" => "bts.taehyung@bighitmusic.com",
        "contact5" => "+821055538203",

        "name6" => "Yeonjun",
        "email6" => "txt.yeonjun@bighitmusic.com",
        "contact6" => "+821055570582",

        "name7" => "Soobin",
        "email7" => "txt.soobin@bighitmusic.com",
        "contact7" => "+82105557458",

        "name8" => "Hueningkai",
        "email8" => "txt.hueningkai@bighitmusic.com",
        "contact8" => "+8217695123"
    ]);
});
 */

# Menampilkan halaman dengan isi semua jenis kategori yang ada
Route::get('/categories', [CategoriesController::class, 'index']);

/* Code Sudah Tidak Terpakai Karena ScopeFilter di Home.php

# Menampilkan postingan berdasarkan jenis kategorinya
Route::get('/categories/{category:slug}', [CategoryController::class, 'showPostByCategory']);

# Menampilkan postingan yang telah diupload oleh masing-masing user
Route::get('/authors/{author:username}', [AuthorController::class, 'showByAuthor']);
*/

# Login Route
Route::get('/login', [LoginController::class, 'index']);
<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'courses' => [
            'CSS-Advanced' => [
                'order' => 1,
                'title' => 'دوره آموزش CSS',
                'limoonad_title' => 'آموزش css پیشرفته (پروژه محور)',
                'limoonad_id' => 183015,
                'githhub' => '',
                'seasons' => 9,
            ],
            'Django' => [
                'order' => 2,
                'title' => 'دوره آموزش جنگو',
                'limoonad_title' => 'آموزش جنگو (Django) - جامع و پروژه محور    ',
                'limoonad_id' => 182929,
                'githhub' => '',
                'seasons' => 10,
            ],
            'Git' => [
                'order' => 3,
                'title' => 'دوره آموزش Git',
                'limoonad_title' => 'آموزش git - ضروریات گیت برای برنامه نویسان',
                'limoonad_id' => 194948,
                'githhub' => '',
                'seasons' => 2,
            ],
            'JavaScript' => [
                'order' => 4,
                'title' => 'دوره آموزش JavaScript',
                'limoonad_title' => 'آموزش پروژه محور جاوا اسکریپت',
                'limoonad_id' => 183060,
                'githhub' => '',
                'seasons' => 8,
            ],
            'Laravel-8' => [
                'order' => 5,
                'title' => 'دوره لاراول مقدماتی',
                'limoonad_title' => 'دوره آموزش لاراول 8 پروژه محور',
                'limoonad_id' => 195005,
                'githhub' => '',
                'seasons' => 3,
            ],
            'Laravel-8-Advanced' => [
                'order' => 6,
                'title' => 'دوره لاراول پیشرفته',
                'limoonad_title' => 'دوره آموزش پیشرفته لاراول 8 - پروژه اسنپ فود',
                'limoonad_id' => 195059,
                'githhub' => '',
                'seasons' => 5,
            ],
            'Laravel-CC' => [
                'order' => 7,
                'title' => 'دوره آموزش Laravel',
                'limoonad_title' => 'آموزش laravel پیشرفته - پروژه طراحی سیستم باشگاه مشتریان',
                'limoonad_id' => 172611,
                'githhub' => '',
                'seasons' => 2,
            ],
            'mysql' => [
                'order' => 8,
                'title' => 'دوره آموزش MySQL',
                'limoonad_title' => 'دوره آموزش MySQL از پایه تا پیشرفته',
                'limoonad_id' => 193850,
                'githhub' => '',
                'seasons' => 5,
            ],
            'Python' => [
                'order' => 9,
                'title' => 'دوره آموزش پایتون',
                'limoonad_title' => 'آموزش پایتون از صفر | مناسب برای شروع برنامه نویسی',
                'limoonad_id' => 182921,
                'githhub' => '',
                'seasons' => 13,
            ],
            'Bootstrap' => [
                'order' => 10,
                'title' => 'دوره آموزش Bootstrap',
                'limoonad_title' => 'آموزش بوت استرپ 4 پروژه محور (دوره جامع)',
                'limoonad_id' => 162467,
                'githhub' => '',
                'seasons' => 6,
            ],
            'RTL' => [
                'order' => 11,
                'title' => 'دوره آموزش RTL',
                'limoonad_title' => 'آموزش راست چین کردن قالب html و بوت استرپ',
                'limoonad_id' => 162474,
                'githhub' => '',
                'seasons' => 1,
            ],
        ],
        'links' => [
            'YouTube' => [
                'order' => 1,
                'title' => 'یوتیوب من',
                'address' => 'https://www.youtube.com/@yourdailycodes',
                'text' =>  'من یه کانال یوتیوب هم دارم که هر چند وقت یه بار یه سری ویدئوهای مرتبط با برنامه‌نویسی توش میذارم. اگه دوس داشتی میتونی یه نگاهی بهش بندازی. البته تو یوتیوب ویدئوهایی که میذارم به زبان انگلیسی هستن.',
            ],
            
            'Telegram' => [
                'order' => 4,
                'title' => 'تلگرام من',
                'address' => 'https://t.me/@eylayir',
                'text' =>  'اگه سوالی داشتی هم میتونی از طریق تلگرام از من بپرسی. البته یه مدتی بود که از آموزش و پشتیبانی دور بودم، به همین خاطر نتونستم خوب پشتیبانی بدم. اما از الان به بعد آماده پشتیبانی و جواب دادن به سوالاتتون هستم.',
            ],

            'Limoonad' => [
                'order' => 2,
                'title' => 'صفحه من در لیموناد',
                'address' => 'https://www.limoonad.com/teacher/ali.seyfi68',
                'text' =>  'لیست کامل همه‌ی دوره‌هام توی وبسایت لیموناد هستش و هر دوره‌ای هم که ضبط کنم، اولین جایی که آپلود کنم همین جا خواهد بود. خیلی وقته که دوره ضبط نکردم، اما به زودی دوره‌های جدیدی رو از من خواهید دید.',
            ],
            
            'Aparat' => [
                'order' => 3,
                'title' => 'کانال آپارات',
                'address' => 'https://www.aparat.com/codeamooz',
                'text' =>  'با وجود اینکه خیلی به کانال آپاراتم نمی‌رسم بازدید خوبی داره. البته من فقط دوره‌های رایگانم رو روی آپارات گذاشتم و دوره‌های غیر رایگانم رو هم بعضی از ویدئوهاشو فقط اونجا گذاشتم. دوست داشتی یه نگاهی بنداز.',
            ],
        ]
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

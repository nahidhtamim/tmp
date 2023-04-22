<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwardCertifiateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EquipmentCardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\VideoController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/our-services/{slug}',[HomeController::class, 'service_details']);
Route::get('/turn-key-solutions/{slug}',[HomeController::class, 'solution_details']);
Route::get('/our-sectors/{slug}',[HomeController::class, 'sector_details']);
Route::get('/page/{slug}',[HomeController::class, 'page_details']);
Route::get('/blogs',[HomeController::class, 'blogs']);
Route::get('/blog-details/{slug}',[HomeController::class, 'blog_details']);
Route::get('/customers',[HomeController::class, 'customers']);
Route::get('/timeline',[HomeController::class, 'timeline']);
Route::get('/awards-and-certifications',[HomeController::class, 'awards_certifications']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::post('/send-email', [MailController::class, 'contactMail'])->name('contact.send');

Auth::routes(['login' => false, 'register' => false]);
Route::get('admin-do-create', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('admin-do-create', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');

Route::get('admin-do-login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('admin-do-login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard',[AdminController::class, 'dashboard']);
    Route::post('/update-password', [AdminController::class, 'updatePassword']);

    Route::post('/add-video',[VideoController::class, 'addVideo']);
    Route::get('/edit-video/{id}',[VideoController::class, 'editVideo']);
    Route::post('/update-video/{id}',[VideoController::class, 'updateVideo']);

    Route::get('/view-services',[ServiceController::class, 'viewAllServices']);
    Route::post('/add-service',[ServiceController::class, 'addService']);
    Route::get('/edit-service/{id}',[ServiceController::class, 'editService']);
    Route::post('/update-service/{id}',[ServiceController::class, 'updateService']);
    Route::get('/delete-service/{id}',[ServiceController::class, 'deleteService']);
    Route::get('/make-service-active/{id}', [ServiceController::class, 'activeService']);
    Route::get('/make-service-deactive/{id}', [ServiceController::class, 'deactiveService']);

    Route::get('/view-awards-certificates',[AwardCertifiateController::class, 'viewAwardCertificates']);
    Route::post('/add-award-certificate',[AwardCertifiateController::class, 'addAwardCertificate']);
    Route::get('/edit-award-certificate/{id}',[AwardCertifiateController::class, 'editAwardCertificate']);
    Route::post('/update-award-certificate/{id}',[AwardCertifiateController::class, 'updateAwardCertificate']);
    Route::get('/delete-award-certificate/{id}',[AwardCertifiateController::class, 'deleteAwardCertificate']);
    Route::get('/make-award-certificate-active/{id}', [AwardCertifiateController::class, 'activeAwardCertificate']);
    Route::get('/make-award-certificate-deactive/{id}', [AwardCertifiateController::class, 'deactiveAwardCertificate']);
    Route::get('/make-award-certificate-featured/{id}', [AwardCertifiateController::class, 'makeAwardCertificateFeatured']);
    Route::get('/make-award-certificate-not-featured/{id}', [AwardCertifiateController::class, 'makeAwardCertificateNotFeatured']);

    Route::get('/view-blogs',[BlogController::class, 'viewAllBlogs']);
    Route::post('/add-blog',[BlogController::class, 'addBlog']);
    Route::get('/edit-blog/{id}',[BlogController::class, 'editBlog']);
    Route::post('/update-blog/{id}',[BlogController::class, 'updateBlog']);
    Route::get('/delete-blog/{id}',[BlogController::class, 'deleteBlog']);
    Route::get('/make-blog-active/{id}', [BlogController::class, 'activeBlog']);
    Route::get('/make-blog-deactive/{id}', [BlogController::class, 'deactiveBlog']);
    Route::get('/make-blog-featured/{id}', [BlogController::class, 'makeBlogFeatured']);
    Route::get('/make-blog-not-featured/{id}', [BlogController::class, 'makeBlogNotFeatured']);

    Route::get('/view-pages',[PageController::class, 'viewAllPages']);
    Route::post('/add-page',[PageController::class, 'addPage']);
    Route::get('/edit-page/{id}',[PageController::class, 'editPage']);
    Route::post('/update-page/{id}',[PageController::class, 'updatePage']);
    Route::get('/delete-page/{id}',[PageController::class, 'deletePage']);
    Route::get('/make-page-active/{id}', [PageController::class, 'activePage']);
    Route::get('/make-page-deactive/{id}', [PageController::class, 'deactivePage']);

    Route::get('/view-partners',[PartnerController::class, 'viewAllPartners']);
    Route::post('/add-partner',[PartnerController::class, 'addPartner']);
    Route::get('/edit-partner/{id}',[PartnerController::class, 'editPartner']);
    Route::post('/update-partner/{id}',[PartnerController::class, 'updatePartner']);
    Route::get('/delete-partner/{id}',[PartnerController::class, 'deletePartner']);
    Route::get('/make-partner-active/{id}', [PartnerController::class, 'activePartner']);
    Route::get('/make-partner-deactive/{id}', [PartnerController::class, 'deactivePartner']);

    Route::get('/view-timelines',[TimelineController::class, 'viewAllTimelines']);
    Route::post('/add-timeline',[TimelineController::class, 'addTimeline']);
    Route::get('/edit-timeline/{id}',[TimelineController::class, 'editTimeline']);
    Route::post('/update-timeline/{id}',[TimelineController::class, 'updateTimeline']);
    Route::get('/delete-timeline/{id}',[TimelineController::class, 'deleteTimeline']);
    Route::get('/make-timeline-active/{id}', [TimelineController::class, 'activeTimeline']);
    Route::get('/make-timeline-deactive/{id}', [TimelineController::class, 'deactiveTimeline']);

    Route::get('/view-equipment-cards',[EquipmentCardController::class, 'viewAllEquipmentCards']);
    Route::post('/add-equipment-card',[EquipmentCardController::class, 'addEquipmentCard']);
    Route::get('/edit-equipment-card/{id}',[EquipmentCardController::class, 'editEquipmentCard']);
    Route::post('/update-equipment-card/{id}',[EquipmentCardController::class, 'updateEquipmentCard']);
    Route::get('/delete-equipment-card/{id}',[EquipmentCardController::class, 'deleteEquipmentCard']);
    Route::get('/make-equipment-card-active/{id}', [EquipmentCardController::class, 'activeEquipmentCard']);
    Route::get('/make-equipment-card-deactive/{id}', [EquipmentCardController::class, 'deactiveEquipmentCard']);

    Route::get('/view-solutions',[SolutionController::class, 'viewAllSolutions']);
    Route::post('/add-solution',[SolutionController::class, 'addSolution']);
    Route::get('/edit-solution/{id}',[SolutionController::class, 'editSolution']);
    Route::post('/update-solution/{id}',[SolutionController::class, 'updateSolution']);
    Route::get('/make-solution-active/{id}', [SolutionController::class, 'activeSolution']);
    Route::get('/make-solution-deactive/{id}', [SolutionController::class, 'deactiveSolution']);

    Route::get('/view-images',[ImageController::class, 'viewAllImages']);
    Route::get('/getCategoryImage/{id}',[ImageController::class, 'getCategoryImage']);
    Route::post('/add-image-category',[ImageController::class, 'addImageCategory']);
    Route::get('/edit-image-category/{id}',[ImageController::class, 'editImageCategory']);
    Route::post('/update-image-category/{id}',[ImageController::class, 'updateImageCategory']);
    Route::get('/delete-image-category/{id}',[ImageController::class, 'deleteImageCategory']);
    Route::get('/make-image-category-active/{id}', [ImageController::class, 'activeImageCategory']);
    Route::get('/make-image-category-deactive/{id}', [ImageController::class, 'deactiveImageCategory']);

    Route::post('/add-image',[ImageController::class, 'addImage']);
    Route::get('/edit-image/{id}',[ImageController::class, 'editImage']);
    Route::post('/update-image/{id}',[ImageController::class, 'updateImage']);
    Route::get('/delete-image/{id}',[ImageController::class, 'deleteImage']);
    Route::get('/make-image-active/{id}', [ImageController::class, 'activeImage']);
    Route::get('/make-image-deactive/{id}', [ImageController::class, 'deactiveImage']);
    // Route::post('getCategoryImage',[ImageController::class,'getCategoryImage'])->name('getCategoryImage');

    Route::get('/view-service-gallery/{id}',[GalleryController::class, 'viewServiceGallery']);
    Route::get('/view-page-gallery/{id}',[GalleryController::class, 'viewPageGallery']);
    Route::get('/view-blog-gallery/{id}',[GalleryController::class, 'viewBlogGallery']);
    Route::post('/add-gallery',[GalleryController::class, 'saveGallery']);
    Route::post('/add-page-gallery',[GalleryController::class, 'savePageGallery']);
    Route::post('/add-blog-gallery',[GalleryController::class, 'saveBlogGallery']);

    Route::get('/delete-gallery-image/{id}',[GalleryController::class, 'deleteGalleryImage']);
    Route::get('/make-gallery-image-active/{id}', [GalleryController::class, 'activeGalleryImage']);
    Route::get('/make-gallery-image-deactive/{id}', [GalleryController::class, 'deactiveGalleryImage']);

    Route::get('/view-teams',[TeamController::class, 'viewTeam']);
    Route::post('/add-team',[TeamController::class, 'addTeam']);
    Route::get('/edit-team/{id}',[TeamController::class, 'editTeam']);
    Route::post('/update-team/{id}',[TeamController::class, 'updateTeam']);
    Route::get('/delete-team/{id}',[TeamController::class, 'deleteTeam']);
    Route::get('/make-team-active/{id}', [TeamController::class, 'activeTeam']);
    Route::get('/make-team-deactive/{id}', [TeamController::class, 'deactiveTeam']);
 });

 Route::get('/license',[HomeController::class, 'license']);
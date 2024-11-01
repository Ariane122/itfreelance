<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd\CvController;
use App\Http\Controllers\backEnd\LoginController;
use App\Http\Controllers\frontEnd\BlogController;
use App\Http\Controllers\frontEnd\FaqsController;
use App\Http\Controllers\backEnd\ProjetController;
use App\Http\Controllers\backEnd\ContactController;
use App\Http\Controllers\backEnd\ContratController;
use App\Http\Controllers\frontEnd\MetierController;
use App\Http\Controllers\frontEnd\SignInController;
use App\Http\Controllers\frontEnd\AboutUsController;
use App\Http\Controllers\frontEnd\MissionController;
use App\Http\Controllers\frontEnd\ServiceController;
use App\Http\Controllers\backEnd\CategorieController;
use App\Http\Controllers\backEnd\DashboardController;
use App\Http\Controllers\frontEnd\ContactsController;
use App\Http\Controllers\backEnd\EntrepriseController;
use App\Http\Controllers\frontEnd\FreelanceController;
use App\Http\Controllers\frontEnd\PolitiqueController;
use App\Http\Controllers\backEnd\PrestataireController;
use App\Http\Controllers\backEnd\SousCategorieController;
use App\Http\Controllers\frontEnd\PrestatairesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('front-end.pages.index');
});


    Route::get('/metiers', [MetierController::class,'index'])->name('metier');


   Route::get('/cv', [CvController::class,'index'])->name('cv.index');
    Route::post('/cv/create', [CvController::class,'create'])->name('cv.create');

    Route::get('/contacts', [ContactsController::class , 'index']);
    Route::get('/about-us', [AboutUsController::class , 'index']);
    Route::get('/equipes', [AboutUsController::class , 'team']);
    Route::post('/contact/add-contact' , [ContactsController::class , 'create'])->name('contact.create');
    Route::get('/expertises', function () {
        return view('front-end.pages.expertises.expertises');
    });
    Route::get('/je_suis_freelance', [FreelanceController::class , 'index'])->name('freelance.index');
    Route::post('/je_suis_freelance/add-freelance', [FreelanceController::class , 'create'])->name('freelence.create');
    Route::get('/services', [ServiceController::class , 'index'])->name('service');
    Route::get('/sous-categories/{categorieId}', [SousCategorieController::class, 'getSousCategories'])->name('sous-categories');
    Route::get('/missions', [MissionController::class,'index']);
    Route::get('/missions/add-mission', [MissionController::class,'create'])->name('mission.create');

    Route::get('/expertises',[ExpertiseController::class,'index'])->name('expertise');



    Route::get('/connexion', [SignInController::class, 'index'])->name('signin');
    Route::post('/connexion', [SignInController::class, 'login'])->name('signiner');
    Route::get('/dasboard', [FreelanceController::class , 'home'])->name('dashboarder');
    Route::get('/contrats', [FreelanceController::class , 'contrat'])->name('contrat');
    Route::get('/log', [SignInController::class, 'logout'])->name('logout');

    Route::get('/faqs', [FaqsController::class , 'index']);
    Route::get('/blog', [BlogController::class , 'index']);
    Route::get('/prestataire', [PrestatairesController::class , 'index']);
    Route::get('/politique', [PolitiqueController::class , 'index']);




    // Prestataire

    Route::name('prestataire.')->prefix('prestataire')->middleware('prestataire')->group( function () {

        Route::get('/dasboard', [FreelanceController::class , 'home'])->name('dashboard');
        Route::get('/contrats', [FreelanceController::class , 'contrat'])->name('contrat');

    });


//back-end route
Route::get('admin/connexion' , [LoginController::class , 'index'])->name('admin.connexion');
Route::post('admin/connexion/perform' , [LoginController::class , 'login'])->name('admin.connexion.perform');
Route::get('admin/connexion/erreur' , [LoginController::class , 'erreur'])->name('admin.connexion.erreur');
Route::get('/dashboard' , [DashboardController::class , 'index'])->name('dashboard');

Route::name('admin.')->prefix('admin')->middleware('AdminLoginMiddleware')->group( function () {

    Route::get('/dashboardrr' , [DashboardController::class , 'index'])->name('dashboard');
    Route::get('/deconnexion' , [LoginController::class , 'logout'])->name('connexion.logout');

    Route::get('/projets' , [ProjetController::class, 'index'])->name('projet');
    Route::get('/projets/show/{id}' , [ProjetController::class, 'show'])->name('projet.show');
    Route::get('/projets/create' , [ProjetController::class, 'create'])->name('projet.create');
    Route::get('/projets/edite/{id}' , [ProjetController::class, 'edit'])->name('projet.edit');
    Route::post('/projets/add-projet' , [ProjetController::class, 'addProjet'])->name('projet.addProjet');
    Route::get('/projets/delete/{id}' , [ProjetController::class, 'delete'])->name('projet.delete');

    Route::get('/prestataire' , [PrestataireController::class, 'index'])->name('prestataire.index');
    Route::get('/prestataire/show/{id}' , [PrestataireController::class, 'show'])->name('prestataire.show');
    Route::get('/prestataire/edite/{id}' , [PrestataireController::class, 'edit'])->name('prestataire.edit');
    Route::post('/prestataire/add-projet' , [PrestataireController::class, 'addPrestataire'])->name('prestataire.addPrestataire');
    Route::get('/prestataire/delete/{id}' , [PrestataireController::class, 'delete'])->name('prestataire.delete');

    Route::get('/entreprise' , [EntrepriseController::class, 'index'])->name('entreprise.index');
    Route::get('/entreprise/show/{id}' , [EntrepriseController::class, 'show'])->name('entreprise.show');
    Route::get('/entreprise/edite/{id}' , [EntrepriseController::class, 'edit'])->name('entreprise.edit');
    Route::post('/entreprise/add-projet' , [EntrepriseController::class, 'addEntreprise'])->name('entreprise.addEntreprise');
    Route::get('/entreprise/delete/{id}' , [EntrepriseController::class, 'delete'])->name('entreprise.delete');


    Route::get('/categories' , [CategorieController::class, 'index'])->name('categorie.index');
    Route::get('/categories/show/{id}' , [CategorieController::class, 'show'])->name('categorie.show');
    Route::post('/categories/create' , [CategorieController::class, 'create'])->name('categorie.create');
    Route::get('/categories/delete/{id}' , [CategorieController::class, 'delete'])->name('categorie.delete');
    Route::post('/categories/update/{id}' , [CategorieController::class, 'update'])->name('categorie.update');

    Route::get('/sous-categories' , [SousCategorieController::class, 'index'])->name('sousCategorie.index');
    Route::get('/sous-categories/show/{id}' , [SousCategorieController::class, 'show'])->name('sousCategorie.show');
    Route::post('/sous-categories/create' , [SousCategorieController::class, 'create'])->name('sousCategorie.create');
    Route::post('/sous-categories/update/{id}' , [SousCategorieController::class, 'update'])->name('sousCategorie.update');
    Route::get('/sous-categories/delete/{id}' , [SousCategorieController::class, 'delete'])->name('sousCategorie.delete');
    Route::get('/sous-categories/{categorieId}', [SousCategorieController::class, 'getSousCategories'])->name('sous-categories');

    Route::get('/contrat' , [ContratController::class , 'index'])->name('contrat.index');
    Route::post('/contrat/create' , [ContratController::class , 'create'])->name('contrat.create');
    Route::get('/contrat/show/{id}' , [ContratController::class , 'show'])->name('contrat.show');
    Route::get('/contrat/edit/{id}' , [ContratController::class , 'edit'])->name('contrat.edit');
    Route::post('/contrat/update/{id}' , [ContratController::class , 'update'])->name('contrat.update');
    Route::get('/contrat/delete/{id}' , [ContratController::class , 'delete'])->name('contrat.delete');

    Route::get('/contact' , [ContactController::class , 'index'])->name('contact.index');

    


});

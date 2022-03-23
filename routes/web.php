<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//...............Customers Route...................//
Route::get('/customers-list','CustomerController@index')->name('customers.index');
Route::get('/customers-add','CustomerController@addCustomers')->name('customers.add');
Route::post('/customer-store','CustomerController@store')->name('customers.store');
Route::get('/delete/{id}','CustomerController@destroy')->name('customers.delete');
Route::get('/edit/{id}','CustomerController@show')->name('customers.show');
Route::post('/edit','CustomerController@update')->name('customers.update');


//...............Glass Route...................//
Route::get('/glass-type','GlassController@typeindex')->name('glass.typeindex');
Route::get('/glass-type-add','GlassController@addtype')->name('glass.addtype');
Route::post('/glass-type-store','GlassController@storetype')->name('glass.storetype');
Route::get('/delete-glasstype/{id}','GlassController@destroytype')->name('glass.destroytype');
Route::get('/edit-glasstype/{id}','GlassController@showtype')->name('glass.showtype');
Route::post('/update-glasstype','GlassController@updatetype')->name('glass.updatetype');


Route::get('/glass-subtype','GlassController@subtypeindex')->name('glass.subtypeindex');
Route::get('/glass-subtype-add','GlassController@addsubtype')->name('glass.addsubtype');
Route::post('/glass-subtype-store','GlassController@storesubtype')->name('glass.storesubtype');
Route::get('/delete-glasssubtype/{id}','GlassController@destroysubtype')->name('glass.destroysubtype');
Route::get('/edit-glasssubtype/{id}','GlassController@showsubtype')->name('glass.showsubtype');
Route::post('/update-glass
	subtype','GlassController@updatesubtype')->name('glass.updatesubtype');



Route::get('/glass-material','GlassController@materialindex')->name('glass.materialindex');
Route::get('/glass-material-add','GlassController@addmaterial')->name('glass.addmaterial');
Route::post('/glass-material-store','GlassController@storematerial')->name('glass.storematerial');
Route::get('/delete-material/{id}','GlassController@destroymaterial')->name('glass.destroymaterial');
Route::get('/edit-material/{id}','GlassController@showmaterial')->name('glass.showmaterial');
Route::post('/update-material','GlassController@updatematerial')->name('glass.updatematerial');


Route::get('/glass-hw','GlassController@hwindex')->name('glass.hwindex');
Route::get('/glass-hw-add','GlassController@addhw')->name('glass.addhw');
Route::post('/glass-hw-store','GlassController@storehw')->name('glass.storehw');
Route::get('/delete-hw/{id}','GlassController@destroyhw')->name('glass.destroyhw');
Route::get('/edit-hw/{id}','GlassController@showhw')->name('glass.showhw');
Route::post('/update-hw','GlassController@updatehw')->name('glass.updatehw');

//...............Benchtop Route...................//
Route::get('/benchtop-type','BenchtopController@indextype')->name('benchtop.indextype');
Route::get('/benchtop-type-add','BenchtopController@addtype')->name('benchtop.addtype');
Route::post('/benchtop-type-store','BenchtopController@storetype')->name('benchtop.storetype');
Route::get('/delete-type/{id}','BenchtopController@destroytype')->name('benchtop.destroytype');
Route::get('/edit-type/{id}','BenchtopController@showtype')->name('benchtop.showtype');
Route::post('/update-type','BenchtopController@updatetype')->name('benchtop.updatetype');

Route::get('/benchtop-category','BenchtopController@indexmain')->name('benchtop.indexmain');
Route::get('/benchtop-category-add','BenchtopController@addmain')->name('benchtop.addmain');
Route::post('/benchtop-category-store','BenchtopController@storemain')->name('benchtop.storemain');
Route::get('/delete-benchtopmain/{id}','BenchtopController@destroymain')->name('benchtop.destroymain');
Route::get('/edit-benchtopmain/{id}','BenchtopController@showmain')->name('benchtop.showmain');
Route::post('/update-bechtopmain','BenchtopController@updatemain')->name('benchtop.updatemain');

Route::get('/benchtop-subcategory','BenchtopController@indexsub')->name('benchtop.indexsub');
Route::get('/benchtop-subcategory-add','BenchtopController@addsub')->name('benchtop.addsub');
Route::post('/benchtop-subcategory-store','BenchtopController@storesub')->name('benchtop.storesub');
Route::get('/delete-benchtopsub/{id}','BenchtopController@destroysub')->name('benchtop.destroysub');
Route::get('/edit-benchtopsub/{id}','BenchtopController@showsub')->name('benchtop.showsub');
Route::post('/update-benchtopsub','BenchtopController@updatesub')->name('benchtop.updatesub');




Route::get('/benchtop-materials','BenchtopController@indexmaterials')->name('benchtop.indexmaterials');
Route::get('/benchtop-materials-add','BenchtopController@addmaterials')->name('benchtop.addmaterials');
Route::post('/benchtop-materials-store','BenchtopController@storematerials')->name('benchtop.storematerials');
Route::get('/delete-benchmat/{id}','BenchtopController@destroymaterials')->name('benchtop.destroymaterials');
Route::get('/edit-benchmat/{id}','BenchtopController@showmaterials')->name('benchtop.showmaterials');
Route::post('/update-benchmat','BenchtopController@updatematerials')->name('benchtop.updatematerials');

Route::get('/benchtop-width','BenchtopController@indexwidth')->name('benchtop.indexwidth');
Route::get('/benchtop-width-add','BenchtopController@addwidth')->name('benchtop.addwidth');
Route::post('/benchtop-width-store','BenchtopController@storewidth')->name('benchtop.storewidth');
Route::get('/delete-width/{id}','BenchtopController@destroywidth')->name('benchtop.destroywidth');
Route::get('/edit-width/{id}','BenchtopController@showwidth')->name('benchtop.showwidth');
Route::post('/update-width','BenchtopController@updatewidth')->name('benchtop.updatewidth');



//...............door Route...................//

Route::get('/door-main','DoorController@indexmain')->name('door.indexmain');
Route::get('/door-main-add','DoorController@addmain')->name('door.addmain');
Route::post('/door-main-store','DoorController@storemain')->name('door.storemain');
Route::get('/delete-main/{id}','DoorController@destroymain')->name('door.destroymain');
Route::get('/edit-main/{id}','DoorController@showmain')->name('door.showmain');
Route::post('/update-main','DoorController@updatemain')->name('door.updatemain');

Route::get('/door-sub','DoorController@indexsub')->name('door.indexsub');
Route::get('/door-sub-add','DoorController@addsub')->name('door.addsub');
Route::post('/door-sub-store','DoorController@storesub')->name('door.storesub');
Route::get('/delete-sub/{id}','DoorController@destroysub')->name('door.destroysub');
Route::get('/edit-sub/{id}','DoorController@showsub')->name('door.showsub');
Route::post('/update-sub','DoorController@updatesub')->name('door.updatesub');

Route::get('/door-materials','DoorController@indexmaterials')->name('door.indexmaterials');
Route::get('/door-materials-add','DoorController@addmaterials')->name('door.addmaterials');
Route::post('/door-materials-store','DoorController@storematerials')->name('door.storematerials');
Route::get('/delete-mat/{id}','DoorController@destroymaterials')->name('door.destroymaterials');
Route::get('/edit-mat/{id}','DoorController@showmaterials')->name('door.showmaterials');
Route::post('/update-mat','DoorController@updatematerials')->name('door.updatematerials');

Route::get('/door-finishing','DoorController@indexfinishing')->name('door.indexfinishing');
Route::get('/door-finishing-add','DoorController@addfinishing')->name('door.addfinishing');
Route::post('/door-finishing-store','DoorController@storefinishing')->name('door.storefinishing');
Route::get('/delete-finishing/{id}','DoorController@destroyfinishing')->name('door.destroyfinishing');
Route::get('/edit-finishing/{id}','DoorController@showfinishing')->name('door.showfinishing');
Route::post('/update-finishing','DoorController@updatefinishing')->name('door.updatefinishing');

Route::get('/door-color','DoorController@indexcolor')->name('door.indexcolor');
Route::get('/door-color-add','DoorController@addcolor')->name('door.addcolor');
Route::post('/door-color-store','DoorController@storecolor')->name('door.storecolor');
Route::get('/delete-color/{id}','DoorController@destroycolor')->name('door.destroycolor');
Route::get('/edit-color/{id}','DoorController@showcolor')->name('door.showcolor');
Route::post('/update-color','DoorController@updatecolor')->name('door.updatecolor');

//...............Steel Route.................../
Route::get('/steel-main','SteelController@indexmain')->name('steel.indexmain');
Route::get('/steel-main-add','SteelController@addmain')->name('steel.addmain');
Route::post('/steel-main-store','SteelController@storemain')->name('steel.storemain');
Route::get('/delete-steel/{id}','SteelController@destroymain')->name('steel.destroymain');
Route::get('/edit-steel/{id}','SteelController@showmain')->name('steel.showmain');
Route::post('/update-steel','SteelController@updatemain')->name('steel.updatemain');

Route::get('/steel-sub','SteelController@indexsub')->name('steel.indexsub');
Route::get('/steel-sub-add','SteelController@addsub')->name('steel.addsub');
Route::post('/steel-sub-store','SteelController@storesub')->name('steel.storesub');
Route::get('/delete-substeel/{id}','SteelController@destroysub')->name('steel.destroysub');
Route::get('/edit-substeel/{id}','SteelController@showsub')->name('steel.showsub');
Route::post('/update-substeel','SteelController@updatesub')->name('steel.updatesub');


//...............Accessories Route...................//

Route::get('/accessories-main','AccessoriesController@indexmain')->name('accessories.indexmain');
Route::get('/accessories-main-add','AccessoriesController@addmain')->name('accessories.addmain');
Route::post('/accessories-main-store','AccessoriesController@storemain')->name('accessories.storemain');
Route::get('/delete-accmain/{id}','AccessoriesController@destroymain')->name('accessories.destroymain');
Route::get('/edit-accmain/{id}','AccessoriesController@showmain')->name('accessories.showmain');
Route::post('/update-accmain','AccessoriesController@updatemain')->name('accessories.updatemain');

Route::get('/accessories-sub','AccessoriesController@indexsub')->name('accessories.indexsub');
Route::get('/accessories-sub-add','AccessoriesController@addsub')->name('accessories.addsub');
Route::post('/accessories-sub-store','AccessoriesController@storesub')->name('accessories.storesub');
Route::get('/delete-accsub/{id}','AccessoriesController@destroysub')->name('accessories.destroysub');
Route::get('/edit-accsub/{id}','AccessoriesController@showsub')->name('accessories.showsub');
Route::post('/update-accsub','AccessoriesController@updatesub')->name('accessories.updatesub');

Route::get('/Accessories-materials','AccessoriesController@indexmaterials')->name('accessories.indexmaterials');
Route::get('/Accessories-materials-add','AccessoriesController@addmaterials')->name('accessories.addmaterials');
Route::post('/Accessories-materials-store','AccessoriesController@storematerials')->name('accessories.storematerials');
Route::get('/delete-accmat/{id}','AccessoriesController@destroymaterials')->name('accessories.destroymaterials');
Route::get('/edit-accmat/{id}','AccessoriesController@showmaterials')->name('accessories.showmaterials');
Route::post('/update-accmat','AccessoriesController@updatematerials')->name('accessories.updatematerials');


Route::get('/cabinate-category','CabinateController@showCategory')->name('cabinate.showCategory');
Route::post('/cabinate_category_manage/{type}','CabinateController@manageCategory')->name('cabinate.manageCategory');
Route::get('/cabinate_delete_category/{id}','CabinateController@deleteCategory')->name('cabinate.deleteCategory');

Route::post('/cabinate-mainproducts-store','CabinateController@storematerials')->name('cabinate.storemainproducts');
Route::post('/cabinate-typeproducts-store','CabinateController@storematerials')->name('cabinate.storetypeproducts');
Route::post('/cabinate-subtypeproducts-store','CabinateController@storematerials')->name('cabinate.storesubtypeproducts');

Route::get('/cabinate-sub-category','CabinateController@showSubCategory')->name('cabinate.showSubCategory');
Route::get('/cabinate-units','CabinateController@showUnit')->name('cabinate.showUnit');
Route::get('/get-cabinate-sub-category/{id}','CabinateController@getSubCategory')->name('cabinate.getSubCategory');
Route::post('/manage-sub-category/{type}','CabinateController@manageSubCategory')->name('cabinate.manageSubCategory');
Route::get('/delete-sub-category/{id}','CabinateController@deleteSubCategory')->name('cabinate.deleteSubCategory');
Route::get('/delete-unit/{id}','CabinateController@deleteUnit')->name('cabinate.deleteUnit');
Route::post('/manage-unit/{type}','CabinateController@manageUnit')->name('cabinate.manageUnit');

Route::get('/select-cabinate','CabinateController@selectCategory')->name('cabinate.select');
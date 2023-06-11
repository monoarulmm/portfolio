
// Admin with HomeSection
Route::get('home_page', [HomeController::class, 'create']);

Route::get('home_show', [HomeController::class, 'index']);
Route::post('add_home', [HomeController::class,'store']);
Route::get('edit_home/{id}', [HomeController::class, 'edit']);
Route::patch('update_home/{id}',  [HomeController::class,'update']);
Route::delete('destroy/{id}',   [HomeController::class, 'destroy']);
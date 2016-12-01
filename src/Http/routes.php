<?php
Route::group([], function()
{
    $slugs = \Cache::tags('category', 'category_'.$id)->remember('vendor_total_products_count'.$id, config('cache.time'), function () use($id){
        return \ExA2040\LaravelSluggable\Slug::find($id)->products()->count();
    });
    if ( in_array(\Request::segment(1) , $slugs) ) // use Auth::check instead of Auth::user
    {
        Route::get('{slug}', function(){
            return App::make('\App\Http\Controllers\Web\ProductController')->show(1);
        });
    }
});
Route::get('{class_name}/{slug}', array('uses' => '\ExA2040\ViewCounter\LikeController@like', 'as' => 'view_counter.like'))
->where('object_id', '[0-9]+');

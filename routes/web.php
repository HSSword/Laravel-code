<?php
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
error_reporting(0);
Route::get('getFirst/','Controller@getFirst');
// Route::get('getMainParent/{category}','Controller@getMainParent');
/*last imported*/

Route::get('offers/',function(){
    return view('offers');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    return '<h1>cache cleared</h1>';
});

Route::get('test/',function(){
    return view('test');
});
Route::post('convertToTable/','Controller@convertToTable2');
Route::get('getRedirects/','Controller@getRedirects');
Route::get('getQuery/{query}/','Controller@getQuery');
Route::get('getPricesForVaucher/{offerId}/{request?}/','mainController@getPricesForVaucher');
Route::get('cs/','updateController@confirmationServices');

//wrong writting tagesauslfug
Route::get('tagesauslfug/{category}/region/{region}/','mainController@redirect62');
Route::get('Tagesauslfug/{category}/region/{region}/','mainController@redirect62');
Route::get('tagesauslfug/region/{region}/','mainController@redirect63');
Route::get('Tagesauslfug/region/{region}/','mainController@redirect63');
Route::get('tagesauslfug/{category?}/','mainController@redirect61');
Route::get('Tagesauslfug/{category?}/','mainController@redirect61');
//wrong writting tagesauslfug end
//offer name change
Route::get('weekend/schneeschuhwandern/region/{region}/','mainController@redirect64');
//offer name change end

Route::group(['middleware'=>'navigateMiddleware'],function(){
    Route::get('notfound/',['as'=>'notfound','uses'=>'mainController@get404']);

    Route::get('geschenkgutschein/','mainController@getGeschenkgutschein');
    Route::get('geschenkgutscheinTest/','mainController@getGeschenkgutscheinTest');
    Route::get('mainVaucherReservation/','mainController@startVaucherReservation');
    Route::get('geschenkgutscheinReservation/','mainController@geschenkgutscheinReservation');
    Route::post('submitVaucherStepFirst','mainController@submitVaucherStepOne');
    Route::post('submitVaucherStepSecond','mainController@submitVaucherStepTwo');
    Route::post('submitVaucherStepSecondTest','mainController@submitVaucherStepTwoTest');
    Route::post('submitVaucherStepThird','mainController@submitVaucherStepThree');
    Route::post('submitOfferVaucherTable','mainController@saveUserContactOfferVaucher');
    Route::post('submitOfferVaucherTablePay','mainController@saveUserContactOfferVaucherPay');
    Route::get('offer/{offerId}/{offer_title}/','mainController@getOfferPage');

    Route::get('ausflug/{parent}/region/{region}/','mainController@redirect58');
    Route::get('ausflug/{offer_title}/','mainController@getOfferPageSEO');

    Route::get('reservation/{offerId}/','mainController@offerReservation');
    Route::get('/erlebnis/{parent?}/','mainController@getHome');
    Route::get('/','mainController@getHome');
    Route::get('reservations/{uid}/','mainController@reserVationtoPdf');
    Route::get('voucherPdf/{uid}/','mainController@voucherInvoicePdf');
    Route::get('list-offers/region/{region_link?}/offer_type/{offer_type_link?}/duration/{duration_link?}/keyword/{keyword_link?}/','mainController@listOffers');
    Route::get('kontakt/', 'mainController@getContact');
    Route::get('de/kontakt/', 'mainController@getContact');
    Route::get('ueber-uns/', 'mainController@getAbout');
    Route::get('booking02/','mainController@booking02');
    Route::get('booking03/','mainController@booking03');
    Route::get('booking04/','mainController@booking04');
    Route::get('offerVaucherPage/{offerId}/{callBack?}/','mainController@offerVaucherPage');
    Route::get('angebote/geschenkgutschein-geschenkidee/ideen/{vid}/',['as'=>'offerVaucher','uses'=>'mainController@offerVaucherPage']);
    Route::get('offerVaucherReservation/{vid}/',['as'=>'offerVaucher','uses'=>'mainController@offerVaucherReservationPage']);
    Route::get('nc/storage-folder/angebote/geschenkgutschein-geschenkidee/ideen/{vid}/','mainController@offerVaucherPage2');
    Route::get('nc/de/storage-folder/angebote/geschenkgutschein-geschenkidee/ideen/{vid}/','mainController@offerVaucherPage2');
    Route::get('nc/de/geschenkgutschein-geschenkidee/ideen/{vid}/','mainController@offerVaucherPage2');
    Route::get('nc/geschenkgutschein-geschenkidee/ideen/{vid}/','mainController@redirectOfferVaucher');
    Route::get('de/erlebnis-schweiz/action/show/angebot/{offer}/','mainController@redirectOffer1');


    //for search
    Route::get('erlebnis-schweiz/','mainController@redirect5');
    Route::get('erlebnis-schweiz/region/{region}/','mainController@redirect56');
    Route::get('de/erlebnis-schweiz/region/{region}/',function($region){ return redirect('erlebnis-schweiz/region/'.$region);});
    Route::get('0/region/{region}/','mainController@redirect56');
    Route::get('fuer/{fuer}/','mainController@redirect17');
    Route::get('geschenkideen/{search}/','mainController@redirect18');

    Route::get('region/{region}/','mainController@redirect19');

    Route::get('erlebnis-schweiz/weekend/{category}/','mainController@redirect57');
    Route::get('erlebnis-schweiz/tagesausflug/{category}/','mainController@redirect59');
    Route::get('erlebnis-schweiz/gruppenausfluege/{category}/','mainController@redirect60');
    Route::get('region/{region}/fuer/{fuer}/','mainController@redirect20');
    Route::get('region/{region}/fuer/{fuer}/geschenkideen/{search}/','mainController@redirect21');
    Route::get('region/{region}/geschenkideen/{search}/','mainController@redirect22');

    Route::get('fuer/{fuer}/geschenkideen/{search}/','mainController@redirect23');

    Route::get('{parent}/{category}/fuer/{fuer}/geschenkideen/{search}/','mainController@redirect24');

    Route::get('{parent}/{category}/geschenkideen/{search}/','mainController@redirect27');

    Route::get('{parent}/{category}/fuer/{fuer}/','mainController@redirect30');

    Route::get('{parent}/{category}/region/{region}/fuer/{fuer}/','mainController@redirect33');

    Route::get('{parent}/{category}/region/{region}/fuer/{day}/geschenkideen/{search}/','mainController@redirect4');

    Route::get('{parent}/{category}/region/{region}/','mainController@redirect47');


    //fix

    Route::get('{parent}/region/{region}/','mainController@redirect40');

    Route::get('{parent}/region/{region}/fuer/{day}/geschenkideen/{search}/','mainController@redirect42');

    Route::get('{parent}/region/{region}/fuer/{day}/','mainController@redirect48');

    Route::get('{parent}/region/{region}/geschenkideen/{search}/','mainController@redirect43');

    Route::get('{parent}/geschenkideen/{search}/','mainController@redirect44');

    Route::get('{parent}/fuer/{day}/','mainController@redirect45');

    Route::get('{parent}/fuer/{day}/geschenkideen/{search}/','mainController@redirect46');

    Route::get('erlebnis/{region}/{parent}/{category}/','mainController@redirect50');
    Route::get('erlebnis/{region}/{parent}/','mainController@redirect51');
    Route::get('erlebnis-schweiz/kategorie/{category}/region/{region}/','mainController@redirect52');
    Route::get('de/erlebnis-schweiz/kategorie/0/{parent}/region/{region}/','mainController@redirect53');
    Route::get('de/erlebnis-schweiz/kategorie/{parent}/region/{region}/','mainController@redirect53');
    Route::get('de/erlebnis-schweiz/kategorie/0/{parent}/{category}/region/{region}/','mainController@redirect54');
    Route::get('de/erlebnis-schweiz/kategorie/{parent}/{category}/region/{region}/','mainController@redirect54');
    Route::get('de/erlebnis-schweiz/kategorie/{parent}/{category}/','mainController@redirect55');
    Route::get('erlebnis-schweiz/kategorie/0/{parent}/region/{region}/','mainController@redirect53');
    // Route::get('de/erlebnis-schweiz/region/{region}/','mainController@redirect56');
    // Route::get('erlebnis-schweiz/region/{region}/','mainController@redirect56');
    // tagesauslfug/romantik-genuss-1/region/graubuenden/


    //when only category is set
    Route::get('weekend/{category?}/','mainController@redirect1');
    Route::get('weekend/{category?}/{category2?}','mainController@redirect1');
    Route::get('weekend/{category?}/{category2?}/{category3?}','mainController@redirect1');
    Route::get('tagesausflug/{category?}/','mainController@redirect9');
	Route::get('tagesausflug/{category?}/{category1?}','mainController@redirect9');
	Route::get('tagesausflug/{category?}/{category1?}/{category2?}','mainController@redirect9');    
Route::get('Tagesausflug/{category?}/','mainController@redirect9');
Route::get('Tagesausflug/{category?}/{category1?}','mainController@redirect9');
Route::get('Tagesausflug/{category?}/{category1?}/{category2?}','mainController@redirect9');
    Route::get('gruppenausfluege/{category?}/','mainController@redirect10');
Route::get('gruppenausfluege/{category?}/{category1?}','mainController@redirect10');
Route::get('gruppenausfluege/{category?}/{category1?}/{category2?}','mainController@redirect10');
    Route::get('Gruppenausfluege/{category?}/','mainController@redirect10');
Route::get('Gruppenausfluege/{category?}/{category1?}','mainController@redirect10');
Route::get('Gruppenausfluege/{category?}/{category1?}/{category2?}','mainController@redirect10');

    //when category and region are set
    Route::get('weekend/{category}/region/{region}/','mainController@redirect2');
    Route::get('tagesausflug/{category}/region/{region}/','mainController@redirect11');
    Route::get('Tagesausflug/{category}/region/{region}/','mainController@redirect11');
    Route::get('gruppenausfluege/{category}/region/{region}/','mainController@redirect12');
    Route::get('Gruppenausfluege/{category}/region/{region}/','mainController@redirect12');

    //when no category is set but only the region
    Route::get('weekend/region/{region}/','mainController@redirect6');
    Route::get('tagesausflug/region/{region}/','mainController@redirect7');
    //Route::get('tagesausflug/region/{region}/{r2?}','mainController@redirect7');
    Route::get('Tagesausflug/region/{region}/','mainController@redirect7');
    //Route::get('Tagesausflug/region/{region}/{r2?}','mainController@redirect7');
    Route::get('gruppenausfluege/region/{region}/','mainController@redirect8');
    Route::get('Gruppenausfluege/region/{region}/','mainController@redirect8');


    Route::get('nooffer/{region}/{category?}/','mainController@getNoOffer');
    Route::get('newsletter/', 'mainController@getNewsLetter');
    Route::get('giftcard02/','mainController@getGiftCard02');
    Route::get('giftcard03/','mainController@getGiftCard03');
    Route::get('groupOffer/{oid}/{date}/','mainController@getGroupOffer');
    Route::get('impressum/','mainController@getImpressum');
    Route::get('datenschutz/','mainController@getDatenschutz');
    Route::get('gruppenanfrage/{oid}/{date}/','mainController@getGroupOffer');

    Route::get('agb/','mainController@getAgbPage');
    Route::get('agbPage/','mainController@getAgbPage');
    Route::get('testest/','Controller@testtest');
    Route::get('getFristOpenDate/{offer}/','Controller@getFirstOpenDate');
    Route::get('checkIfDateOpen/','Controller@checkIfDateOpen');

});
Route::get('pricesForDate/{date}/{offer}/','mainController@getPricesForDate');
Route::post('selectedPrices','mainController@selectedPrices');
Route::post('update/previewPhoto','updateController@previewPhoto');
Route::post('update/previewPhotoSingle','updateController@previewPhotoSingle');
Route::get('checkDates/{offer}/','mainController@checkDates');
Route::get('voucherPage/{vaucher}/','mainController@voucherPage');
Route::get('generateXml/','mainController@generateXml');
Route::get('generateDynamicXml/','mainController@generateDynamicXml');







Route::group(['middleware'=>'admin'],function(){

    //  Route::get('admin/be/{booking_id}/', "updateController@sendBookingMail");
    // Route::get('admin/previewLayout/', "mainController@previewLayout");
    // Route::get('admin/regions/', "mainController@adminRegions");
    // Route::get('admin/categories/', 'mainController@adminCategories');

    // Route::get('admin/touroperators/','mainController@adminTourOperator');
    // Route::get('admin/vouchers/','mainController@adminVouchers');
    // Route::get('admin/cr_be_users/','mainController@be_users');
    // Route::get('admin/editVoucherReservation/{vid}/','mainController@editVoucher');
    // //conver an inserted date and insert it into the new columns
    // Route::get('fixDates/{offer}/','Controller@fixDates');
    // Route::get('fixDatess/','Controller@fixdatess');
    // Route::get('admin/listLinks/','mainController@listLinks');



    // Route::get('admin/listOffers/{search?}/','mainController@listOffersForEdit');
    // Route::get('admin/listRegions/','mainController@listRegionsForEdit');
    // Route::get('admin/listCategories/','mainController@listCategoriesForEdit');
    // Route::get('admin/listTourOperators/{search?}/','mainController@listTourOperatorsForEdit');
    // Route::get('admin/listVouchers/','mainController@listVouchersForEdit');
    // Route::get('admin/listBookings/','mainController@listBookings');
    // Route::get('admin/listAllVauchers/','mainController@listVauchers');
    // Route::get('admin/be_users/','mainController@listBeUsers');
    // Route::get('admin/listAllRedirects/','mainController@listRedirects');

    // //main insertions
    // Route::post('admin/addRegion/','updateController@addRegion');
    // Route::post('admin/addOffer/','updateController@addOffer');
    // Route::post('admin/addCategory/',['as'=>'addCategory','uses'=>'updateController@addCategory']);
    // Route::post('admin/addTourOperator/','updateController@addTourOperator');
    // Route::post('admin/addVoucher/','updateController@addVoucher');
    // Route::post('admin/addBeUser/','updateController@addBeUser');

    // // get forms to show on admin/ pages////////////////////////////////////////////////

    // Route::get('admin/getPricesForm/{number}/','mainController@getPricesForm');
    // Route::get('admin/getAdditionalsForm/{number}/','mainController@getAdditionalsForm');
    // Route::get('admin/getOptionsForm/','mainController@getOptionsForm');
    // Route::get('admin/getEditOptionsForm/{oid}/','mainController@getEditOptionsForm');
    // Route::get('admin/getEditPriceForm/{price_id}/','mainController@getEditPricesForm');
    // Route::get('admin/getEditAdditionalsForm/{additional_id}/','mainController@getEditAdditionalsForm');

    // //Edit Forms
    // Route::get('admin/editOfferForm/{offer_id}/','mainController@editOfferForm');
    // Route::get('admin/editRegionForm/{region_id}/','mainController@editRegionForm');
    // Route::get('admin/editCategoryForm/{category_id}/','mainController@editCategoryForm');
    // Route::get('admin/editTourOperatorForm/{tid}/','mainController@editTourOperatorForm');
    // Route::get('admin/editVoucher/{vid}/','mainController@editVoucherForm');

    // Route::get('admin/editBeUser/{uid}/',function($uid){
    //     $data=DB::table('be_users')->where('uid',$uid)->get();
    //     return view('forms/editBeUser')->with('data',$data);
    // });

    // Route::get('admin/editUser/{uid}/',function($uid){
    //     $data=DB::table('fe_users')
    //         ->where('uid',$uid)
    //         ->leftJoin('tx_backoffice_application_frontenduser_mm','tx_backoffice_application_frontenduser_mm.uid_foreign','fe_users.uid')
    //         ->select('fe_users.*','tx_backoffice_application_frontenduser_mm.uid_local as bookingId')
    //         ->orderBy('fe_users.uid','desc')
    //         ->limit(1)
    //         ->get();
    //     return view('forms/editUser')->with('data',$data);
    // });

    // //hide unhide, delete undelete
    // Route::get('admin/offer/{offer_id}/{action}/','updateController@offerActions');
    // Route::get('admin/image/{image_id}/{action}/','updateController@imageActions');
    // Route::get('admin/price/{price_id}/{action}/','updateController@priceActions');
    // Route::get('admin/additional/{additional_id}/{action}/','updateController@additionalActions');
    // Route::get('admin/region/{region_id}/{action}/','updateController@regionActions');
    // Route::get('admin/category/{category_id}/{action}/','updateController@categoryActions');
    // Route::get('admin/touroperator/{tid}/{action}/','updateController@tourOperatorActions');
    // Route::get('admin/voucher/{vid}/{action}/','updateController@voucherActions');
    // Route::get('admin/deleteRegionImage/{region_id}/','updateController@deleteRegionImage');
    // Route::get('admin/be_user/{action}/{user_id}/','updateController@be_userActions');
    // // Submit edit
    // Route::post('admin/submitEditPrice/','updateController@submitEditPrice');
    // Route::post('admin/submitEditAdditional/','updateController@submitEditAdditional');
    // Route::post('admin/submitEditOffer/','updateController@submitEditOffer');
    // Route::post('admin/submitEditRegion/','updateController@submitEditRegion');
    // Route::post('admin/submitEditCategory/','updateController@submitEditCategory');
     //Route::post('admin/submitEditTourOperator/','updateController@submitEditTourOperator');
    // Route::post('admin/submitEditVoucher/','updateController@submitEditVoucher');
    // Route::post('admin/submitEditSeason/','updateController@submitEditSeason');
    // Route::post('admin/submitEditCurrency/','updateController@submitCurrency');
    // Route::post('admin/submitEditBooking/','updateController@submitEditBooking');
    // Route::post('admin/submitEditUser/','updateController@submitEditUser');
    // Route::post('admin/submitEditBeUser/','updateController@submitEditBeUser');
    // Route::post('admin/submitEditOption/','updateController@submitEditOption');
    // //swap ranks
    // Route::get('admin/swapOfferRank/{offer1}/{offer2}/','updateController@swapOfferRank');
    // Route::get('admin/swapCategoryRank/{cat1}/{cat2}/','updateController@swapCategoryRank');
    // Route::get('admin/swapPriceRank/{price1}/{price2}/','updateController@swapPriceRank');
    // Route::get('admin/swapAditionalRank/{add1}/{add2}/','updateController@swapAditionalRank');
    // Route::get('admin/swapOfferRankDrop/{offer1}/{offer2}/','updateController@swapOfferRankDrop');
    // Route::get('admin/swapCategoryRankDrop/{cat1}/{cat2}/','updateController@swapCategoryRankDrop');
    // Route::get('admin/swapPriceRankDrop/{price1}/{price2}/','updateController@swapPriceRankDrop');
    // Route::get('admin/swapAditionalRankDrop/{add1}/{add2}/','updateController@swapAditionalRankDrop');
    // Route::get('admin/swapImageRank/{image1}/{image2}/','updateController@swapImageRank');
    // Route::get('admin/swapImageRankDrop/{image1}/{image2}/','updateController@swapImageRankDrop');
    // Route::get('admin/searchRelatedOffers/{keyword}/','mainController@searchRo');
    // Route::get('admin/getOfferNameById/{uid}/','mainController@getOfferNameById');
    // Route::get('admin/editBooking/{uid}/','mainController@editBooking');
    // Route::get('admin/pdf/{uid}/{save?}/','updateController@pdf');
    // Route::get('admin/deleteTempImage/{img}/','updateController@deleteTmp');
    // Route::get('/admin/deactivateNewsletter/','updateController@deactivateNewsletter');
    // //newsletter

    // Route::get('admin/listNewsLetters/','mainController@listNewsLetters');
    // Route::get('admin/editNewsLetter/{id}/','mainController@editNewsLetter');
    // Route::get('admin/addNewsLetterForm/','mainController@addNewsLetterForm');
    // Route::get('admin/previewNewsLetter/{id}/','mainController@previewNewsLetter');
    // Route::post('admin/addNewsLetter/',['as'=>'addNewsLetter','uses'=>'updateController@addNewsLetter']);
    // Route::post('admin/submitEditNewsLetter/',['as'=>'editNewsLetter','uses'=>'updateController@submitEditNewsLetter']);
    // Route::get('admin/deleteNewsletter/{id}/','updateController@deleteNewsletter');
    // Route::get('admin/sendNewsLetterMail/{id}/','updateController@sendNewsLetterMail');
    // Route::get('admin/changeSeason/',function(){
    //     return view('changeSeason');
    // });

    // Route::get('admin/editCurrencies/','mainController@currencies');

    // Route::get('admin/logout/','Controller@Logout');

    // Route::post('admin/submitVoucherReservationEdit/','updateController@submitVoucherReservationEdit');
    // Route::get('admin/generateVoucherPdf/{vid}/{save?}/','updateController@generateVoucherPdf');
    // Route::get('admin/generateVoucherInvoice/{vid}/{save?}/','updateController@generateVoucherInvoice');
    // Route::get('admin/offerVaucherPDF/{vid}/','mainController@offerVaucherPdf');
    // Route::get('admin/offerVaucherInvoice/{vid}/{save?}/','mainController@offerVaucherInvoice');
    // Route::get('admin/generateOfferVaucherPDF/{vid}/{save?}/','mainController@generateOfferVaucherPdf');
    // Route::get('admin/generateOfferVaucherInvoice/{vid}/{save?}/','mainController@offerVaucherInvoice');
    // Route::post('admin/tempOptions/','updateController@tempOptions');
    // Route::post('admin/saveImageDescription/','updateController@saveImageDescription');
    // Route::get('admin/makeCurrentNewsLetter/{id}/','updateController@makeCurrentNewsLetter');
});



Route::post('submitOfferVaucher/','updateController@submitOfferVaucher');
Route::get('regoverview/',function(){
    $cats=DB::table('category as catA')
        ->leftJoin('category as catB','catB.parent','catA.uid')
        ->select('catA.title','catA.uid','catB.title ctitle','catB.uid as cuid')
        ->get();
    return view('catoverview')->with('cats',$cats);
});
Route::get('admin/','Controller@getLoginPage')->name('admin');
Route::get('test2/','Controller@test2')->name('test2');
Route::post('test2/','Controller@test2')->name('test2');
Route::get('update/adminSubmit/','Controller@Authenticate');
//Route::post('/update/adminSubmit/','Controller@Authenticate');
Route::post('/update/adminSubmit/',array('uses'=>'Controller@Authenticate'));
Route::post('submitBooking/','updateController@submitBooking');
Route::get('migrate/','mainController@migrate');


Route::get('testPdf/',function(){
    return view('test/pdf');
});
Route::post('submitVaucher/','updateController@submitVaucher');
Route::get('meinweekendejknaskjdnaksjdnakjsdnasndajkd/pdf/{uid}/{save?}/','updateController@pdf');


Route::get('getNavBarIds/{id}/','mainController@getNavBarIds');
Route::get('offerVaucher/{vid}/','mainController@offerVaucher');

Route::get('getBookingPage/{booking_id}/','mainController@getBookingPage');
Route::post('submitGroupApplication/','updateController@submitGroupApplication');
Route::post('submitContact/','updateController@submitContact');
// Route::get('compressCatPhotos/','mainController@compress');
// Route::get('offerImagesTransfer/','mainController@offerImagesTransfer');

Route::get('checkUnit/{offer_id}/{hasspeciallist?}/','mainController@checkUnit');


//old redirects



Route::get('fixRegions/','Controller@fixBookings');
Route::post('submitDataForCC/','updateController@submitDataForCC');
Route::get('unsubscribefromemail/','mainController@unsubscribe');
// Route::get('statsasdasdasdasdasdasdasdasdasdasdasdasssssssasd','Controller@stats');


Route::get('admin/offers/',"mainController@adminOffers")->name('adminOffers');


    Route::get('admin/be/{booking_id}/', "updateController@sendBookingMail");
    Route::get('admin/previewLayout/', "mainController@previewLayout");
    Route::get('admin/regions/', "mainController@adminRegions");
    Route::get('admin/categories/', 'mainController@adminCategories');

    Route::get('admin/touroperators','mainController@adminTourOperator');
    Route::get('admin/vouchers','mainController@adminVouchers');
    Route::get('admin/cr_be_users/','mainController@be_users');
    Route::get('admin/editVoucherReservation/{vid}/','mainController@editVoucher');
    //conver an inserted date and insert it into the new columns
    Route::get('fixDates/{offer}/','Controller@fixDates');
    Route::get('fixDatess/','Controller@fixdatess');
    Route::get('admin/listLinks/','mainController@listLinks');



    Route::get('admin/listOffers/{search?}/','mainController@listOffersForEdit');
    Route::get('admin/listRegions/','mainController@listRegionsForEdit');
    Route::get('admin/listCategories/','mainController@listCategoriesForEdit');
    Route::get('admin/listTourOperators/{search?}/','mainController@listTourOperatorsForEdit');
    Route::get('admin/listVouchers/','mainController@listVouchersForEdit');
    Route::get('admin/listBookings/','mainController@listBookings');
    Route::get('admin/listAllVauchers/','mainController@listVauchers');
    Route::get('admin/be_users/','mainController@listBeUsers');
    Route::get('admin/listAllRedirects/','mainController@listRedirects');

    //main insertions
    Route::post('admin/addRegion','updateController@addRegion');
    Route::post('admin/addOffer','updateController@addOffer');
    Route::post('admin/addCategory',['as'=>'addCategory','uses'=>'updateController@addCategory']);
    Route::post('admin/addTourOperator','updateController@addTourOperator');
    Route::post('admin/addVoucher','updateController@addVoucher');
    Route::post('admin/addBeUser','updateController@addBeUser');

    // get forms to show on admin/ pages////////////////////////////////////////////////

    Route::get('admin/getPricesForm/{number}/','mainController@getPricesForm');
    Route::get('admin/getAdditionalsForm/{number}/','mainController@getAdditionalsForm');
    Route::get('admin/getOptionsForm/','mainController@getOptionsForm');
    Route::get('admin/getEditOptionsForm/{oid}/','mainController@getEditOptionsForm');
    Route::get('admin/getEditPriceForm/{price_id}/','mainController@getEditPricesForm');
    Route::get('admin/getEditAdditionalsForm/{additional_id}/','mainController@getEditAdditionalsForm');

    //Edit Forms
    Route::get('admin/editOfferForm/{offer_id}','mainController@editOfferForm');
    Route::get('admin/editRegionForm/{region_id}/','mainController@editRegionForm');
    Route::get('admin/editCategoryForm/{category_id}/','mainController@editCategoryForm');
    Route::get('admin/editTourOperatorForm/{tid}/','mainController@editTourOperatorForm');
    Route::get('admin/editVoucher/{vid}/','mainController@editVoucherForm');

    Route::get('admin/editBeUser/{uid}/',function($uid){
        $data=DB::table('be_users')->where('uid',$uid)->get();
        return view('forms/editBeUser')->with('data',$data);
    });

    Route::get('admin/editUser/{uid}/',function($uid){
        $data=DB::table('fe_users')
            ->where('uid',$uid)
            ->leftJoin('tx_backoffice_application_frontenduser_mm','tx_backoffice_application_frontenduser_mm.uid_foreign','fe_users.uid')
            ->select('fe_users.*','tx_backoffice_application_frontenduser_mm.uid_local as bookingId')
            ->orderBy('fe_users.uid','desc')
            ->limit(1)
            ->get();
        return view('forms/editUser')->with('data',$data);
    });

    //hide unhide, delete undelete
    Route::get('admin/offer/{offer_id}/{action}/','updateController@offerActions');
    Route::get('admin/image/{image_id}/{action}/','updateController@imageActions');
    Route::get('admin/price/{price_id}/{action}/','updateController@priceActions');
    Route::get('admin/additional/{additional_id}/{action}/','updateController@additionalActions');
    Route::get('admin/region/{region_id}/{action}/','updateController@regionActions');
    Route::get('admin/category/{category_id}/{action}/','updateController@categoryActions');
    Route::get('admin/touroperator/{tid}/{action}/','updateController@tourOperatorActions');
   Route::get('admin/voucher/{vid}/{action}/','updateController@voucherActions');
    Route::get('admin/deleteRegionImage/{region_id}/','updateController@deleteRegionImage');
    Route::get('admin/be_user/{action}/{user_id}/','updateController@be_userActions');
    // Submit edit
    Route::post('admin/submitEditPrice','updateController@submitEditPrice');
    Route::post('admin/submitEditAdditional/','updateController@submitEditAdditional');
    Route::post('admin/submitEditOffer','updateController@submitEditOffer');
    Route::post('admin/submitEditRegion','updateController@submitEditRegion');
    Route::post('admin/submitEditCategory','updateController@submitEditCategory');
    Route::post('admin/submitEditTourOperator','updateController@submitEditTourOperator');
    Route::post('admin/submitEditVoucher','updateController@submitEditVoucher');
    Route::post('admin/submitEditSeason/','updateController@submitEditSeason');


    Route::post('admin/submitHomeMeta/','updateController@submitHomeMeta');
    Route::post('admin/submitDefaultMeta/','updateController@submitDefaultMeta');

    Route::post('admin/submitEditCurrency/','updateController@submitCurrency');
    Route::post('admin/submitEditBooking','updateController@submitEditBooking');
    Route::post('admin/submitEditUser','updateController@submitEditUser');
    Route::post('admin/submitEditBeUser/','updateController@submitEditBeUser');
    Route::post('admin/submitEditOption/','updateController@submitEditOption');
    //swap ranks
    Route::get('admin/swapOfferRank/{offer1}/{offer2}/','updateController@swapOfferRank');
    Route::get('admin/swapCategoryRank/{cat1}/{cat2}/','updateController@swapCategoryRank');
    Route::get('admin/swapPriceRank/{price1}/{price2}/','updateController@swapPriceRank');
    Route::get('admin/swapAditionalRank/{add1}/{add2}/','updateController@swapAditionalRank');
    Route::get('admin/swapOfferRankDrop/{offer1}/{offer2}/','updateController@swapOfferRankDrop');
    Route::get('admin/swapCategoryRankDrop/{cat1}/{cat2}/','updateController@swapCategoryRankDrop');
    Route::get('admin/swapPriceRankDrop/{price1}/{price2}/','updateController@swapPriceRankDrop');
    Route::get('admin/swapAditionalRankDrop/{add1}/{add2}/','updateController@swapAditionalRankDrop');
    Route::get('admin/swapImageRank/{image1}/{image2}/','updateController@swapImageRank');
    Route::get('admin/swapImageRankDrop/{image1}/{image2}/','updateController@swapImageRankDrop');
    Route::get('admin/searchRelatedOffers/{keyword}/','mainController@searchRo');
    Route::get('admin/getOfferNameById/{uid}/','mainController@getOfferNameById');
    Route::get('admin/editBooking/{uid}/','mainController@editBooking');
    Route::get('admin/pdf/{uid}/{save?}/','updateController@pdf');
    Route::get('admin/deleteTempImage/{img}/','updateController@deleteTmp');
    Route::get('/admin/deactivateNewsletter/','updateController@deactivateNewsletter');
    //newsletter

    Route::get('admin/listNewsLetters/','mainController@listNewsLetters');
    Route::get('admin/editNewsLetter/{id}/','mainController@editNewsLetter');
    Route::get('admin/addNewsLetterForm/','mainController@addNewsLetterForm');
    Route::get('admin/previewNewsLetter/{id}/','mainController@previewNewsLetter');
    Route::post('admin/addNewsLetter/',['as'=>'addNewsLetter','uses'=>'updateController@addNewsLetter']);
    Route::post('admin/submitEditNewsLetter/',['as'=>'editNewsLetter','uses'=>'updateController@submitEditNewsLetter']);
    Route::get('admin/deleteNewsletter/{id}/','updateController@deleteNewsletter');
    Route::get('admin/sendNewsLetterMail/{id}/','updateController@sendNewsLetterMail');
    Route::get('admin/changeSeason/',function(){
        return view('changeSeason');
    });

    Route::get('admin/homeMeta/','mainController@homeMeta');
    Route::get('admin/defaultMeta/','mainController@defaultMeta');
   


    Route::get('admin/editCurrencies/','mainController@currencies');

    Route::get('admin/logout/','Controller@Logout');

    Route::post('admin/submitVoucherReservationEdit','updateController@submitVoucherReservationEdit');
    Route::get('admin/generateVoucherPdf/{vid}/{save?}/','updateController@generateVoucherPdf');
    Route::get('admin/generateVoucherInvoice/{vid}/{save?}/','updateController@generateVoucherInvoice');
    Route::get('admin/offerVaucherPDF/{vid}/','mainController@offerVaucherPdf');
    Route::get('admin/offerVaucherInvoice/{vid}/{save?}/','mainController@offerVaucherInvoice');
    Route::get('admin/generateOfferVaucherPDF/{vid}/{save?}/','mainController@generateOfferVaucherPdf');
    Route::get('admin/generateOfferVaucherInvoice/{vid}/{save?}/','mainController@offerVaucherInvoice');
    Route::post('admin/tempOptions/','updateController@tempOptions');
    Route::post('admin/saveImageDescription/','updateController@saveImageDescription');
    Route::get('admin/makeCurrentNewsLetter/{id}/','updateController@makeCurrentNewsLetter');

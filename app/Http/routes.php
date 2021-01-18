<?php

//route backoffice


Route::group(['middleware' => ['admin']] , function() {
    #data annonces
    Route::get('/adminpanel/annonce/data', ['as' => 'adminpanel.annonce.data' , 'uses' => 'BackendController@anyData'] );
    Route::get('/adminpanel/annonce/moto/data', ['as' => 'adminpanel.annonce.moto.data' , 'uses' => 'BackendController@anyDatamoto'] );
    Route::get('/adminpanel/annonce/VU/data', ['as' => 'adminpanel.annonce.VU.data' , 'uses' => 'BackendController@anyDataVU'] );
    Route::get('/adminpanel/annonce/CC/data', ['as' => 'adminpanel.annonce.CC.data' , 'uses' => 'BackendController@anyDataCC'] );
    Route::get('/adminpanel/annonce/R/data', ['as' => 'adminpanel.annonce.R.data' , 'uses' => 'BackendController@anyDataR'] );
    Route::get('/adminpanel/annonce/C/data', ['as' => 'adminpanel.annonce.C.data' , 'uses' => 'BackendController@anyDataC'] );
#data user
    Route::get('/adminpanel/users/data', ['as' => 'adminpanel.users.data' , 'uses' => 'UserSettingsController@anyData'] );
    Route::get('/adminpanel/marques/data', ['as' => 'adminpanel.marques.data' , 'uses' => 'MarqueController@anyData'] );
    Route::get('/adminpanel/marques/moto/data', ['as' => 'adminpanel.marques.moto.data' , 'uses' => 'MarqueController@anyDatamoto'] );
    Route::get('/adminpanel/marques/VU/data', ['as' => 'adminpanel.marques.VU.data' , 'uses' => 'MarqueController@anyDataVU'] );
    Route::get('/adminpanel/marques/CC/data', ['as' => 'adminpanel.marques.CC.data' , 'uses' => 'MarqueController@anyDataCC'] );
    Route::get('/adminpanel/marques/R/data', ['as' => 'adminpanel.marques.R.data' , 'uses' => 'MarqueController@anyDataR'] );
    Route::get('/adminpanel/marques/C/data', ['as' => 'adminpanel.marques.C.data' , 'uses' => 'MarqueController@anyDataC'] );
    #data modeles
    Route::get('/adminpanel/modeles/data', ['as' => 'adminpanel.modeles.data' , 'uses' => 'MarqueController@anymodele'] );
    Route::get('/adminpanel/moto/modeles/data', ['as' => 'adminpanel.moto.modeles.data' , 'uses' => 'MarqueController@anymodelemoto'] );
    Route::get('/adminpanel/VU/modeles/data', ['as' => 'adminpanel.VU.modeles.data' , 'uses' => 'MarqueController@anymodeleVU'] );
    Route::get('/adminpanel/CC/modeles/data', ['as' => 'adminpanel.CC.modeles.data' , 'uses' => 'MarqueController@anymodeleCC'] );
    Route::get('/adminpanel/R/modeles/data', ['as' => 'adminpanel.R.modeles.data' , 'uses' => 'MarqueController@anymodeleR'] );
    Route::get('/adminpanel/C/modeles/data', ['as' => 'adminpanel.C.modeles.data' , 'uses' => 'MarqueController@anymodeleC'] );

#liste annonces
    Route::get('/adminpanel' , 'BackendController@index');
    Route::get('/adminpanel/motos' , 'BackendController@indexmoto');
    Route::get('/adminpanel/VUs' , 'BackendController@indexVU');
    Route::get('/adminpanel/CCs' , 'BackendController@indexCC');
    Route::get('/adminpanel/Rs' , 'BackendController@indexR');
    Route::get('/adminpanel/Cs' , 'BackendController@indexC');

    #liste marque
    Route::get('/adminpanel/marques' , 'MarqueController@index');

    Route::get('/adminpanel/moto/marques' , 'MarqueController@motomarqueindex');
    Route::get('/adminpanel/VU/marques' , 'MarqueController@VUmarqueindex');
    Route::get('/adminpanel/CC/marques' , 'MarqueController@CCmarqueindex');
    Route::get('/adminpanel/R/marques' , 'MarqueController@Rmarqueindex');

    Route::get('/adminpanel/C/marques' , 'MarqueController@Cmarqueindex');
    #liste modeles
    Route::get('/adminpanel/modeles/{id?}' , 'MarqueController@modeles');
    Route::get('/adminpanel/moto/modeles/{id?}' , 'MarqueController@motomodeles');
    Route::get('/adminpanel/VU/modeles/{id?}' , 'MarqueController@VUmodeles');
    Route::get('/adminpanel/CC/modeles/{id?}' , 'MarqueController@CCmodeles');
    Route::get('/adminpanel/R/modeles/{id?}' , 'MarqueController@Rmodeles');
    Route::get('/adminpanel/C/modeles/{id?}' , 'MarqueController@Cmodeles');
#supprimer marque avec ses modéles

    Route::get('/adminpanel/marques/{id}/delete' , 'MarqueController@destroymarque');
    Route::get('/adminpanel/moto/marques/{id}/delete' , 'MarqueController@destroymarque');
    Route::get('/adminpanel/VU/marques/{id}/delete' , 'MarqueController@destroymarque');
    Route::get('/adminpanel/CC/marques/{id}/delete' , 'MarqueController@destroymarque');
    Route::get('/adminpanel/R/marques/{id}/delete' , 'MarqueController@destroymarque');
    Route::get('/adminpanel/C/marques/{id}/delete' , 'MarqueController@destroymarque');
#suprimer modele
    Route::get('/adminpanel/modele/{id}/delete' , 'MarqueController@destroymodele');
    Route::get('/adminpanel/moto/modele/{id}/delete' , 'MarqueController@destroymodele');
    Route::get('/adminpanel/VU/modele/{id}/delete' , 'MarqueController@destroymodele');

    Route::get('/adminpanel/CC/modele/{id}/delete' , 'MarqueController@destroymodele');
    Route::get('/adminpanel/R/modele/{id}/delete' , 'MarqueController@destroymodele');
    Route::get('/adminpanel/C/modele/{id}/delete' , 'MarqueController@destroymodele');


#gestion des annonces ;user; marques
    Route::resource('/adminpanel/annonce' , 'BackendController' , ['except' => ['index']]);

    Route::resource('/adminpanel/annonce/moto' , 'BackendController' , ['except' => ['indexmoto']]);
    Route::resource('/adminpanel/annonce/VU' , 'BackendController' , ['except' => ['indexVU']]);
    Route::resource('/adminpanel/annonce/CC' , 'BackendController' , ['except' => ['indexCC']]);
    Route::resource('/adminpanel/annonce/R' , 'BackendController' , ['except' => ['indexR']]);
    Route::resource('/adminpanel/annonce/C' , 'BackendController' , ['except' => ['indexC']]);

    Route::resource('/adminpanel/user/' , 'userSettingsController' , ['except' => ['index']]);

    Route::resource('/adminpanel/marques' , 'MarqueController' , ['except' => ['index']]);
    Route::patch('/adminpanel/marques' , ['as' => 'adminpanel.marques' , 'uses' => 'MarqueController@update']);

    Route::resource('/adminpanel/modeles/' , 'MarqueController' , ['except' => ['modeles']]);
    Route::get('/adminpanel/modele/{id}/edit' , 'MarqueController@editmodele');
    Route::patch('/adminpanel/modele/{id}/edit' , 'MarqueController@Updatemodele');

    Route::get('/adminpanel/annonce/{id}/delete' , 'BackendController@destroy');
    Route::get('/adminpanel/annonce/moto/{id}/delete' , 'BackendController@destroymoto');
    Route::get('/adminpanel/annonce/VU/{id}/delete' , 'BackendController@destroyVU');
    Route::get('/adminpanel/annonce/CC/{id}/delete' , 'BackendController@destroyCC');
    Route::get('/adminpanel/annonce/R/{id}/delete' , 'BackendController@destroyR');
    Route::get('/adminpanel/annonce/C/{id}/delete' , 'BackendController@destroyC');


    Route::get('/adminpanel/users/{id}/delete' , 'UserSettingsController@destroy');

    #ajoute detailles

    Route::post('/adminpanel/ajoute/detaille/couleurEX/' , 'DetailleController@StorecouleurEX');
    Route::post('/adminpanel/ajoute/detaille/couleurEN/' , 'DetailleController@StorecouleurEN');
    Route::post('/adminpanel/ajoute/detaille/categorie/' , 'DetailleController@Storecategorie');
    Route::post('/adminpanel/ajoute/detaille/carburant/' , 'DetailleController@Storecarburant');
    Route::post('/adminpanel/ajoute/detaille/carroserie/' , 'DetailleController@Storecarroserie');
    Route::post('/adminpanel/ajoute/detaille/cv/' , 'DetailleController@Storecv');

//Route::post('/adminpanel/ajoute/detaille/all/' , 'DetailleController@Storeall');





    #ajouter une marque et modeles (voiture)
    Route::get('/adminpanel/ajoute/marque/modele/' , 'MarqueController@AjouteMarqueetModele');
    Route::post('/adminpanel/ajoute/marque/modele/' , 'MarqueController@StoreMarqueetModele');

    #ajoute modéle(voiture)

    Route::get('/adminpanel/ajoute/modele/' , 'MarqueController@AjouteModele');
    Route::post('/adminpanel/ajoute/modele/' , 'MarqueController@StoreModele');
#ajouter une marque et modeles (moto)
    Route::get('/adminpanel/ajoute/moto/marque/modele/' , 'MarqueController@MotoAjouteMarqueetModele');
    Route::post('/adminpanel/ajoute/moto/marque/modele/' , 'MarqueController@MotoStoreMarqueetModele');

    #ajouter une marque et modeles (VU)
    Route::get('/adminpanel/ajoute/VU/marque/modele/' , 'MarqueController@VUAjouteMarqueetModele');
    Route::post('/adminpanel/ajoute/VU/marque/modele/' , 'MarqueController@VUStoreMarqueetModele');
    #ajouter une marque et modeles (CC)
    Route::get('/adminpanel/ajoute/CC/marque/modele/' , 'MarqueController@CCAjouteMarqueetModele');
    Route::post('/adminpanel/ajoute/CC/marque/modele/' , 'MarqueController@CCStoreMarqueetModele');

    #ajouter une marque et modeles (R)
    Route::get('/adminpanel/ajoute/R/marque/modele/' , 'MarqueController@RAjouteMarqueetModele');
    Route::post('/adminpanel/ajoute/R/marque/modele/' , 'MarqueController@RStoreMarqueetModele');

    #ajouter une marque et modeles (C)
    Route::get('/adminpanel/ajoute/C/marque/modele/' , 'MarqueController@CAjouteMarqueetModele');
    Route::post('/adminpanel/ajoute/C/marque/modele/' , 'MarqueController@CStoreMarqueetModele');

    #ajoute modéle(moto)

    Route::get('/adminpanel/ajoute/moto/modele/' , 'MarqueController@MotoAjouteModele');
    Route::post('/adminpanel/ajoute/moto/modele/' , 'MarqueController@MotoStoreModele');
    #ajoute modéle(VU)

    Route::get('/adminpanel/ajoute/VU/modele/' , 'MarqueController@VUAjouteModele');
    Route::post('/adminpanel/ajoute/VU/modele/' , 'MarqueController@VUStoreModele');
#ajoute modéle(CC)

    Route::get('/adminpanel/ajoute/CC/modele/' , 'MarqueController@CCAjouteModele');
    Route::post('/adminpanel/ajoute/CC/modele/' , 'MarqueController@CCStoreModele');
#ajoute modéle(R)

    Route::get('/adminpanel/ajoute/R/modele/' , 'MarqueController@RAjouteModele');
    Route::post('/adminpanel/ajoute/R/modele/' , 'MarqueController@RStoreModele');
#ajoute modéle(C)

    Route::get('/adminpanel/ajoute/C/modele/' , 'MarqueController@CAjouteModele');
    Route::post('/adminpanel/ajoute/C/modele/' , 'MarqueController@CStoreModele');


#valider annonce ,selectionner ;marques existe ou nouvelle(voiture)
    Route::get('/adminpanel/change_status/{id}/{validation}' , 'BackendController@changeStatus');
    Route::get('/adminpanel/change_choix/{id}/{choix}' , 'BackendController@changechoix');
    Route::get('/adminpanel/exsite/{id}/{existe}' , 'BackendController@existe');
    Route::get('/adminpanel/magazine/{id}/{magazine}' , 'BackendController@magazine');
#valider annonce ,selectionner ;marques existe ou nouvelle(moto)
    Route::get('/adminpanel/change_status/moto/{id}/{validation}' , 'BackendController@changeStatusM');
    Route::get('/adminpanel/change_choix/moto/{id}/{choix}' , 'BackendController@changechoixM');
    Route::get('/adminpanel/exsite/moto/{id}/{existe}' , 'BackendController@existeM');
    Route::get('/adminpanel/magazine/moto/{id}/{magazine}' , 'BackendController@magazineM');
#
#valider annonce ,selectionner ;marques existe ou nouvelle(VU)
    Route::get('/adminpanel/change_status/VU/{id}/{validation}' , 'BackendController@changeStatusVU');
    Route::get('/adminpanel/change_choix/VU/{id}/{choix}' , 'BackendController@changechoixVU');
    Route::get('/adminpanel/exsite/VU/{id}/{existe}' , 'BackendController@existeVU');
    Route::get('/adminpanel/magazine/VU/{id}/{magazine}' , 'BackendController@magazineVU');
#

#valider annonce ,selectionner ;marques existe ou nouvelle(CC)
    Route::get('/adminpanel/change_status/CC/{id}/{validation}' , 'BackendController@changeStatusCC');
    Route::get('/adminpanel/change_choix/CC/{id}/{choix}' , 'BackendController@changechoixCC');
    Route::get('/adminpanel/exsite/CC/{id}/{existe}' , 'BackendController@existeCC');
    Route::get('/adminpanel/magazine/CC/{id}/{magazine}' , 'BackendController@magazineCC');
#

#valider annonce ,selectionner ;marques existe ou nouvelle(R)
    Route::get('/adminpanel/change_status/R/{id}/{validation}' , 'BackendController@changeStatusR');
    Route::get('/adminpanel/change_choix/R/{id}/{choix}' , 'BackendController@changechoixR');
    Route::get('/adminpanel/exsite/R/{id}/{existe}' , 'BackendController@existeR');
    Route::get('/adminpanel/magazine/R/{id}/{magazine}' , 'BackendController@magazineR');
#

#valider annonce ,selectionner ;marques existe ou nouvelle(C)
    Route::get('/adminpanel/change_status/C/{id}/{validation}' , 'BackendController@changeStatusC');
    Route::get('/adminpanel/change_choix/C/{id}/{choix}' , 'BackendController@changechoixC');
    Route::get('/adminpanel/exsite/C/{id}/{existe}' , 'BackendController@existeC');
    Route::get('/adminpanel/magazine/C/{id}/{magazine}' , 'BackendController@magazineC');
#











    #liste user
    Route::get('/adminpanel/user' , 'userSettingsController@index');













    #sitesetting
    Route::get('/adminpanel/sitesetting', 'SiteSettingController@index');
    Route::post('/adminpanel/siteseting', 'SiteSettingController@store');

#ajouter sliders
    Route::get('/adminpanel/ajoute/sliders/' , 'SiteSettingController@Ajoutesliders');
    Route::post('/adminpanel/ajoute/sliders/' , 'SiteSettingController@storslider');

    Route::get('/adminpanel/liste/sliders/' , 'SiteSettingController@listeimage');
    Route::get('/adminpanel/sliders/' , 'SiteSettingController@sliders');
    Route::get('/adminpanel/update/sliders/{id}/edit' , 'SiteSettingController@modifier');

    Route::resource('/adminpanel/update/sliders' , 'SiteSettingController');
    Route::get('/adminpanel/update/sliders/{id}/delete' , 'SiteSettingController@destroy');

#ajouter pubH
    Route::get('/adminpanel/ajoute/pubh/' , 'SiteSettingController@Ajoutepubh');
    Route::post('/adminpanel/ajoute/pubh/' , 'SiteSettingController@storpubh');

    Route::get('/adminpanel/liste/pubh/' , 'SiteSettingController@listepubh');
    Route::get('/adminpanel/pubh/' , 'SiteSettingController@pubhs');

    Route::resource('/adminpanel/pubh/update' , 'SiteSettingController');

    Route::get('/adminpanel/update/pubh/{id}/editpubh' , 'SiteSettingController@modifierpubh');

    Route::patch('/adminpanel/pubh/update' , 'SiteSettingController@updatepubh');


    Route::get('/adminpanel/update/pubh/{id}/deletepubh' , 'SiteSettingController@destroypubh');

#ajouter pubV
    Route::get('/adminpanel/ajoute/pubv/' , 'SiteSettingController@Ajoutepubv');
    Route::post('/adminpanel/ajoute/pubv/' , 'SiteSettingController@storpubv');

    Route::get('/adminpanel/liste/pubv/' , 'SiteSettingController@listepubv');

    Route::get('/adminpanel/pubv/' , 'SiteSettingController@pubhvs');
    Route::resource('/adminpanel/pubv/update' , 'SiteSettingController');


    Route::get('/adminpanel/update/pubv/{id}/editpubv' , 'SiteSettingController@modifierpubv');
    Route::patch('/adminpanel/pubv/update' , 'SiteSettingController@updatepubv');

    Route::get('/adminpanel/update/pubv/{id}/deletepuv' , 'SiteSettingController@destroypubv');



});




Route::group(['middlewareGroups' => 'web'], function () {


    Route::get('/contact', 'ContactController@getcontact');
    Route::post('/contact', 'ContactController@store');


    Route::get('/contactUs', 'HomeController@contact');
    Route::post('/contactnous', 'ContactController@storecontactnous');



    /*  Route::get('/basicemail', 'MailController@basic_email');
      Route::get('/htmlemail', 'MailController@html_email');
      Route::get('/attachemail', 'MailController@attachment_email');*/




    Route::auth();
    Route::get('/home', 'HomeController@index');



//Routes for frontOffice






// 1-Editer infos
    Route::get('/settings' , 'UserSettingsController@userSettings');
    Route::patch('/settings' , ['as' => 'settings' , 'uses' => 'UserSettingsController@userUpdateSettings']);



// 2-Changer mot de passe
    Route::get('/changePassword' , 'UserSettingsController@getPassword');
    Route::patch('/changePassword' , ['as' => 'changePassword' , 'uses' => 'UserSettingsController@updatePassword']);
#liste grid
    Route::get('/gridsv' , 'UserSettingsController@gridv')->middleware('auth');
    Route::get('/change_choix/{id}/{choix}' , 'UserSettingsController@changechoix');

    Route::get('/gridsR' , 'UserSettingsController@gridR')->middleware('auth');
    Route::get('/change_choixR/{id}/{choix}' , 'UserSettingsController@changechoixR');


    Route::get('/gridsCC' , 'UserSettingsController@gridCC')->middleware('auth');
    Route::get('/change_choixCC/{id}/{choix}' , 'UserSettingsController@changechoixCC');

    Route::get('/gridsC' , 'UserSettingsController@gridC')->middleware('auth');
    Route::get('/change_choixC/{id}/{choix}' , 'UserSettingsController@changechoixC');

    Route::get('/gridsVU' , 'UserSettingsController@gridVU')->middleware('auth');
    Route::get('/change_choixVU/{id}/{choix}' , 'UserSettingsController@changechoixVU');

    Route::get('/gridsM' , 'UserSettingsController@gridM')->middleware('auth');
    Route::get('/change_choixM/{id}/{choix}' , 'UserSettingsController@changechoixM');










// 1-ajouter annonce par etape
    Route::get('/sell','AutoController@userAddAuto')->middleware('auth');
    Route::post('/sell' , 'AutoController@storeAuto')->middleware('auth');
    Route::get('get/auto_model','AutoController@get_auto_model');
    Route::post('/step1','AutoController@getinfo1');
    Route::get('/step2','AutoController@info2');
    Route::post('/step2','AutoController@getinfo2');
    Route::post('/step3','AutoController@getinfo3');
    Route::get('/step3','AutoController@info3');
    Route::get('/step4','AutoController@info4');
    Route::post('/step4','AutoController@getinfo4');
    Route::post('/step5','AutoController@getinfo5');
    Route::get('/step5','AutoController@info5');
#detaille
    Route::get('/detaille/{id}','AutoController@detaillevoiture');
    Route::get('/sameUser/{id}','AutoController@SameUser');
#modifier annonce
    Route::get('/update/{id}','AutoSettingController@update')->middleware('auth');
    Route::patch('/update/voiture' , 'AutoSettingController@userUpdatecar')->middleware('auth');


// 2-Ajouter une annonce (moto)
    Route::get('get/moto_model','MotoController@get_moto_model');

    Route::get('/motosell','MotoController@userAddAuto')->middleware('auth');
    Route::post('/motostep1','MotoController@getinfo1');
    Route::get('/motostep2','MotoController@info2');
    Route::post('/motostep2','MotoController@getinfo2');
    Route::post('/motostep3','MotoController@getinfo3');
    Route::get('/motostep3','MotoController@info3');
    Route::get('/motostep4','MotoController@info4');
    Route::post('/motostep4','MotoController@getinfo4');
//Route::post('/step5','MotoController@getinfo5');
//Route::get('/step5','MotoController@info5');
    Route::post('/motosell' , 'MotoController@storeAuto')->middleware('auth');
#detaille
    Route::get('/detaillemoto/{id}','MotoController@detaillemoto');

#modifier annonce
    Route::get('/motoupdate/{id}','AutoSettingController@updatemoto')->middleware('auth');
    Route::patch('/update/moto' , 'AutoSettingController@userUpdatemoto')->middleware('auth');

// 3-Ajouter une annonce (vahicule-utilitaire)
    Route::get('get/vehicule_model','VehiculeController@get_vehicule_model');

    Route::get('/vehiculesell','VehiculeController@userAddAuto')->middleware('auth');
    Route::post('/VUstep1','VehiculeController@getinfo1');
    Route::get('/VUstep2','VehiculeController@info2');
    Route::post('/VUstep2','VehiculeController@getinfo2');
    Route::post('/VUstep3','VehiculeController@getinfo3');
    Route::get('/VUstep3','VehiculeController@info3');
    Route::get('/VUstep4','VehiculeController@info4');
    Route::post('/VUstep4','VehiculeController@getinfo4');
    Route::post('/vustep5','VehiculeController@getinfo5');
    Route::get('/vustep5','VehiculeController@info5');
    Route::post('/vehiculesell' , 'VehiculeController@storeAuto')->middleware('auth');
#detaille
    Route::get('/detailleVU/{id}','VehiculeController@detailleVU');

#modifier annonce
    Route::get('/VUpdate/{id}','AutoSettingController@updateVU')->middleware('auth');
    Route::patch('/update/VU' , 'AutoSettingController@userUpdateVU')->middleware('auth');


    Route::get('/search-VU', 'VehiculeController@vahicule_searche');

    Route::get('/vehiculeadvancedsearch', 'VehiculeController@advencedsearchliste');

// 4-Ajouter une annonce (camping)
    Route::get('/sellcamping','CampingController@userAddAuto')->middleware('auth');
    Route::post('/sellcamping' , 'CampingController@storeAuto')->middleware('auth');
    Route::get('get/camping_model','CampingController@get_camping_model');
    Route::post('/campingstep1','CampingController@getinfo1');
    Route::get('/campingstep2','CampingController@info2');
    Route::post('/campingstep2','CampingController@getinfo2');
    Route::post('/campingstep3','CampingController@getinfo3');
    Route::get('/campingstep3','CampingController@info3');
    Route::get('/campingstep4','CampingController@info4');
    Route::post('/campingstep4','CampingController@getinfo4');
#detaille
    Route::get('/camping/detaille/{id}','CampingController@detaillecamping');
#modifier annonce
    Route::get('/camping/update/{id}','AutoSettingController@updatecamping')->middleware('auth');
    Route::patch('update/camping' , 'AutoSettingController@userUpdatecamping')->middleware('auth');





// 5-Ajouter une annonce (remorque)



    Route::get('/sellremorque','RemorqueController@userAddAuto')->middleware('auth');
    Route::post('/sellremorque' , 'RemorqueController@storeAuto')->middleware('auth');
    Route::get('get/remorque_model','RemorqueController@get_remorque_model');
    Route::post('/remoroquestep1','RemorqueController@getinfo1');
    Route::get('/remoroquestep2','RemorqueController@info2');
    Route::post('/remoroquestep2','RemorqueController@getinfo2');
    Route::post('/remoroquestep3','RemorqueController@getinfo3');
    Route::get('/remoroquestep3','RemorqueController@info3');
    Route::get('/remoroquestep4','RemorqueController@info4');
    Route::post('/remoroquestep4','RemorqueController@getinfo4');
    Route::post('/remoroquestep5','RemorqueController@getinfo5');
    Route::get('/remoroquestep5','RemorqueController@info5');
#detaille
    Route::get('/remorque/detaille/{id}','RemorqueController@detailleremorque');
#modifier annonce
    Route::get('/remorque/update/{id}','AutoSettingController@updateremorque')->middleware('auth');
    Route::patch('update/remorque' , 'AutoSettingController@userUpdateRemorque')->middleware('auth');






// 6-Ajouter une annonce (camion)
    Route::get('/sellcamion','CamionController@userAddAuto')->middleware('auth');
    Route::post('/sellcamion' , 'CamionController@storeAuto')->middleware('auth');
    Route::get('get/camion_model','CamionController@get_camion_model');
    Route::post('/camionstep1','CamionController@getinfo1');
    Route::get('/camionstep2','CamionController@info2');
    Route::post('/camionstep2','CamionController@getinfo2');
    Route::post('/camionstep3','CamionController@getinfo3');
    Route::get('/camionstep3','CamionController@info3');
    Route::get('/camionstep4','CamionController@info4');
    Route::post('/camionstep4','CamionController@getinfo4');
    Route::post('/camionstep5','CamionController@getinfo5');
    Route::get('/camionstep5','CamionController@info5');
#detaille
    Route::get('/camion/detaille/{id}','CamionController@detaillecamion');
#modifier annonce
    Route::get('/camion/update/{id}','AutoSettingController@updatecamion')->middleware('auth');
    Route::patch('update/camion' , 'AutoSettingController@userUpdateCamion')->middleware('auth');



// 3- Afficher les annonces selectionner
    Route::get('/','AutoController@index');
//4-chercher annonces
    Route::get('/search', 'AutoController@search');
    Route::get('/motosearch', 'MotoController@searche');
    Route::get('/vehiculesearch', 'VehiculeController@searche');
    Route::get('/campingsearch', 'CampingController@searche');
    Route::get('/camionsearch', 'CamionController@searche');
    Route::get('/remorquesearch', 'RemorqueController@searche');

    Route::get('/advancedsearch', 'AutoController@advencedsearchliste');
    Route::get('/motoadvancedsearch', 'MotoController@advencedsearchliste');
//afficher mes annonces
    Route::get('/user/AnnouncementShow' , 'AutoSettingController@showUserAnnouncement')->middleware('auth');
    Route::get('/user/showAnnouncementWatting' , 'AutoSettingController@showUserAnnouncementWatting')->middleware('auth');

#Testselect
    /*Route::get('/prodview','TestController@prodfunct');
    Route::get('/findProductName','TestController@findProductName');
    Route::get('/findProductcorosserie','TestController@findProductcorosserie');
    Route::get('/findPrice','TestController@findPrice');*/


#magazine
    // Route::get('/Commentmagazine', 'MagazineController@magazine');
    Route::get('/magazine', ['as' => 'magazine', 'uses' => 'MagazineController@magazine']);

    Route::get('/Commentmagazine', ['as' => 'comments.magazine', 'uses' => 'CommentController@magazine']);
    Route::post('/comments/{auto_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);

    Route::get('comments/{id}/edit', ['uses' => 'CommentController@edit', 'as' => 'comments.edit']);
    Route::put('comments/{id}', ['uses' => 'CommentController@update', 'as' => 'comments.update']);



    Route::delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentController@delete', 'as' => 'comments.delete']);

// Comments
    //  Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

});


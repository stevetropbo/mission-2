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
        /*-------------------- Use case connexion---------------------------*/
Route::get('/',[
        'as' => 'chemin_connexion',
        'uses' => 'connexionController@connecter'
]);

Route::post('/',[
        'as'=>'chemin_valider',
        'uses'=>'connexionController@valider'
]);
Route::get('deconnexion',[
        'as'=>'chemin_deconnexion',
        'uses'=>'connexionController@deconnecter'
]);

         /*-------------------- Use case état des frais---------------------------*/
Route::get('selectionMois',[
        'as'=>'chemin_selectionMois',
        'uses'=>'etatFraisController@selectionnerMois'
]);

Route::get('selectionMoisAdmin',[
        'as'=>'chemin_selectionMoisAdmin',
        'uses'=>'adminEtatFraisController@voirlistetype'
]);

Route::post('listeFrais',[
        'as'=>'chemin_listeFrais',
        'uses'=>'etatFraisController@voirFrais'
]);

        /*-------------------- Use case gérer les frais---------------------------*/

Route::get('gererFrais',[
        'as'=>'chemin_gestionFrais',
        'uses'=>'gererFraisController@saisirFrais'
]);

Route::post('sauvegarderFrais',[
        'as'=>'chemin_sauvegardeFrais',
        'uses'=>'gererFraisController@sauvegarderFrais'
]);

        /*-------------------- Use case affiche les frais des visiteurs---------------------------*/

        Route::get('fraisVsisteur',[
                'as'=>'chemin_fraisVisiteurs',
                'uses'=>'etatFraisController@voirFrais'
        ]);

Route::get('voirlisteType',[
        'as'=>'chemin_selectionType',
        'uses'=>'adminEtatFraisController@voirlisteType',

]);

route::post('listetype',[
        'as'=>'chemin_listetype',
        'uses'=>'adminEtatFraisController@listetype'
]);

route::post('afficher',[
        'as'=>'chemin_afficher',
        'uses'=>'adminEtatFraisController@afficher'
]);
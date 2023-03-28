<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
class adminEtatFraisController extends Controller
{
    function voirlistetype()
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lesTypes = PdoGsb::getLesTypes();
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getIdVisiteur();

            $vue = view('voirlistetype')
                ->with('admin', $admin)
                ->with('lesTypes', $lesTypes)
                ->with('lesMois', $lesMois)
                ->with('lesVisiteurs', $lesVisiteurs);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function afficher(Request $request)
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lesTypes = PdoGsb::getLesTypes();
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getIdVisiteur();

            $vue = view('voirlistetype')
                ->with('admin', $admin)
                ->with('lesTypes', $lesTypes)
                ->with('lesMois', $lesMois)
                ->with('lesVisiteurs', $lesVisiteurs);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }


    function afficherFrais(Request $request)
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lesTypes = PdoGsb::getLesTypes();
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getIdVisiteur();
            $ficheFrais = PdoGsb::getAfficher();

            $vue = view('afficherListetype')
                ->with('admin', $admin)
                ->with('lesTypes', $lesTypes)
                ->with('lesMois', $lesMois)
                ->with('lesVisiteurs', $lesVisiteurs);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    
}
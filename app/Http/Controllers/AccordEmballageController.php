<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccordEmballageController extends Controller
{


    public function printall(Request $request)
    {
        $dateaccempt =$request->datedemandeetude;
        $client_fin = $request->client_fin;
        $client_debut = $request->client_debut;
        $etude_technique = $request->numeetudetech;
        $criteremouchard = "";
        $vcritiereet = "";

        if(!is_null($dateaccempt) && !empty($dateaccempt)) {

            $vcritieredate = " AND DateSaisieAccord =convert(date, '" . date('d-m-Y', strtotime($dateaccempt)). "', 103) ";
            $criteremouchard=$criteremouchard. $vcritieredate;

        } else {

            $vcritieredate = "";
            $criteremouchard="";
        }

        if(!is_null($client_debut) && !empty($client_debut)) {

            $vcrtireclientdebut = " AND LibTiers >=  '" . EnleverCaractereGenant($client_debut,1) . "' ";
            $criteremouchard=$criteremouchard. $vcrtireclientdebut;
        } else {

            $vcrtireclientdebut = "";
            $criteremouchard="";
        }


        if(!is_null($client_fin) && !empty($client_fin)) {

            $vcritereclientfin = " AND LibTiers <=  '" . EnleverCaractereGenant($client_fin,1) . "' ";
            $criteremouchard=$criteremouchard. $vcritereclientfin;
        }else {
            $vcritereclientfin = "";
            $criteremouchard="";
        }

        $listeaccordemballage =  DB::select("SELECT * FROM VListeAccordsEmballages WHERE NOT NumEtudeTech IS NULL ". $vcritiereet. $vcritieredate . $vcrtireclientdebut. $vcritereclientfin. "  Order by DateSaisieAccord desc");

        $pdf = APP::make('dompdf.wrapper');
        $pdf->loadView('accordemballagesprit', compact('listeaccordemballage'));
        set_mouchard('Impression de la liste des Accords emballages.',$criteremouchard ,'');
        return $pdf->stream();

    }











    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

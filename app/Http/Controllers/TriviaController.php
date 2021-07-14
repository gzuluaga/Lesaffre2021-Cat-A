<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Redirect;
use Auth;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;
use DatePeriod;
use DateInterval;
use Hash;

use App\Models\Formulario;
use App\Models\OpcionesPregunta;
use App\Models\Preguntas;
use App\Models\FormPregunta;

class TriviaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function viewtribia(Request $request)
    {
    	if ($request) {
    		return view('backend.trivia');
    	}
    }


    /**
     * [store formulario]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

             $formulario                = new Formulario();
             $formulario->descripcion   = $request->descripcion; 
             $formulario->formtrivia    = $request->numero_formulario;
             $formulario->fecha_star    = $request->fecha_publicacion;
             $formulario->fecha_end     = $request->fecha_terminacion;
             $formulario->estado        = '1';
             $formulario->save();

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function getFormularios(Request $request)
    {
        if(!$request->ajax()) return redirect('/');

        $getFormularios = Formulario::where('estado',1)->get();

        return [ 'getFormularios' => $getFormularios ];
    }

    /**
     * [storePregunta description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storePregunta(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

            $pregunta                = new Preguntas();
            $pregunta->formularios_id = $request->id_formulario; 
            $pregunta->pregunta      = $request->pregunta;
            $pregunta->calificacion  = $request->calificacion;
            $pregunta->estado        = 1;   
            $pregunta->save();
           

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function getPreguntas(Request $request)
    {
        if(!$request->ajax()) return redirect('/');

        $getPregntas = Preguntas::where('estado',1)->get();

        return [ 'getPregntas' => $getPregntas ];
    }

    /**
     * [store Opciones]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeOpciones(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

             $opcionPregunta                    = new OpcionesPregunta();
             $opcionPregunta->preguntas_id      = $request->pregunta_id; 
             $opcionPregunta->nombrePregunta    = $request->opcionPregunta;
             $opcionPregunta->criterio          = $request->criterio;
             $opcionPregunta->estado            = '1';
             $opcionPregunta->save();

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }



    public function getDatos(Request $request)
    {
        if(!$request->ajax()) return redirect('/');

        $formulario      = Formulario::paginate(15);

        return[
            'pagination' => [
                'total'         => $formulario->total(),
                'current_page'  => $formulario->currentPage(),
                'per_page'      => $formulario->perPage(),
                'last_page'     => $formulario->lastPage(),
                'from'          => $formulario->firstItem(),
                'to'            => $formulario->lastItem(),
            ],
            'formulario'    => $formulario
        ];
    }

    public function getPreguntasForm(Request $request)
    {
         if(!$request->ajax()) return redirect('/');

            $id         = $request->id_formulario;
            $datos      = Preguntas::where('formularios_id', '=', $id)->get();


        return [ 'datos' => $datos ];
    }

    public function getPreguntasOpciones(Request $request)
    {
         if(!$request->ajax()) return redirect('/');

            $id         = $request->id_pregunta;
            $datos      = OpcionesPregunta::where('preguntas_id', '=', $id)->get();


        return [ 'datos' => $datos ];
    }


}

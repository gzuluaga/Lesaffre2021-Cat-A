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

use App\Models\Respuesta;
use App\Models\RespuestaDetalle;
use App\Models\TblPuntuacion;


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

    public function viewRespuestas(Request $request)
    {
        if ($request) {
            return view('frontend.page_respuestas');
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
            $datos      = Preguntas::where('formularios_id', '=', $id)->where('estado',1)->get();


        return [ 'datos' => $datos ];
    }

    public function getPreguntasOpciones(Request $request)
    {
         if(!$request->ajax()) return redirect('/');

            $id         = $request->id_pregunta;
            $datos      = OpcionesPregunta::where('preguntas_id', '=', $id)->where('estado',1)->get();


        return [ 'datos' => $datos ];
    }


    public function updateForm(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

             $formulario                = Formulario::findOrfail($request->id);
             $formulario->descripcion   = $request->descripcion; 
             $formulario->formtrivia    = $request->numero_formulario;
             $formulario->fecha_star    = $request->fecha_publicacion;
             $formulario->fecha_end     = $request->fecha_terminacion;
             $formulario->estado        = '1';
             $formulario->update();

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function updatePregunta(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

            $pregunta                   = Preguntas::findOrfail($request->id);
            $pregunta->formularios_id   = $request->id_formulario; 
            $pregunta->pregunta         = $request->pregunta;
            $pregunta->calificacion     = $request->calificacion;
            $pregunta->estado           = 1;   
            $pregunta->update();
           

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function updateOpciones(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

             $opcionPregunta                    = OpcionesPregunta::findOrfail($request->id);
             $opcionPregunta->preguntas_id      = $request->pregunta_id; 
             $opcionPregunta->nombrePregunta    = $request->opcionPregunta;
             $opcionPregunta->criterio          = $request->criterio;
             $opcionPregunta->estado            = '1';
             $opcionPregunta->update();

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    // eliminar
    public function deleteForm(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

             $formulario                = Formulario::findOrfail($request->id);
             $formulario->estado        = '0';
             $formulario->update();

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function deletePregunta(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

            $pregunta                   = Preguntas::findOrfail($request->id);
            $pregunta->estado           = 0;   
            $pregunta->update();
           

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function deleteOpciones(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        try {
             DB::beginTransaction();

             $opcionPregunta                    = OpcionesPregunta::findOrfail($request->id);
             $opcionPregunta->estado            = '0';
             $opcionPregunta->update();

             DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function getFormulariosfrom(Request $request)
    {
        if(!$request->ajax()) return redirect('/');

        $fecha_actual = Carbon::now()->format('Y-m-d');

        $getFormulariosfrom = Formulario::where('estado',1)
                                        ->whereRaw("'".$fecha_actual."' BETWEEN fecha_star AND fecha_end")
                                        ->first();

        return [ 'getFormulariosfrom'   => $getFormulariosfrom,
                 'fecha_actual'         => $fecha_actual   ];
    }

    public function getPreguntasfront(Request $request)
    {
         if(!$request->ajax()) return redirect('/');

            $id         = $request->id_formulario;
            $preguntas      = Preguntas::where('formularios_id', '=', $id)->where('estado',1)->get();

            
            $opcionesPreguntas = OpcionesPregunta::where('estado',1)->get();



        return [    'preguntas'         => $preguntas,
                    'opcionesPreguntas' => $opcionesPreguntas,
                ];
    }

  
    public function storeRespuestas(Request $request)
    {
        if(!$request->ajax()) return redirect('/');

        try {
            DB::beginTransaction();

            /*Respuesta
            RespuestaDetalle*/
           /* $respuesta_encabezado                       = new Respuesta();
            $respuesta_encabezado->user_id              = Auth::USer()->id;
            $respuesta_encabezado->puntuacion           = $request->;
            $respuesta_encabezado->formulario_id        = $request->formulario_id;
            $respuesta_encabezado->estado               = 1;
            $respuesta_encabezado->save();*/

            // sumo todas preguntas * 0.6 

            $validacion = DB::table('respuesta_detalles')
                        ->where('user_id',Auth::User()->id)
                        ->where('formulario_id',$request->formulario_id)
                        ->where('pregunta_id',$request->pregunta_id)
                        ->count();



            if ($validacion > 0) {

                $validacion = DB::table('respuesta_detalles')
                        ->where('user_id',Auth::User()->id)
                        ->where('formulario_id',$request->formulario_id)
                        ->where('pregunta_id',$request->pregunta_id)
                        ->first();
                
                $reqpuesta_detalle                          = RespuestaDetalle::findOrfail($validacion->id);
                $reqpuesta_detalle->user_id                 = Auth::USer()->id;
                $reqpuesta_detalle->formulario_id           = $request->formulario_id;
                $reqpuesta_detalle->pregunta_id             = $request->pregunta_id;
                $reqpuesta_detalle->opciones_preguntas_id   = $request->opcion_id;
                $reqpuesta_detalle->criterio                = $request->criterio;
                $reqpuesta_detalle->estado                  = 1;
                $reqpuesta_detalle->update();

            }else {

                $reqpuesta_detalle                          = new RespuestaDetalle();
                $reqpuesta_detalle->user_id                 = Auth::USer()->id;
                $reqpuesta_detalle->formulario_id           = $request->formulario_id;
                $reqpuesta_detalle->pregunta_id             = $request->pregunta_id;
                $reqpuesta_detalle->opciones_preguntas_id   = $request->opcion_id;
                $reqpuesta_detalle->criterio                = $request->criterio;
                $reqpuesta_detalle->estado                  = 1;
                $reqpuesta_detalle->save();

            }


            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }

    }

    public function validacionRespuestas(Request $request)
    {
         if(!$request->ajax()) return redirect('/');


        // validaciones
        
        $validacion_preguntas = DB::table('preguntas') 
                        ->where('formularios_id',$request->id_formulario)
                        ->count();

        $validacion_respuestas = DB::table('respuesta_detalles')
                        ->where('formulario_id',$request->id_formulario)
                        ->where('user_id',Auth::User()->id)
                        ->count();

        $mensaje = "";
        $flag = 0;

        if ($validacion_preguntas !=  $validacion_respuestas) {
            $mensaje = "Por favor responder todas las preguntas";
            $flag = 0;
            return [
                    'validacion_preguntas'  => $validacion_preguntas,
                    'validacion_respuestas' => $validacion_respuestas,
                    'mensaje'               => $mensaje,
                    'flag'                  => $flag
                    ];
        }


        if ($validacion_preguntas ===  $validacion_respuestas) {
            

            $criterio_puntos = $validacion_respuestas*0.6;

            $view_respuestas = DB::table('respuesta_detalles')
                            ->select(DB::Raw('sum(criterio) as total_criterio'))
                            ->where('formulario_id',$request->id_formulario)
                            ->where('user_id',Auth::User()->id)
                            ->first();
            
            if ($view_respuestas->total_criterio >= $criterio_puntos) {
               
                $mensaje = "Felicitaciones has ganado la trivia";
                $flag = 1;

                try {
                    DB::beginTransaction();

                    $respuesta_encabezado                       = new Respuesta();
                    $respuesta_encabezado->user_id              = Auth::User()->id;
                    $respuesta_encabezado->puntuacion           = $view_respuestas->total_criterio;
                    $respuesta_encabezado->formulario_id        = $request->id_formulario;
                    $respuesta_encabezado->estadoTrivia         = 'Gano';
                    $respuesta_encabezado->estado               = 1;
                    $respuesta_encabezado->save();

                    $puntos_ganador = 5.0;
                    
                    $puntuacion                                 = new TblPuntuacion();
                    $puntuacion->user_id                        = Auth::User()->id;
                    $puntuacion->puntuacion                     = $puntos_ganador;
                    $puntuacion->trivia                         = 'trivia';
                    $puntuacion->save();

                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();
                }

                return [
                    'validacion_preguntas'  => $validacion_preguntas,
                    'validacion_respuestas' => $validacion_respuestas,
                    'mensaje'               => $mensaje,
                    'flag'                  => $flag
                    ];
            }else{
                $mensaje = "Continua intentado";
                $flag = 2;

                try {
                    DB::beginTransaction();

                    $respuesta_encabezado                       = new Respuesta();
                    $respuesta_encabezado->user_id              = Auth::User()->id;
                    $respuesta_encabezado->puntuacion           = $view_respuestas->total_criterio;
                    $respuesta_encabezado->formulario_id        = $request->id_formulario;
                    $respuesta_encabezado->estadoTrivia         = 'Sigue Intentando';
                    $respuesta_encabezado->estado               = 1;
                    $respuesta_encabezado->save();

                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();
                }

                return [
                    'validacion_preguntas'  => $validacion_preguntas,
                    'validacion_respuestas' => $validacion_respuestas,
                    'mensaje'               => $mensaje,
                    'flag'                  => $flag
                    ];
            }
                                        
        }


        
        
        return [
                'validacion_preguntas'  => $validacion_preguntas,
                'validacion_respuestas' => $validacion_respuestas,
                'mensaje'               => $mensaje,
                'flag'                  => $flag
                ];

    }

}

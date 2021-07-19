<template>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="alert alert-danger" role="alert" v-if="flag.mensaje.error">
                  {{ formulario.mensajeform  }}
                </div>
                <div class="alert alert-success" role="alert" v-if="flag.mensaje.success">
                  {{ formulario.mensajeform  }}
                </div>
                <div class="alert alert-warning" role="alert" v-if="flag.mensaje.warning">
                  {{ formulario.mensajeform  }}
                </div>
                <div v-for="(preguntas, key) in arrayPreguntas" :key="preguntas.id" style="margin-bottom:2%;">
                    <div class="border">
                        <div class="question bg-white p-3 border-bottom">
                            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                                <center>
                                    <i class="fad fa-pie fa-5x"></i>
                                </center>
                            </div>
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 style="color:#EF8E26;">{{ key+1 }}&nbsp;</h3>
                                <h5 class="mt-1 ml-2">{{ preguntas.pregunta }}</h5>
                            </div>
                            <div class="row align-items-center h-100 y justify-content-center">
                                <div v-for="(opciones) in arrayRespuestasPreguntas" :key="opciones.id" v-if="preguntas.id === opciones.preguntas_id">
                                    <div class="ans ml-2">
                                        <label class="radio">
                                            <input type="radio" :name="key" @change="validacionRespuesta(opciones,preguntas.formularios_id)" :disabled="flag.btnEnviar == true"> 
                                                <span>{{ opciones.nombrePregunta }}</span>
                                        </label>
                                    </div>
                                </div>                            
                            </div>  

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
            <button class="btn btn-primary border-success align-items-center btn-success"  type="button" :disabled="flag.btnEnviar == true"  @click="storeFormulario()">Guardar</button>
        </div>
        <br>
    </div>
</template>

<script>
  export default {
    data () {
            return {
                arrayFormularios:           [],
                arrayPreguntas:             [],
                arrayRespuestasPreguntas:   [],
                id_formulario:              '', 

                formulario: {
                    formulario_id:  '',
                    pregunta_id:    '',
                    opcion_id:      '',
                    criterio:       '',
                    mensajeform:    '',
                },
                flag: {
                    btnEnviar:  false,
                    mensaje:    {
                        error:      false,
                        success:    false,
                        warning:    false,
                    },
                    condicion:  false,
                },
            }
    },

    methods:{
        getFormulario: async function () {
             const url = 'respuestas/getFormulariosfrom';
                try{
                    const response          = await axios.get(url)
                    const respuesta         = response.data;
                    this.arrayFormularios   = respuesta.getFormulariosfrom;
                    this.id_formulario      = respuesta.getFormulariosfrom.id
                    this.getPreguntasForm(this.id_formulario);
                } catch (error){
                    if(error.response.status === 500){
                        console.log(error.reponse)
                    }
                    if(error.response.status === 404){
                        console.log(error.reponse)
                    }
                }
          	},

        getPreguntasForm: async function (id){
            const url = 'respuestas/getPreguntasfront?id_formulario=' + id;

            try{
                const response          		    = await axios.get(url)
                if(response.status===200){
                    const respuesta         		= response.data;
                    this.arrayPreguntas   		    = respuesta.preguntas;                    
                    this.arrayRespuestasPreguntas   = respuesta.opcionesPreguntas;
                }                
            } catch (error){
                if(error.response.status === 500){
                    console.log(error.reponse)
                }
                if(error.response.status === 404){
                    console.log(error.reponse)
                }
            }
        },

        validacionRespuesta: function(opciones = [], id_form) {
            this.formulario.formulario_id = id_form;
            this.formulario.pregunta_id   = opciones['preguntas_id'];
            this.formulario.opcion_id     = opciones['id'];
            this.formulario.criterio      = opciones['criterio'];

            this.sotreRespuesta();
        },

        sotreRespuesta: async function() {

            try {
                    const request = {
                        'formulario_id':     this.formulario.formulario_id,
                        'pregunta_id':       this.formulario.pregunta_id,
                        'opcion_id':         this.formulario.opcion_id,
                        'criterio':          this.formulario.criterio,
                    }

                    const response = await axios.post('respuestas/storeRespuestas', request)
                    if(response.status === 200){
                        // console.log('guardo')
                    }
            } catch(error) {
                console.log(error.response);

                  /** si el status es 500, error en el servidor */
                  if(error.response.status === 500){
                    console.log(error)
                  }
                  /** si el status es 422, alguno de los datos tuvo un error de validacion */
                  if(error.response.status === 422){                    
                    console.log(error)
                  }
            }
        },

        storeFormulario: async function() {
            const url = 'respuestas/validacionRespuestas?id_formulario=' + this.formulario.formulario_id;
             // const url = 'accesorios/index?page='+page+'&buscar='+buscar+'&criterio='+criterio;

            try{
                const response                      = await axios.get(url)
                if(response.status===200){
                    const respuesta                 = response.data;
                    this.formulario.mensajeform     = respuesta.mensaje;
                    this.flag.condicion             = respuesta.flag;
                    
                    if (this.flag.condicion == 0) {
                        this.flag.btnEnviar = false;
                        this.flag.mensaje.error   = true;
                    }
                    
                    if (this.flag.condicion == 1) {
                        this.flag.btnEnviar = true;
                        this.flag.mensaje.success   = true;
                    }

                     if (this.flag.condicion == 2) {
                        this.flag.btnEnviar = true;
                        this.flag.mensaje.warning  = true;
                    }

                }                
            } catch (error){
                if(error.response.status === 500){
                    console.log(error.reponse)
                }
                if(error.response.status === 404){
                    console.log(error.reponse)
                }
            }
        }

    },   

    mounted() {
        console.log('Component mounted.')
        this.getFormulario();
    }
  };
</script>


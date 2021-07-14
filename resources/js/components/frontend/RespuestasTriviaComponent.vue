<template>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div v-for="(preguntas, key) in arrayPreguntas" :key="preguntas.id">
                    <div class="border">
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 style="color:#EF8E26;">{{ key+1 }}&nbsp;</h3>
                                <h5 class="mt-1 ml-2">{{ preguntas.pregunta }}</h5>
                            </div>
                            <div class="row">
                                <div>
                                    <div class="ans ml-2">
                                        <label class="radio"> 
                                            <input type="radio" name="brazil" value="brazil"> 
                                                <span>100 gramos</span>
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
                    <button class="btn btn-primary border-success align-items-center btn-success" type="button">Guardar
                    </button>
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
            const url = 'respuestas/getPreguntasForm?id_formulario=' + id;

            try{
                const response          		= await axios.get(url)
                if(response.status===200){
                    const respuesta         		= response.data;
                    this.arrayPreguntas   		    = respuesta.datos;
                    this.getPreguntasOpciones(this.arrayPreguntas);
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
        getPreguntasOpciones: function(datos=[]){                
            const arrayPreguntasID = []
            datos.map(function(x)
            {
                arrayPreguntasID.push(x.id)
                console.log(this.arrayPreguntasID);
            });
            

            //const url = 'getRespuestasPreguntas?';

            // try{
            //     const response          		= await axios.get(url)
            //     const respuesta         	    = response.data;
            //     this.arrayRespuestasPreguntas   = respuesta.datos;

            //     this.flagDescripcionOpciones = true;
            // } catch (error){
            //     if(error.response.status === 500){
            //         console.log(error.reponse)
            //     }
            //     if(error.response.status === 404){
            //         console.log(error.reponse)
            //     }
            // }
        },
    },   
    mounted() {
        console.log('Component mounted.')
        this.getFormulario();
    }
  };
</script>


<template>
    <div class="container-fluid">
    	<div class="row">

    	<div class="col-sm-12 col-12">
    		<div class="card">
			  <div class="card-body">
			    	<div class="row">
			    		<h5>Crear Formulario</h5>
			    	</div>
			    	<div class="row">
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Descripción</label>
			    			 <input type="text" class="form-control" v-model="descripcion">
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Numero formulario</label>
			    			 <input type="number" class="form-control" v-model="numero_formulario">
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Fecha de Publicación</label>
			    			 <input type="date" class="form-control" v-model="fecha_publicacion">
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Fecha de terminación</label>
			    			 <input type="date" class="form-control" v-model="fecha_terminacion">
			    		</div>
			    	</div>
			    	<div class="row">
			    		<button class="btn btn-primary" @click="storeFormulario()">Guardar</button>
			    	</div>
			  </div>
			</div>
    	</div>


    	<div class="col-sm-6 col-12">
    		<div class="card">
			  <div class="card-body">
			    	<div class="row">
			    		<h5>Crear Pregunta</h5>
			    	</div>
			    	<div class="row">
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Seleccionar Formulario</label>
			    			 <select class="form-control" v-model="id_formulario">
			    			 	<option value="0">Seleccionar</option>
			    			 	<option  v-for="form in arrayFormularios" :key="form.id" :value="form.id" v-text="form.descripcion"></option>
			    			 </select>
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Pregunta</label>
			    			 <input type="text" class="form-control" v-model="pregunta">
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Archivo</label>
			    			 <input type="file" class="form-control" >
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Calificación</label>
			    			 <input type="number" class="form-control" v-model="calificacion">
			    		</div>
			    	</div>
			    	<div class="row">
			    		<button class="btn btn-primary" @click="storePregurnta()">Guardar</button>
			    	</div>
			  </div>
			</div>
    	</div>

    	<div class="col-sm-6 col-12">
    		<div class="card">
			  <div class="card-body">
			    	<div class="row">
			    		<h5>Crear Opciones</h5>
			    	</div>
			    	<div class="row">
			    		
			    		<div class="mb-3">
			    			<label for="pregunta" class="form-label">Pregunta</label>
			    			<select class="form-control" v-model="pregunta_id">
			    			 	<option value="0">Seleccionar</option>
			    			 	<option  v-for="pre in arrayPreguntas" :key="pre.id" :value="pre.id" v-text="pre.pregunta"></option>
			    			</select>
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Opcion</label>
			    			 <input type="text" class="form-control" v-model="opcionPregunta">
			    		</div>
			    		<div class="mb-3">
			    			 <label for="pregunta" class="form-label">Criterio</label>
			    			 <select class="form-control" v-model="criterio">
			    			 	<option value="">Seleccionar</option>
			    			 	<option value="1">Respuesta Correcta</option>
			    			 	<option value="0">Respuesta Incorrecta</option>
			    			 </select>
			    		</div>
			    	</div>
			    	<div class="row">
			    		<div class="col-sm-12 col-md-12 col-12">
			    			<button class="btn btn-success " @click="storeOpciones()">Agregar</button>	
			    		</div>
			    	</div>
			    	<br>
			  </div>
			</div>
    	</div>
    </div>
    <br>
   	<div class="row">
    	<div class="col-sm-12 col-12">
    		<div class="card">
			  <div class="card-body">
			    	<div class="row">
			    		<h5>Listado de preguntas</h5>
			    	</div>
			    	<div class="row">
			    		<div class="col-sm-8 col-md-8 col-xs-12 col-lg-8">
			    			<div class="table-responsive">
					    		<table class="table table-striped table-hover">
					    			<thead>
					    				<tr>
					    					<th>Formulario</th>
					    					<th>Numero de Formulario</th>
					    					<th>Fecha de Publicación</th>
					    					<th>Fecha de Terminacion</th>
					    					<th>Estado</th>
					    					<th colspan="2">Opciones</th>
					    				</tr>
					    			</thead>
					    			<tbody>
					    				<tr v-for="dato in arrayDatos" :key="dato.id">
					    					<td v-text="dato.descripcion"></td>
					    					<td v-text="dato.formtrivia"></td>
					    					<td v-text="dato.fecha_star"></td>
					    					<td v-text="dato.fecha_end"></td>
					    					<td>
					    						<div v-if="dato.estado">
					    							<button class="btn btn-success">
					    								<i class="fas fa-check"></i>
					    							</button>
					    						</div>
					    						<div v-else>
					    							<button class="btn btn-danger">
						    							<i class="fas fa-times"></i>
						    						</button>
					    						</div>				    						
					    					</td>
					    					<td colspan="2">
					    						<button class="btn btn-warning">
					    							<i class="far fa-edit"></i>
					    						</button>
					    						<button class="btn btn-danger">
					    							<i class="far fa-trash-alt"></i>
					    						</button>
					    						<button class="btn btn-primary" @click="mostrarDetalleOpciones(dato.id)">
					    							<i class="fas fa-plus"></i>
					    						</button>
					    					</td>
					    					<tr v-for="(pre,key) in arrayPreguntasForm" :key="key">
					    						<td></td>
					    						<td>Pregunta: {{ pre.pregunta }}</td>
					    						<td>Calificación: {{ pre.calificacion }}</td>
					    						<td>
					    							<button class="btn btn-warning">
						    							<i class="far fa-edit"></i>
						    						</button>
						    						<button class="btn btn-danger">
						    							<i class="far fa-trash-alt"></i>
						    						</button>
						    						<button class="btn btn-primary" @click="ocultarDetalleOpciones(pre.id)">
						    							<i class="fas fa-plus"></i> Opciones Pregunta
						    						</button>
					    						</td>
					    						<td></td>
					    						<td></td>
					    					</tr>
					    				</tr>
					    			</tbody>
					    		</table>
			    			</div>
			    		</div>

			    			<div class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
			    				<div class="table-responsive">
			    					<table class="table table-striped table-hover"> 
			    						<thead>
			    							<tr>
			    								<th colspan="3"> Opciones de respuesta</th>
			    							</tr>
			    						</thead>
			    						<tbody>
			    							<tr v-if="flagDescripcionOpciones" v-for="opciones in arrayPreguntasOpciones">
				    							
				    							<td>Opción: {{ opciones.nombrePregunta }}</td>
				    							
				    							<td>
				    								<div v-if="opciones.criterio">
						    							<button class="btn btn-success">
						    								<i class="fas fa-check"></i> Respuesta Correcta
						    							</button>
						    						</div>
						    						<div v-else>
						    							<button class="btn btn-danger">
							    							<i class="fas fa-times"></i> Respuesta Incorrecta
							    						</button>
						    						</div>
				    							</td>
				    							<td>
				    								<button class="btn btn-warning">
						    							<i class="far fa-edit"></i>
						    						</button>
						    						<button class="btn btn-danger">
						    							<i class="far fa-trash-alt"></i>
						    						</button>
					    						</td>
				    						</tr>
			    						</tbody>
			    					</table>
			    				</div>
			    			</div>

			    		
			    	</div>
			  </div>
			</div>
    	</div>
    	</div>
    </div>
</template>

<script>
	export default {

        data () {
            return {
            	flagDescripcionOpciones: 	false,
            	descripcion: 				'',
            	numero_formulario: 			0,
            	fecha_publicacion: 			'',
            	fecha_terminacion: 			'',
            	arrayFormularios: 			[],
            	id_formulario: 				0,
            	pregunta: 					'',
            	imagen :  					null,
            	calificacion: 				'',
            	arrayPreguntas: 			[],
            	pregunta_id: 				0,
            	opcionPregunta: 			'',
            	criterio: 					'',
            	arrayDatos: 				[],
            	arrayPreguntasForm: 		[],
            	arrayPreguntasOpciones: 	[],
            	

            }
        },

        computed:{

        },

        methods:{
        	mostrarDetalleOpciones: function (id) {
        		this.getPreguntasForm(id);
        	},

        	ocultarDetalleOpciones: function (id) {
        		this.getPreguntasOpciones(id);
        		
        	},


        	getPreguntasForm: async function (id){
        		const url = 'getPreguntasForm?id_formulario=' + id;

                try{
                    const response          		= await axios.get(url)
                    const respuesta         		= response.data;
                    this.arrayPreguntasForm   		= respuesta.datos;
                    
                    // this.flagDescripcionOpciones 	= true
                } catch (error){
                    if(error.response.status === 500){
                        console.log(error.reponse)
                    }
                    if(error.response.status === 404){
                        console.log(error.reponse)
                    }
                }
        	},

        	getPreguntasOpciones: async function (id){
        		const url = 'getPreguntasOpciones?id_pregunta=' + id;

                try{
                    const response          		= await axios.get(url)
                    const respuesta         		= response.data;
                    this.arrayPreguntasOpciones   	= respuesta.datos;

                    this.flagDescripcionOpciones = true;
                } catch (error){
                    if(error.response.status === 500){
                        console.log(error.reponse)
                    }
                    if(error.response.status === 404){
                        console.log(error.reponse)
                    }
                }
        	},

        	// crear Formulario
        	storeFormulario: async function() {
        		try {
                    const request = {
                        'descripcion': 			this.descripcion,
						'numero_formulario': 	this.numero_formulario,		
						'fecha_publicacion': 	this.fecha_publicacion,		
						'fecha_terminacion': 	this.fecha_terminacion,		
                    }

                    const response = await axios.post('store', request)
                    console.log(response.status)
                    if(response.status === 200){
                    	this.limpiarFormulario();
                    	this.getFormulario();
                    	this.getDatos();
                        Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: 'Se guardó correctamente!',
                          showConfirmButton: false,
                          timer: 1500
                        })
                    }
                } catch(error) {
                 	console.log(error.response);
                    /** si el status es 500, error en el servidor */
                    if(error.response.status === 500){
                        console.log(error)
                    }
                    /** si el status es 422, alguno de los datos tuvo un error de validacion */
                    if(error.response.status === 422){                    
                        this.validate = error.response.data.errors;
                        this.flag = 1;
                    }
                }
        	},

        	limpiarFormulario: function() {
        		this.descripcion 		= '';
				this.numero_formulario 	= 0;
				this.fecha_publicacion 	= '';
				this.fecha_terminacion 	= '';
        	},

        	getFormulario: async function () {
             const url = 'getFormularios';
                try{
                    const response          = await axios.get(url)
                    const respuesta         = response.data;
                    this.arrayFormularios   = respuesta.getFormularios;
                } catch (error){
                    if(error.response.status === 500){
                        console.log(error.reponse)
                    }
                    if(error.response.status === 404){
                        console.log(error.reponse)
                    }
                }
          	},


          // crear pregunta
          	storePregurnta: async function() {
	          	try {

	                const request = {
	                    'id_formulario':  		this.id_formulario,	
	                    'pregunta': 	  		this.pregunta,
	                    'calificacion': 		this.calificacion,

	                }

	                const response = await axios.post('storePregunta', request)
	                console.log(response.status)
	                if(response.status === 200){
	                	this.limpiarPregunta();
	                	this.getFormulario();
	                	this.getDatos();
	                    Swal.fire({
	                      position: 'center',
	                      icon: 'success',
	                      title: 'Se guardó correctamente!',
	                      showConfirmButton: false,
	                      timer: 1500
	                    })
	                }
	            } catch(error) {
	             	console.log(error.response);
	                /** si el status es 500, error en el servidor */
	                if(error.response.status === 500){
	                    console.log(error)
	                }
	                /** si el status es 422, alguno de los datos tuvo un error de validacion */
	                if(error.response.status === 422){                    
	                    this.validate = error.response.data.errors;
	                    this.flag = 1;
	                }
	            }
	      	},

			limpiarPregunta: function (){
				this.id_formulario  = 0;
				this.pregunta 		= '';
				this.calificacion 	= '';
			},

			getPregunta: async function () {
             const url = 'getPreguntas';
                try{
                    const response          = await axios.get(url)
                    const respuesta         = response.data;
                    this.arrayPreguntas   	= respuesta.getPregntas;
                } catch (error){
                    if(error.response.status === 500){
                        console.log(error.reponse)
                    }
                    if(error.response.status === 404){
                        console.log(error.reponse)
                    }
                }
          	},

          	// opciones pregunta
          	storeOpciones: async function() {
	          	try {

                
	                const request = {
	                    'pregunta_id':  		this.pregunta_id,	
	                    'opcionPregunta': 		this.opcionPregunta,
	                    'criterio': 			this.criterio,

	                }

	                const response = await axios.post('storeOpciones', request)
	                console.log(response.status)
	                if(response.status === 200){
	                	this.limpiarPregunta();
	                	this.getFormulario();
	                	this.getDatos();
	                    Swal.fire({
	                      position: 'center',
	                      icon: 'success',
	                      title: 'Se guardó correctamente!',
	                      showConfirmButton: false,
	                      timer: 1500
	                    })
	                }
	            } catch(error) {
	             	console.log(error.response);
	                /** si el status es 500, error en el servidor */
	                if(error.response.status === 500){
	                    console.log(error)
	                }
	                /** si el status es 422, alguno de los datos tuvo un error de validacion */
	                if(error.response.status === 422){                    
	                    this.validate = error.response.data.errors;
	                    this.flag = 1;
	                }
	            }
	      	},


	      	getDatos: async function(){
				const url = 'getDatos';
                try{

                    const response          = await axios.get(url)
                    const respuesta         = response.data;
                    this.arrayDatos     	= respuesta.formulario.data;

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
            this.getPregunta();
            this.getDatos();
        }

    };
</script>
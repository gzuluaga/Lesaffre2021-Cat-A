<template>
    <div>
        <div class="pregresp">
            <div class="pregunta">1. ¿Crees que HTML es una buena tecnología?<br/></div>
            <div class="respuestas">
                <input type="radio" name="preg1" value="1" />1<br />
                <input type="radio" name="preg1" value="2" />2<br />
                <input type="radio" name="preg1" value="3" />3<br />
                <input type="radio" name="preg1" value="3" />4<br />
                <input type="radio" name="preg1" value="3" />5<br />
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data () {
            return {
                
            }
    },

    methods:{

        },

    mounted() {
        console.log('Component mounted.')
    }
  };
</script>


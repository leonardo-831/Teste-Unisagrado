<template>

<div class="container" style="border: solid 1px gray">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Horas</th>
                <th scope="col">Professor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Inscrever-se</th>
            </tr>
        </thead>
        <tbody class=".table-striped">
            <tr v-for="curso in this.cursos" :key="curso.id">
                <th>{{ curso.nome }}</th>
                <td>{{ curso.horas }}</td>
                <td>{{ curso.professor }}</td>
                <td>
                        {{curso.descricao}}
                </td>
                <td>
                    <button class="btn btn-primary" style="width: 6vw" @click="submit(curso.id)">+</button>
                   <!--  :disabled="alreadyInCourse"  -->
                </td>
                
            </tr>
        </tbody>
    </table>
</div>


</template>
<script>
import axios from "axios";

    export default {
        props: ['cursos', 'user'],
        data(){
            return{
            }
        },
        computed: {
            /* alreadyInCourse(){
                let inCourse = false;

                this.cursos.forEach(curso => {
                    curso.aluno_curso.forEach(alCurso => {
                        if(alCurso.user.email === this.user.email){
                            inCourse = true;
                        }
                    })
                })

                console.log(inCourse)

                return inCourse;
            } */
        },
        methods:{
            async submit(id){
                let response = await axios.post('/inscrever-se', {
                    curso_id: id
                });
                location.reload();
            },

            async oi(id_curso){
                let response = await axios.post('/outro', {
                    id: id_curso
                });
                location.reload();
            },
        },
    }
</script>
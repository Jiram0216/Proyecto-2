<template>
    <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar ×" v-on:click="eliminarOrden">
</template>
<script>
    export default {
        props: ['ordenId'],
        methods: {
            eliminarOrden(){
                this.$swal({
                    title: '¿Deseas eliminar esta Orden de trabajo?',
                    text: "Una vez eliminada, no se puede recuperar",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const params = {
                            id: this.ordenId
                        }
                        // Enviar la petición al servidor
                        axios.post(`/ordentrabajos/${this.ordenId}`,{params,_method:'delete'}).then(response => {
                            console.log(response);
                            this.$swal({
                                title: 'Orden de Trabajo eliminada',
                                text: 'Se elimino la Orden de trabajo',
                                success: 'success'
                            })
                            //Eliminar receta del DOM
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                        }).catch(error => {
                            console.log(error);
                        });
                    }
                });
            }
        },
    }
</script>
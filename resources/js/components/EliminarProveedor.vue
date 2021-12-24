<template>
  <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar"
    v-on:click="eliminarProveedor"
  />
</template>
<script>
export default {
        props: ['ordenId'],
        methods: {
            eliminarProveedor(){
                this.$swal({
                    title: '¿Deseas eliminar este Proveedor?',
                    text: "Una vez eliminado, no se puede recuperar",
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
                        axios.post(`/proveedores/${this.ordenId}`,{params,_method:'delete'}).then(response => {
                            console.log(response);
                            this.$swal({
                                title: 'Proveedor eliminada',
                                text: 'Se elimino el Proveedor',
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

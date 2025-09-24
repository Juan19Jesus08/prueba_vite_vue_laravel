<template>
  <Welcome>
 <div class="row gx-4">
              <div class="col-xl col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h1 class="mb-3">Clientes</h1>
                    <h2 class="mb-2 d-flex align-items-center justify-content-between">
                      <i class="bi bi-person-square fs-3 lh-1 bg-primary p-3 rounded-circle text-white"></i>
                       <p class="m-0 small">
                      Clientes registrados
                      <span class="float-end badge bg-primary-subtle text-primary">14</span>
                    </p>

                    </h2>

                  </div>
                </div>
              </div>
            </div>

            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <!-- Card starts -->
                <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">Listado de clientes  <!--<a class="btn btn-success btn" href="#" title="VAgregar usuario"><i class="bi bi-plus-circle-fill fs-5"></i>
                                </a>-->
<button type="button" class="btn btn-success add-btn"  data-bs-toggle="modal" data-bs-target="#modalCreate"><i class="bi bi-plus-circle-fill fs-5"></i></button>

                                </h2>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <div class="row gx-4">
                      <div class="col-sm-12">

                        <!-- Table starts -->
                        <div class="table-bg">
                          <div class="table-responsive">
                            <table id="customButtons" class="table truncate">
                              <thead>
                                <tr>
                                  <th>Nombre completo</th>
                                  <th>Telefono</th>
                                  <th>Correo</th>
                                  <th>Dirección</th>
                                  <th>Fecha de registro</th>
                                  <th>Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr v-for="cliente in clientes" :key="cliente.id">
                                   <td>{{ cliente.nombre_completo }}</td>
                                    <td>{{ cliente.telefono }}</td>
                                    <td>{{ cliente.correo }}</td>
                                    <td>{{ cliente.direccion }}</td>
                                    <td>{{ cliente.fecha_registro }}</td>
                                  <td>
                                <!--<a class="btn btn-primary btn-sm" href="#" title="Ver informacion del cliente"><i class="bi bi-eye"></i>
                                </a>-->
                                 <!--<a class="btn btn-warning btn-sm" href="#" title="Editar cliente"><i class="bi bi-pencil"></i>
                                </a>-->
                                 <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#modalEdit"
                          @click="selectedCliente = cliente"><i class="bi bi-pencil"></i></button>
                                 <!--<button class="btn btn-danger btn-sm" href="#" title="Borrar cliente"><i class="bi bi-trash"></i>
                                </button>-->
                                <button class="btn btn-sm btn-danger remove-item-btn"  @click="eliminar(cliente)"><i class="bi bi-trash"></i></button>
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- Table ends -->

                      </div>
                    </div>
                    <!-- Row ends -->

                  </div>
                </div>
                <!-- Card ends -->

              </div>
            </div>
      <ModalCliente :modal="'modalCreate'" :titulo="'Añadir un cliente'" :op="'1'"></ModalCliente>
      <ModalCliente :modal="'modalEdit'" :titulo="'Editar el cliente'" :op="'2'" :cliente="selectedCliente"></ModalCliente>
  </Welcome>
</template>

<script setup>
import Welcome from '@/Pages/Principal/Welcome.vue';
import ModalCliente from '@/Layouts/ModalCliente.vue';
import Swal from 'sweetalert2';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
})

const selectedCliente = ref({});

defineProps({
  clientes: Array
});


const eliminar=(cliente)=>{

    const swalWithBootstrapButtons = Swal.mixin({
        buttonsStyling: true
    });
    swalWithBootstrapButtons.fire({
        title: 'Seguro que desea eliminar el cliente',
        text: 'Nota: Se perderá el cliente',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
           form.delete(route('cliente.destroy', { cliente: cliente.id }));

        }
    });
}
</script>

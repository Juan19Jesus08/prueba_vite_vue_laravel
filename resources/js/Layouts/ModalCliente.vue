<template>
    <div class="modal fade" :id="modal" tabindex="-1" aria-hidden="true"  ref="modalRef">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">{{ titulo }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="(op === '1' ? guardar() : actualizar())" class="row g-3">
                        <input type="hidden" name="id" v-model="form.id">

                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nombre_completo completo</label>
                            <input class="form-control" type="text" name="nombre_completo"
                                v-model="form.nombre_completo" placeholder="Nombre_completo" required>


                             <div v-if="form.errors.nombre_completo" class="text-sm text-danger">
                            {{ form.errors.nombre_completo }}

                        </div>

                        </div>

                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Correo</label>
                            <input class="form-control" type="email"
                                name="correo" v-model="form.correo" placeholder="Correo"
                                >

                            <div v-if="form.errors.correo" class="text-sm text-danger">
                            {{ form.errors.correo }}

                             </div>
                        </div>


                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Dirección</label>
                            <input class="form-control" type="text" name="direccion"
                                v-model="form.direccion" placeholder="Direccion" >


                             <div v-if="form.errors.direccion" class="text-sm text-danger">
                            {{ form.errors.direccion }}
                        </div>


                        </div>


                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Teléfono</label>
                            <input class="form-control" type="text" name="tel" v-model="form.telefono"
                                placeholder="Telefono" >

                            <div v-if="form.errors.telefono" class="text-sm text-danger">
                            {{ form.errors.telefono }}
                        </div>
                        </div>
                        <div class="modal-footer">
                 <button class="btn btn-success"  :disabled="form.processing">Guardar</button>
                    <button type="button" class="btn btn-secondary" :id="'cerrar' + op"
                        data-bs-dismiss="modal">Cerrar</button>

                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script  setup>

import { useForm } from '@inertiajs/vue3';
import { defineProps, watch } from 'vue';

const props = defineProps({
  cliente: { type: Object, default: () => ({}) },
  modal: String,
  titulo: String,
  op: String,
});

const form = useForm({
  id: '',
  correo: '',
  nombre_completo: '',
  direccion: '',
  telefono: '',
});

watch(
  () => props.cliente,
  (newCliente) => {
    form.id = newCliente.id || '';
    form.correo = newCliente.correo || '';
    form.nombre_completo = newCliente.nombre_completo || '';
    form.direccion = newCliente.direccion || '';
    form.telefono = newCliente.telefono || '';
  },
  { immediate: true }
);


const guardar = () => {
form.post(route('cliente.store'), {
  onSuccess: () => cerrar(),
  onError: (errors) => console.error(errors),
});
};

const actualizar = () => {
form.put(route('cliente.update', form.id), {
  onSuccess: () => cerrar(),
  onError: (errors) => console.error(errors),
});
};

const cerrar = () => {
  form.reset();
  const btnCerrar = document.querySelector('#cerrar' + props.op);
  if (btnCerrar) btnCerrar.click();
};

</script>

<style scoped></style>

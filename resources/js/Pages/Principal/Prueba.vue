<template>
    <!-- Auth wrapper starts -->
    <div class="auth-wrapper">
      <!-- Form starts -->
      <form action="/inventario">

        <!-- Authbox starts -->
        <div class="auth-box">

          <!-- Logo starts -->
          <a href="/" class="auth-logo mb-4">
            <img src="/images/logo-dark.svg" alt="Bootstrap Gallery" />
          </a>
          <!-- Logo ends -->

          <h4 class="mb-4">Iniciar sesión</h4>

          <div class="mb-2">
            <label class="form-label" for="username">Correo <span class="text-danger">*</span></label>
            <input type="email" id="username" class="form-control" placeholder="Email">
          </div>

          <div class="mb-2">
            <label class="form-label" for="password">Contraseña <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="password" id="password" class="form-control" placeholder="Enter password">
              <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-eye"></i>
              </button>
            </div>
          </div>

          <div class="d-flex justify-content-between mb-4">

            <a href="forgot-password.html" class="text-decoration-underline small">Olvidar contraseña?</a>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
          </div>

        </div>
        <!-- Authbox ends -->

      </form>
      <!-- Form ends -->

    </div>
</template>

<script setup>

</script>

<style scoped>


</style>

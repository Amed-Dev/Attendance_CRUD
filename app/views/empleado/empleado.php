<div class="container p-4 my-2">
  <h1 class="text-center my-3"> <i class="fa-solid fa-users-between-lines"></i> Registro de Empleados</h1>

  <!-- Button trigger modal guardar-->
  <div class="d-flex justify-content-end my-5">
    <button type="button" class="btn btn-primary col-auto" data-bs-toggle="modal"
      data-bs-target="#modalRegisterEmploye">
      <i class="fa-solid fa-circle-plus"></i>
      Nuevo empleado
    </button>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
      <path
        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
      <path
        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>
  <div
    class="alert alert-success d-flex align-items-center justify-content-center fixed-top d-none icon-link fs-5 fw-bold"
    id="success" role="alert">
    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:">
      <use xlink:href="#check-circle-fill" />
    </svg>
    <div id="msg_success">
    </div>
  </div>
  <div
    class="alert alert-danger d-flex align-items-center justify-content-center fixed-top d-none icon-link fs-5 fw-bold"
    id="error" role="alert">
    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
      <use xlink:href="#exclamation-triangle-fill" />
    </svg>
    <div id="msg_error">
    </div>
  </div>
  <!-- tabla para mostrar los datos -->
  <div class="table-responsive">
    <table id="tabla" class="table table table-sm table-striped table-hover">
      <thead class="text-center">
        <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Departamento</th>
          <th>Cargo</th>
          <th>Fecha Registro</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="empleadosList" class="text-center">

      </tbody>
    </table>
  </div>

</div>
<?php
include "./empleado/registerEmpleado.php";
include "./empleado/actualizaEmpleado.php";
include "./empleado/eliminarEmpleado.php";
?>
<script type="module" src="../../assets/js/main_empleado.js"></script>
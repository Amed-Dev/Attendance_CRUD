<!-- Modal -->
<div class="modal fade" id="modalRegisterEmploye" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar trabajador</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data" id="registerEmployeForm">
          <div class="mb-3">
            <label for="dni" class="form-label">DNI: </label>
            <input type="number" class="form-control" id="dni" name="dni" placeholder="80394852">
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del trabajador">
          </div>
          <div class="mb-3">
            <label for="departamento" class="form-label">Departamento: </label>
            <select class="form-select departamento" aria-label="Departamento" name="departamento">
              <!-- contenido añadido desde js -->
            </select>
          </div>
          <div class="mb-3">
            <label for="cargo" class="form-label">Cargo: </label>
            <select class="form-select cargo" aria-label="Cargo" name="cargo">
              <!-- contenido añadido desde js -->
              <option selected>Seleccionar...</option>
            </select>
          </div>
          <div class="d-flex justify-content-end gap-2 ">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="btn-submitRE"> <i class="fa-solid fa-save" ></i>
              Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
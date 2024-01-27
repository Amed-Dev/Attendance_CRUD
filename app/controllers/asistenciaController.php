<?php

require_once "../models/asistencia.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $accion = $_POST['method'];
  $model = new Asistencia();

  switch ($accion) {
    case 'getStatusAttendance':
      $asistencia = $model->getSatusAttendace();
      echo json_encode($asistencia);
      break;
    case 'registerAttendance':
      $asistencia = $model->registerAttendance($_POST);
      echo json_encode($asistencia);
      break;
    // case 'registerEmpleado':
    //   $empleados = $model->registerEmpleado($_POST);
    //   echo json_encode($empleados);
    //   break;
    // case 'updateEmpleado':
    //   $empleados = $model->updateEmpleado($_POST);
    //   echo json_encode($empleados);
    //   break;
    // case 'deleteEmpleado':
    //   $empleados = $model->deleteEmpleado($_POST);
    //   echo json_encode($empleados);
    //   break;
    case 'getEmpleadoByDNI':
      $asistencia = $model->getSuggestionForDNI($_POST);
      echo json_encode($asistencia);
      break;
  }
}
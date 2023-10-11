<?php
// Verifica si se ha enviado una tarea desde el formulario
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    
    // Abre el archivo donde se almacenarán las tareas (tasks.txt)
    $file = fopen('tasks.txt', 'a');
    
    // Escribe la tarea en el archivo
    fwrite($file, $task . "\n");
    
    // Cierra el archivo
    fclose($file);
}

// Lee las tareas desde el archivo
$tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);

// Verifica si se ha enviado una solicitud para eliminar una tarea
if (isset($_GET['delete'])) {
    $deleteTask = $_GET['delete'];
    
    // Elimina la tarea del array de tareas
    unset($tasks[$deleteTask]);
    
    // Vuelve a escribir las tareas en el archivo
    file_put_contents('tasks.txt', implode("\n", $tasks));
}

// Redirige de nuevo a la página principal
header('Location: index.php');





?>

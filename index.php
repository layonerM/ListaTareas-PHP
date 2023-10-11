<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Tareas</h1>
    <div class="task-list">
        <ul>
            <!-- Aquí mostraremos las tareas -->
        </ul>
    </div>
    <form action="tasks.php" method="POST">
        <input type="text" name="task" placeholder="Nueva tarea" required>
        <button type="submit">Agregar tarea</button>
    </form>
</body>
</html>

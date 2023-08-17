<h1>Lista de tarefas</h1>

<a href="/tarefas/criar_tarefa">Criar Tarefa</a>

<ul>
    <?php foreach ($tarefas as $tarefa): ?>
        <li><?= $tarefa['id']; ?> - <?= $tarefa['titulo']; ?> | Descricao: <?= $tarefa['descricao']; ?></li>
    <?php endforeach; ?>
</ul>
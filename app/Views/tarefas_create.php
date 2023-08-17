<h1>Adicionar Tarefa</h1> 

<form action="<?= base_url('tarefas/store') ?>" method="post"> 

    <label for="titulo">Título:</label> 

    <input type="text" name="titulo"> 

    <label for="descricao">Descrição:</label> 

    <input type="text" name="descricao"> 

    <input type="submit" value="Adicionar"> 

</form> 
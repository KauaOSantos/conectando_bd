<div class="card-funcionario">
    <header>
        <h2>Nome: <?= $funcionario["nome"]; ?></h2>
        <p>Cargo: <?= $funcionario["cargo"]; ?></p>
        <p>Idade: <?= $funcionario["idade"]; ?></p>
    </header>
    <footer>
        <a href="tel:<?= $funcionario["telefone"]; ?>">telefone: <?= $funcionario["telefone"];?></a>
        <span>ID: <?= $funcionario["id_funcionario"]; ?></span>
    </footer>
</div>
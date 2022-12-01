<?php $this->layout('master') ?>

<h1>Contact</h1>

<form action="/contact" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="E-mail">
    <button type="submit">Enviar</button>
</form>
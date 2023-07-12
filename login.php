<?php require "./mount-Components.php"; ?>

<?= getTemplate('header', ['titulo_pagina' => 'Página de Login']) ?>

    <section id="login" class="container">
        <div class="box-login">
            <h1 class="text-light text-center mb-4 display-3">Login</h1>
            <input class="form-control mb-2" type="email" name="email" placeholder="E-mail">
            <input class="form-control mb-2" type="password" name="senha" placeholder="Password"> 
            <button type="submit" class="btn btn-secondary btn-login">Enter</button>
        </div>     
    </section>

<?= getTemplate('footer')?>
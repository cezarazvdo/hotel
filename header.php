<?php
    $titulo = 'Divergente';
    $logo = get_template_directory_uri().'/assets/logo_divergente.png';
?>

<style>
    .header {
        background-color: black;
        display: flex;
        flex-direction: row;
        height: 80px;
        width: 100%;
        justify-content: space-between;
    }
    .title {
        color: white;
    }
    .list {
        display: flex;
        flex-direction: row;
        color: white;
        list-style: none;
        gap: 20px;
        padding: 0;
        font-family: "Roboto", sans-serif;
        margin-right: 100px;
    }

    .containerList {
        align-self: center;
    }
</style>

<nav class="header">
    <div class="logo">
        <img src="<?php echo $logo ?>" alt="logo" />
    </div>
    <div class="containerList">
        <ul class="list">
            <li><h1>Bem Vindo</h1></li>
            <li><h1>Quartos</h1></li>
            <li><h1>Restaurante</h1></li>
            <li><h1>Fale Conosco</h1></li>
        </ul>
    </div> 
</nav>

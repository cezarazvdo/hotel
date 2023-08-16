<?php
    $logo = get_template_directory_uri().'/assets/images/logo_divergente.png';
    $presentation_title = "SUÍTE";
?>

<header>
    <section class="menu-header">
        <div>
            <img src="<?php echo $logo ?>" alt="logo" height="160" width="200"/>
        </div>
        <div class="containerList">
            <ul class="list">
                <li><a>Bem Vindo</a></li>
                <li><a>Quartos</a></li>
                <li><a>Restaurante</a></li>
                <li><a>Fale Conosco</a></li>
            </ul>
        </div>
    </section>
    <section class="presentation">
        <div class="description">
            <h1><?php echo $presentation_title ?></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corporis, excepturi facere laborum totam adipisci, amet laboriosam repudiandae quos voluptate exercitationem, natus dolore beatae modi ducimus ipsam harum architecto aliquid!
            </p>
            <button>VER PREÇO</button>
        </div>
    </section>
</header>

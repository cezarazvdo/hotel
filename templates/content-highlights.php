<?php 
    $example_image_1 = get_template_directory_uri().'/assets/images/room_example_1.png';
    $example_image_2 = get_template_directory_uri().'/assets/images/room_example_2.png';
    
?>

<article class="container">
    <div class="images">
        <!-- TODO: verificar por que a primeira imagem parece 2 -->
    <figure>
        <img src=<?php echo $example_image_1 ?> alt="Quarto de exemplo 1">
    </figure>        
    <figure>
        <img class="image2" src=<?php echo $example_image_2 ?> alt="Quarto de exemplo 2">
    </figure>
    </div>
    <div>
        <?php 
        $presentation_title = 'test';
        get_template_part('templates/content', 'presentation');
        ?>
    </div>
</article>
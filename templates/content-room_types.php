<?php
    class Data_type{
        public $title;
        public $description;
        public $image;
        
        public function __construct($title, $description, $image) {
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
        }
    }

    $lorem_description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam qui nulla quos quidem excepturi nemo iste dignissimos fugiat optio quae! Aut dolore, esse distinctio sequi similique vero saepe facilis?";

    $data_types = [ new Data_type("Teste1", $lorem_description, get_template_directory_uri().'/assets/images/room_example_1.png'),
                    new Data_type("Teste2", $lorem_description, get_template_directory_uri().'/assets/images/room_example_1.png'),
                    new Data_type("Teste3", $lorem_description, get_template_directory_uri().'/assets/images/room_example_1.png')];
    
    function create_type_list($data_types) {
        return  
        "<li>
            <article class='room-description'>
                <h1>$data_types->title</h1>
                <p>$data_types->description</p>
            </article>
            <figure>
                <img src='$data_types->image' alt='ilustração'>
            </figure>
        </li>
        <hr>";
    }
?>

<ul class="room-list">
    <?php
        $list = array_map('create_type_list', $data_types);
        echo implode('', $list);
    ?>
</ul>
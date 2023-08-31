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


    $data_types = [new Data_type("teste", "teste", get_template_directory_uri().'/assets/images/room_example_1.png')];
    
    function create_type_list($data_types) {
        return  
        "</li>
            <article class='list_item'>
                " . get_template_part('templates/content', 'presentation') . "
                <figure>
                    <img src='". $data_types->image . "' alt='ilustração'>
                </figure>
            </article>
        <li>";
    }
?>

<ul>
    <?php
        $list = array_map('create_type_list', $data_types);
        //echo implode('', $list);
    ?> 
</ul>
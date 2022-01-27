<?php
    echo form_open('index.php/search/execute_search');

    echo form_input(array('name'=>'search'));

    echo form_submit('search_submit','Submit');


?>
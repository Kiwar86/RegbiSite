<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="border:px solid #cc0000;">
<?php

foreach($query->result() as $r){
    echo "<h1 align=''>".$r->title."</h1>";
    echo "<p>".$r->min_text."</p>";
    echo "<p align='right'>".$r->date."</p>";
    echo "<a href='".base_url()."index.php/main/full_news/".$r->id."'>Подробнее<br></a>";
    
}	
echo "<p align='center'>".$this->pagination->create_links()."</p>";
?>
</div>
</div>

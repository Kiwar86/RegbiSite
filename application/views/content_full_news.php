<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="border:px solid #cc0000;">
<?php
foreach($query->result() as $r){
    echo "<h1 align=''>".$r->title."</h1>";
    echo "<p>".$r->min_text."</p>";
    echo "<h4>".$r->full_text."</h4>";
    } 
foreach($query2->result() as $r){
    echo "<img  src='".base_url()."image/news/".$r->photo."'>";
    echo "<p></p>";
    echo "<p></p>";
   
} 
foreach($query->result() as $r){
    echo "<p align='right'>".$r->date."</p>";
  }
?>

</div>
</div>
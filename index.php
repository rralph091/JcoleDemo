
<style>

    .content{
        display: flex;
        justify-content: center;
    }
    .wrap{
        display: flex;
        flex-direction: column;
        border: 1px solid black;
        width: 30rem;
    }
    .border{
        border: 1px solid black;
        max-width: 40rem;
    }
</style>

<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://new-apptet.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("pet");
?>
 <div class="content">
 <h1>Basketball</h1>
 </div>
 <div class="content">

 <div class="wrap">
 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
     $experience = $data->getElementsByTagName("experience")->item(0)->nodeValue;
     $position = $data->getElementsByTagName("position")->item(0)->nodeValue;
     echo "<ul><h2>$name - $experience</h2>
              <ul>
                  <li>Position: $position</li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>

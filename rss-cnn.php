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
 $domOBJ->load("https://github.com/rralph091/JcoleDemo/blob/master/rss-cnn.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("player");
?>
 <div class="content">
 <h1>Player</h1>
 </div>
 <div class="content">

 <div class="wrap">
 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $Name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
     $Experience = $data->getElementsByTagName("Experience")->item(0)->nodeValue;
     $Position = $data->getElementsByTagName("Position")->item(0)->nodeValue;
     echo "<ul><h2>$Name - $Experience</h2>
              <ul>
                  <li>Position: $Position</li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>

<h1>Repeate loop</h1>

<!--<h3>Using For</h3>-->
<!--<ul>-->
<!--<!--    -->-->//<?php
////    for ($i=0; $i<10; $i++){
////        echo"<li>Lista ".$i."</li>";
////    }
////    ?><!--<!--  -->-->
<!--</ul>-->

<h3>using while</h3>
<ul>
    <?php  $i = 0;  while ($i < 10) { ?>

        <li>Lista<?php echo $i; ?></li>

        <?php $i++; } ?>
</ul>
<?php

$dados = array(
    "title" => "Scool of net",
    "link" => "https://www.schoolofnet.com/curso-symfony-3-com-doctrine/1272",
    "content" =>
        array(
            array(
                "title"=>"News 1",
                "Resume" => "mbsjdlvsbjvsçdnsdjbsdnbjsdbnsd bsdfnç",
                "text" => "basbjvnak shdfmfnsdj"
            ),
            array(
                "title"=>"News 2",
                "Resume" => "mbsjdlvsbjvsçdnsdjbsdnbjsdbnsd bsdfnç",
                "text" => "basbjvnak shdfmfnsdj"
            ),
            array(
                "title"=>"News 3",
                "Resume" => "mbsjdlvsbjvsçdnsdjbsdnbjsdbnsd bsdfnç",
                "text" => "basbjvnak shdfmfnsdj"
            ),
            array(
                "title"=>"News 4",
                "Resume" => "mbsjdlvsbjvsçdnsdjbsdnbjsdbnsd bsdfnç",
                "text" => "basbjvnak shdfmfnsdj"
            ),
        ),
);
?>


<h1>
    <a href="<?= $dados['link']?>"><?= $dados['title']?></a>
</h1>
<hr>

<?php foreach ($dados['content'] as $key => $value) :?>
<h3><?= $value['title']?>"</h3>
<strong><?= $value['Resume']?>"</strong>
<p><?= $value['text']?>"</p>
<hr>
<?php  endforeach; ?>
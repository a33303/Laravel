<?php

foreach ($ListNews as $key => $news)
{
    echo $news . "&nbsp; <a href='".route('news.show', ['id' => $key])."'>Перейти</a><br>";
}

?>
<hr>
<?php
echo "&nbsp; <a href='".route('news.create')."'>Создать</a><br>";

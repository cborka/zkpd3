Чистая пыха <br>
&lt;?php<br>
<?php

echo 'Это просто тестовый файл для тестирования чистого PHP<br>';

try {
    $date = new DateTime('2000-01-01');
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}

echo $date->format('Y-m-d');
?>
<br>
<a href="/"><h3>В начало</h3></a>
<br>

<script type="text/javascript">

//    function xxx() { return "Привет - из - JavaScripts"; }

//   ( function () { alert("Анонимная функция"); return "Привет - из - JavaScripts"; }() );

</script>

---
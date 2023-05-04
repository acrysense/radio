<?php
// Получить вариант кода для возврата клиенту
$variant = 1;
if(isset($_REQUEST["variant"])){
    $variant = $_REQUEST["variant"];
}
 
// Получить метод запроса
$method = $_SERVER['REQUEST_METHOD'];
 
if ($variant === 1) {
?>
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/n_uFzLPYDd8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<?php
} else {
?>
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Rkv7TH9xU0s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<?php
}
?>
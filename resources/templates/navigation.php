<?php
?>

<script>
    $( document ).ready(function() {
        $("#news-link").click(function(){
            callAjax("Router", "getAll", "post", "news");
        });
    });
</script>

<nav>
    <div id="main-navigation" class="navigation">
        <ul class="nav">
            <li> <span id="home-link">Начало</span> </li>
            <li> <span id="news-link">Новини</span> </li>
            <li> <span id="users-link">Потребители</span> </li>
            <li> <span id="articles-link">Статии</span> </li>           
            <li> <span id="contacts-link">Контакти</span></li>
        </ul>
    </div>
</nav>
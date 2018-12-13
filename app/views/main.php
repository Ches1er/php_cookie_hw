
<?php if ($result!=NULL && $result===$picked_num):?>
    <div class="result">Вы угадали, загаданное число <?=$result?>, сыграем еще раз?</div>
    <a href="/new_game">Да, сыграем</a>

<?php elseif ($picked_num<$result):?>
    <div class="result">Выберите число меньше, чем <?=$result?></div>
    <form action="/check" method="post">
        <dl>
            <dd>Введите число:</dd>
            <dt><input type="text" name="number"></dt>
            <dt><input type="submit" value="Угадать"></dt>
        </dl>
    </form>

<?php elseif ($result!=NULL && $picked_num>$result):?>
    <div class="result">Выберите число больше, чем <?=$result?></div>
    <form action="/check" method="post">
        <dl>
            <dd>Введите число:</dd>
            <dt><input type="text" name="number"></dt>
            <dt><input type="submit" value="Угадать"></dt>
        </dl>
    </form>

<?php else:?>

    <?php if($button):?>
    <div class="result">Для того, чтоб загадать число, нажмите на кнопку</div>
    <a href="/random">Загадать число от 1 до 100</a>
    <?php endif;?>

<form action="/check" method="post">
    <dl>
        <dd>Введите число:</dd>
        <dt><input type="text" name="number"></dt>
        <dt><input type="submit" value="Угадать"></dt>
    </dl>
</form>

<?php endif;?>






<? if ($result==1):?>
<div>Вы угадали, сыграем еще раз?</div>
<a href="/">Да, сыграем</a>
<? elseif ($result==2):?>
    <div>Выберите число меньше</div>
    <form action="/check" method="post">
        <input type="text" name="number">
        <input type="submit" value="Угадать">
    </form>
<? elseif ($result==3):?>
    <div>Выберите число больше</div>
    <form action="/check" method="post">
        <input type="text" name="number">
        <input type="submit" value="Угадать">
    </form>
<? else:?>
    <div><?=$result?></div>
    <form action="/check" method="post">
        <input type="text" name="number">
        <input type="submit" value="Угадать">
    </form>
<? endif;?>






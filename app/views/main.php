<? $form = "<form action=\"/check\" method=\"post\">
        <dl>
            <dd>Введите число:</dd>    
            <dt><input type=\"text\" name=\"number\"></dt>
            <dt><input type=\"submit\" value=\"Угадать\"></dt>
        </dl>
    </form>";

if ($result==1):?>
    <div class="result">Вы угадали, загаданное число <?=$_COOKIE["number"]?>, сыграем еще раз?</div>
    <a href="/">Да, сыграем</a>
<? elseif ($result==2):?>
    <div class="result">Выберите число меньше, чем <?=$_COOKIE["number"]?></div>
    <? echo $form;
elseif ($result==3):?>
    <div class="result">Выберите число больше, чем <?=$_COOKIE["number"]?></div>
    <?echo $form;
else:?>
    <div class="result"><?=$result?></div>
    <? echo $form;
endif;?>






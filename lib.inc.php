      <?php
        function drawmenu($menu, $vertical=true){
        if (!is_array($menu))
         return false;
        $style=" ";
        if(!$vertical)
            $style=" style='display:inline; margin-right:15px'";
        echo "<ul>";
                foreach($menu as $item){
                    echo "<li$style>";
                    echo "<a href='{$item['href']}'>{$item['link']}</a>";
                    echo "</li>";
                }
        echo "</ul>";
        return true;
    }
    ?>

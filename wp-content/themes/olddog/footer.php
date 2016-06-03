       <footer class="footer">
            <div class="cent clearfix">
                <div class="copyr">
                    <p><span>© 2014 "Domribala.net.ru"<br> ДомРыбака — рыболовный интернет-магазин</span></p>
                    <p>При использовании материалов ссылка на сервер обязательна. Использование некоторых материалов может быть оговорено особо. Не является публичной офертой.</p>
                </div>

                <div class="menu_bot">
                    <?php
                        $args = array(
                        'theme_location'  => '',
                        'menu'            => 'footer1', 
                        'container'       => flase, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 0
                    );
                    wp_nav_menu($args ); 
                    ?>

                    <?php
                        $args = array(
                        'theme_location'  => '',
                        'menu'            => 'footer2', 
                        'container'       => flase, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 0
                    );
                    wp_nav_menu($args ); 
                    ?>
                </div>

                <div class="contacts">
                    <div class="phone"><span>8(495) 532-77-88</span> <a href="#">Info@domribaka.net</a></div>
                    <div class="work"><span>Работаем</span> ежедневно с 10:00 до 20:00</div>
                </div>
            </div>
        </footer>

    <div id="popup" class="mfp-hide">
        <h3>Заказать обратный звонок</h3>
        <form action="#">
            <div class="line"><input type="text" class="inp" value="" placeholder="Ваше имя"></div>
            <div class="line"><input type="text" class="inp" value="" placeholder="Контактный телефон"></div>
            <div class="button"><button class="btn large">Отправить</button></div>
        </form>
    </div>
    <div class="sh"></div>        
</body>
</html>
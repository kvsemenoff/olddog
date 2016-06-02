    
                <div class="left_column">
                    <div class="catalog box-shadow">
                        <h3>Каталог товаров</h3>
                        <ul id="menu"> 
                            <li><a href="#"><span>Удилища</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Катушки</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Приманки</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Леска</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Аксессуары</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Электроника</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Одежда, обувь</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Оснастка</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Туризм</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Лодки, моторы</span></a>
                                <ul>
                                    <li><a href="#">воблеры</a></li>
                                    <li><a href="#">вращающиеся блесна</a></li>
                                    <li><a href="#">колеблющиеся блесна</a></li>
                                    <li><a href="#">карповые</a></li>
                                    <li><a href="#">зимние блесны</a></li>
                                    <li><a href="#">наживки</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="subscription box-shadow">
                        <form action="#">
                            <h5>Актуальная информация о скидках, акциях, новинках <span>Подпишитесь!</span></h5>
                            <input type="text" class="inp_sub" value="" placeholder="Ваш e-mail">
                            <button class="btn green">Подписаться</button>
                        </form>
                    </div>
                    
                    <div class="widget"><img src="<?php echo get_template_directory_uri(); ?>/images/vk.jpg" alt=""></div>
                    
                    <div class="news">
                        <h3><a href="#">новости</a></h3>
                        <ul>
                            <?php $wp_query = new WP_Query(array(
                               'cat' => '7'
                                ));
                             
                                while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>
                            <li>
                                <span><?php the_time('d.m.Y'); ?></span>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                            
                        <?php endwhile;?>

                        </ul>
                    </div>
                    
                    <div class="block_text">
                        <h3>Рыболовный магазин DomRibaka.net - рыболовные снасти и товары для рыбалки.</h3>
                        <p>Огромный ассортимент рыболовных товаров, которые представлены в нашем интернет-магазине.</p>
                        <p>Недорогой и суперпопулярный спиннинг Shimano Catana или эксклюзивный, сверхлегкий в своем классе <a href="#">Daiwa BRANZINO</a>... Или может спиннинг St.Croix Avid, который завоевал сердца любителей джиговой ловли?</p>
                    </div>
                    
                </div><!-- left_column -->
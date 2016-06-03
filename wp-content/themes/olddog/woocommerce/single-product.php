<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<section class="content">
    <div class="cent">

     				<?php get_sidebar(); ?>
     				<div class="content_frame clearfix">
                    <div class="w100">
                    <div class="search">
                            <form action="#">
                                <input type="text" class="inp_s" value="" placeholder="Поиск по сайту">
                                <button class="btn green">Найти</button>
                            </form>
                        </div>
                        
                        <div class="promotion">
                            <div><a href="#"><img src="html/images/slider3.jpg" alt=""></a></div> 
                        </div>
                        
                        <div class="info clearfix">
                            <ul>
                                <li><span><i class="icon ic1"></i>Бесплатная доставка</span></li>
                                <li><span><i class="icon ic2"></i>Официальные поставки</span></li>
                                <li><span><i class="icon ic3"></i>Как купить в магазине</span></li>
                                <li><span><i class="icon ic4"></i>Скидки всем покупателям</span></li>
                            </ul>
                        </div>
                        
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Каталог</a></li>
                                <li><a href="#">Катушки с передним фрикционом</a></li>
                            </ul>
                        </div>
                        
                        <h1>SHIMANO CATANA 1000FC</h1>
                        
                        <div class="product_detailed clearfix">
                            <div class="image"><img src="html/images/pic1.jpg" alt=""></div>
                            <div class="feature">
                                <p>Код товара: 36016</p>
                                <p>Max Drag: 2 кг.</p>
                                <p>Артикул: CAT1000FC</p>
                                <p>Вес: 215 гр.</p>
                                <p>Доп. шпуля: графитовая</p>
                                <p>Кол-во подшипников: 2+1 шт.</p>
                                <p>Корпус: XT-7</p>
                                <p>Лесоёмкость: 0,20-140</p>
                                <p>Оборот ручки: 64 см.</p>
                                <p>Передаточное число: 5,2:1</p>
                                <p>Размер: 1000</p>
                                <p>Тип механизма: планетарный</p>
                            </div>
                            <div class="info_prod">
                            	<form class="cart" method="post" enctype='multipart/form-data'>
   <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
 
   <?php if ( ! $product->is_sold_individually() )
     woocommerce_quantity_input( array(
      'min_value' => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
      'max_value' => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product )
     ) );
   ?>
 
   <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
 
   <button type="submit" class="single_add_to_cart_button button alt"><?php echo $product->single_add_to_cart_text(); ?></button>
 
  <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
 </form>
 
 
 
 
 
 <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

                                    <div class="price">2.670 <span class="rub">b</span></div>
                                    <div class="quantity">
                                            <i class="titl">Количество</i>
                                            <span class="minus"></span>
                                            <input type="text" class="inp_q" value="3">
                                            <span class="plus"></span>                                         
                                    </div>
                                    <div class="buy">
                                        <button class="btn add_cart"><span>В корзину</span></button>
                                        <p><a href="#">Купить в 1 клик</a></p>
                                    </div>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="description">
                                <h3>Описание:</h3>
                                <p>Поражающий красный цвет катушки Catana FC делает агрессивное предложение рыболовам, желающим выделится из толпы. Будучи частью серии Р4, Catana демонстрирует гладкое действие и предлагает исключительное соответствие качества цене. Оснащенная 2-мя защищенными шарикоподшипниками из нержавеющей стали и роликовым подшипником, системой намотки лески Varispeed и алюминевой шпулей AR-C, Catana является отличной всезонной катушкой для большинства рыболовных ситуаций.</p>
                                
                                <p>Серия Shimano NAVI XTB – эволюция хорошо зарекомендовавшей себя Shimano Navi XSA. Разработчики постарались максимально усовершенствовать все элементы, сохранив при этом «атмосферу» Navi XSA. Первое изменение, которое бросается в глаза – дизайн. Разработчики решили окрасить корпус в серебристый цвет, а в качестве материала для его изготовления был выбран материал ХТ7, который отличается легкостью и прочностью. Ротор имеет прекрасную балансировку, все детали имеют минимально возможные допуски, поэтому возникновение люфтов сводится «на нет». Подшипники (роликовый и шариковый) изготовлены из стали и покрыты специальным покрытием, которое позволяет полностью избавится от такой проблемы, как ржавление. Позаботились разработчики и о том, чтобы добиться большой дальности заброса. Увеличению этой характеристики способствует шпуля AR-C большой емкости, а также система лесоукладки Aerowrap II. Кстати, катушка снабжена специальной системой, которая автоматически защелкивает дужку лесеукладывателя. Мелочь, а все-таки очень удобно, особенно в карповой ловле. Фрикционный тормоз имеет очень точную настройку, обладает мягким действием, поэтому рыболов может чувствовать себя абсолютно уверенно в борьбе с крупной, бойкой рыбой. Серия Shimano NAVI XTB – эволюция хорошо зарекомендовавшей себя Shimano Navi XSA. Разработчики постарались максимально усовершенствовать все элементы, сохранив при этом «атмосферу» Navi XSA. Первое изменение, которое бросается в глаза – дизайн. Разработчики решили окрасить корпус в серебристый цвет, а в качестве материала для его изготовления был выбран материал ХТ7, который отличается легкостью и прочностью. Ротор имеет прекрасную балансировку, все детали имеют минимально возможные допуски, поэтому возникновение люфтов сводится «на нет».</p>
                            </div>
                            
                        </div>
                        
                        
                        <div class="products_related">
                            <h3>Похожие товары</h3>
                            <ul>
                                <li>
                                    <div class="image"><a href="#"><img src="html/images/cat11.jpg" alt=""></a></div>
                                    <div class="desc">
                                        <h4><a href="#">BLACK HOLE BX 1000</a></h4>
                                        <div class="code">Код товара: 4232</div>
                                        <div class="price">1.220 <span class="rub">b</span></div>
                                        <div class="buy">
                                            <button class="btn add_cart"><span>В корзину</span></button>
                                            <p><a href="#">Купить в 1 клик</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image"><a href="#"><img src="html/images/cat11.jpg" alt=""></a></div>
                                    <div class="desc">
                                        <h4><a href="#">BLACK HOLE BX 1000</a></h4>
                                        <div class="code">Код товара: 4232</div>
                                        <div class="price">1.220 <span class="rub">b</span></div>
                                        <div class="buy">
                                            <button class="btn add_cart"><span>В корзину</span></button>
                                            <p><a href="#">Купить в 1 клик</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image"><a href="#"><img src="html/images/cat11.jpg" alt=""></a></div>
                                    <div class="desc">
                                        <h4><a href="#">BLACK HOLE BX 1000</a></h4>
                                        <div class="code">Код товара: 4232</div>
                                        <div class="price">1.220 <span class="rub">b</span></div>
                                        <div class="buy">
                                            <button class="btn add_cart"><span>В корзину</span></button>
                                            <p><a href="#">Купить в 1 клик</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image"><a href="#"><img src="html/images/cat11.jpg" alt=""></a></div>
                                    <div class="desc">
                                        <h4><a href="#">BLACK HOLE BX 1000</a></h4>
                                        <div class="code">Код товара: 4232</div>
                                        <div class="price">1.220 <span class="rub">b</span></div>
                                        <div class="buy">
                                            <button class="btn add_cart"><span>В корзину</span></button>
                                            <p><a href="#">Купить в 1 клик</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

					
					</div></div>
	</div>
</section>				
<?php get_footer( 'shop' ); ?>


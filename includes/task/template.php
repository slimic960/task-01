<div class="site-outer">
    <div class="site-inner">
        <section class="container-fluid">
            <div class="row">
                <h1 class="text-center head-product">Каталог товаров</h1>
                <hr>
                <br>
                <ul class="accordion-group" id="accordion">  
                               
                    <?php
                    foreach (producer($arResult) as $val) {
                        echo '<li style="background-image: url(' . producerLogo($val) . ')">';
                        echo '<div class="accordion-overlay"></div>';   
                        echo '<h3> ' . $val ;
                        echo '<div class="btn-group group-style" role="group">';
                        echo '<button type="button" class="btn btn-secondary sort" data-sort="myorder:asc">&#8595;</button>';
                        echo '<button type="button" class="btn btn-secondary sort" data-sort="myorder:desc">&#8593;</button>';
                        echo '<div class="btn-group" role="group">';
                        echo '<button id="btn-group-drop-'.$val.'" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Цвет</button>';
                        echo '<div class="dropdown-menu dropdown-menu-custom" aria-labelledby="btn-group-drop-'.$val.'">';
                        echo '<a class="dropdown-item filter" data-filter="all">Всё</a>';
                        echo '<a class="dropdown-item filter" data-filter=".blue-product-container">Синий</a>';
                        echo '<a class="dropdown-item filter" data-filter=".green-product-container">Зелёный</a>';
                        echo '<a class="dropdown-item filter" data-filter=".red-product-container">Красный</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';        
                        echo "</label></h3>";
                        echo '<section class="hidden-xs">';
                        echo '<article>';
                        foreach (product($arResult, $val) as $key => $value) {                   
                            echo '<h4>'.$key.'</h4>';
                            echo '<div class="row end-class-product container">';
                            foreach ($value as $name){                             
                                echo '<div class="mix '.productColor($name['COLOR']).'-container col-md-3 col-sm-6 col-xs-12" data-myorder="'.$name['PRICE'].'">';
                                echo '<h4 class="text-center">'.$name['SIZE'].'</h4>';
                                echo '<div class="sm-box '.productColor($name['COLOR']).'">';
                                echo '<img class="jersey-icon" src="../img/img_59282.png" />';
                                echo '<div class="sm-box-overlay"></div>';
                                if($name['QUANTITY'] != 0){
                                    echo '<div class="sm-box-basket"><a href="#" class="button button-red">Выбрать</a></div>';
                                }else{
                                    echo '<div class="sm-box-basket"><img class="no-product" src="../img/no.png" /></div>';
                                }                               
                                echo '<div class="sm-box-content">Цена: $'.$name['PRICE'].'<br>Количество: '.$name['QUANTITY'].'</div>';      
                                echo '</div>';
                                echo '</div>';                            
                            }
                            echo '</div>';                          
                        }
                        echo '</article>';
                        echo ' </section> ';
                        echo '</li>';
                    }              
                    ?>                 
                </ul>
            </div>     
        </section>
    </div>
</div>
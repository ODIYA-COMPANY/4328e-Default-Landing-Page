<?php

/********************************* Ваш ІД ************************************************/
// Для того щоб статично прописати ID партнера, змініть строчку нижче з коментарем "//Your ID"
// Приклад:
// Для партнера з ID = 1 правильно буде вказати наступний рядок
// $aff_id = '1';

$aff_id = isset($_GET['a']) ? $_GET['a'] : $_COOKIE['aff_id'] ?? null; // Your ID;
/*****************************************************************************************/
$offer_id = '18';

$fpx = isset($_GET['fpx']) ? $_GET['fpx'] : $_COOKIE['fpx'] ?? null;
$gtm = isset($_GET['gtm']) ? $_GET['gtm'] : $_COOKIE['gtm'] ?? null;

$period_cookie = 2592000;
($aff_id) ? setcookie("aff_id", $aff_id, time() + $period_cookie) : 0;
($fpx) ? setcookie("fpx", $fpx, time() + $period_cookie) : 0;
($gtm) ? setcookie("gtm", $gtm, time() + $period_cookie) : 0;
?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <title>Стильна куртка</title>

    <meta name="description" content="" />
    <link rel="shortcut icon" href="index.php" />
    <link rel="icon" href="files/favicon.webp">

    <link rel="stylesheet" href="files/reset4a3c6.css" type="text/css">

    <link rel="stylesheet" href="files/styles8ca58.css" type="text/css">
    <?php if ($fpx) { ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', "<?= $fpx ?>");
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fpx ?>&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    <?php
    };
    ?>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', "<?= $gtm ?>");
        </script>
        <!-- End Google Tag Manager -->
    <?php
    };
    ?>
</head>

<body>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php
    };
    ?>
    <div class="tidfyffuhhckj">

        <!-- header 3 -->
        <header class="jccgtghitajaqlo fvezcgrloi">
            <h1 class="fvupljaxrfy">НОВИНКА 2023 РОКУ</h1>
            <div class="ixhiuuaerog">
                <p class="vqdgahoyzsyp">Стильна подовжена куртка</p>
                <div class="gaplatuqlryp"><b>40% знижка</b></div>
                <img src="files/offer1.webp" alt="">
            </div>

            <div class="gljxozvysgvivu">
                <div class="yhdwuzyftuqw hdlqvhiyedpz">
                    <div class="text">Звичайна ціна:</div>
                    <div class="dedzgkcppdoo">2580грн</div>
                </div>
                <div class="yhdwuzyftuqw afajaaaxxuy">
                    <div class="text">Ціна зі знижкою:</div>
                    <div class="dedzgkcppdoo">1549грн</div>
                </div>
            </div>

            <div class="rxqygdcygq vskdfpresodcz">
                <div class="oxvgayvtrrapvf">
                    <img src="files/benefit1.webp" alt="">
                    <p>МОДНИЙ ДИЗАЙН</p>
                </div>

                <div class="oxvgayvtrrapvf">
                    <img src="files/benefit2.webp" alt="">
                    <p>ВИСОКА ЯКІСТЬ</p>
                </div>
                <div class="oxvgayvtrrapvf">
                    <img src="files/benefit3.webp" alt="">
                    <p>ПРИЄМНА ТКАНИНА</p>
                </div>
            </div>

            <a href="#elxuqritaxkpi" class="evakhaixqjj">Замовити куртку</a>
        </header>

        <br>
        <div class="gzvpjusyey">
            <h2 class="kaupksiqwkkif"><span>ЯК КУРТКА</span>
                ВИГЛЯДАЄ НАЖИВО!</h2>
        </div>
        <section>
            <ul class="ijhzjapohwp1">
                <video controls="true" width="100%" height="600" autoplay loop muted="" loading="lazy">
                    <source src="files/4328e.webm">
                </video>
            </ul>
        </section>

        <section class="iuhrrlrupihk">
            <h2 class="kaupksiqwkkif"><span>Опис</span> куртки</h2>

            <ul class="vatoxhezwhqeul">
                <li><b>Тканина:</b> плащова тканина «Канада», на підкладці пайка (сінтепон 150)</li>
                <li><b>Зріст дівчини на фото:</b> 170 см</li>
                <li><b>Країна виробник:</b> Україна</li>
                <li><b>Колір:</b> чорний, хакі, червоний, лайм</li>
                <li><b>Розміри:</b> від 48 до 58</li>
                <li><b>Рукав:</b> 65 см</li>
                <li><b>Опис:</b> Куртка на підкладці пайка, з капюшоном, двома кишенями і манжетом на рукавах</li>
                <li>ВИМІРИ ВКАЗАНІ ПО ГОТОВОМУ ВИРОБУ</li>
                <li>
                    <table class="size" width="100%">
                        <tbody>

                            <tr align="center" height="35">
                                <td width="35%">Розмір</td>
                                <td>48-50</td>
                                <td>52-54</td>
                                <td>56-58</td>
                            </tr>
                            <tr align="center" height="35">
                                <td width="35%">Обхват грудей</td>
                                <td>116</td>
                                <td>124</td>
                                <td>132</td>
                            </tr>
                            <tr align="center" height="35">
                                <td width="35%">Обхват стегон</td>
                                <td>120</td>
                                <td>128</td>
                                <td>136</td>
                            </tr>
                            <tr align="center" height="35">
                                <td width="35%">Довжина по спинці</td>
                                <td>94</td>
                                <td>95</td>
                                <td>96</td>
                            </tr>
                        </tbody>
                    </table>
                </li>

                <br>
                <center>*залиште заявку і ми надамо вам пораду за розміром!</center>
            </ul>

        </section><br>
        <section class="cat" id="elxuqritaxkpi">
            <div class="gzvpjusyey">
                <h2 class="kaupksiqwkkif"><span>Оберіть свій колір</span> куртки</h2>
            </div>
            <center>Куртка в різних ракурсах, гортайте </center>


            <section class="cat" id="elxuqritaxkpi">
                <ul class="ijhzjapohwp">
                    <li>
                        <div><img src="files/b1.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/b2.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/b3.webp" alt=""></div>
                    </li>
                </ul>
            </section>
            <br>
            <div class="gzvpjusyey">
                <div class="vskdfpresodcz">
                    <h3>Колір чорний</h3>
                    <div class="kklwwrycqawdvws vskdfpresodcz">
                        <div class="kdyooqlggpfu"><span>-40%</span>
                            <p>2580грн</p>
                        </div>
                        <div class="jqdvtyivviv"><span>Ціна зі знижкою:</span>
                            <p>1549грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="evakhaixqjj whfcjqfvlf">Оформити замовлення</a>
            </div>
            <br>

            <section class="cat" id="elxuqritaxkpi">
                <ul class="ijhzjapohwp">
                    <li>
                        <div><img src="files/h1.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/h2.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/h3.webp" alt=""></div>
                    </li>

                </ul>
            </section>
            <br>
            <div class="gzvpjusyey">
                <div class="vskdfpresodcz">
                    <h3>Колір хакі</h3>
                    <div class="kklwwrycqawdvws vskdfpresodcz">
                        <div class="kdyooqlggpfu"><span>-40%</span>
                            <p>2580грн</p>
                        </div>
                        <div class="jqdvtyivviv"><span>Ціна зі знижкою:</span>
                            <p>1549грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="evakhaixqjj whfcjqfvlf">Оформити замовлення</a>
            </div>
            <br>

            <section class="cat" id="elxuqritaxkpi">
                <ul class="ijhzjapohwp">
                    <li>
                        <div><img src="files/r1.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/r2.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/r3.webp" alt=""></div>
                    </li>
                </ul>
            </section>
            <br>
            <div class="gzvpjusyey">
                <div class="vskdfpresodcz">
                    <h3>Колір червоний</h3>
                    <div class="kklwwrycqawdvws vskdfpresodcz">
                        <div class="kdyooqlggpfu"><span>-40%</span>
                            <p>2580грн</p>
                        </div>
                        <div class="jqdvtyivviv"><span>Ціна зі знижкою:</span>
                            <p>1549грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="evakhaixqjj whfcjqfvlf">Оформити замовлення</a>
            </div>
            <br>
            <section class="cat" id="elxuqritaxkpi">
                <ul class="ijhzjapohwp">
                    <li>
                        <div><img src="files/l1.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/l2.webp" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/l3.webp" alt=""></div>
                    </li>

                </ul>
            </section>
            <br>
            <div class="gzvpjusyey">
                <div class="vskdfpresodcz">
                    <h3>Колір лайм</h3>
                    <div class="kklwwrycqawdvws vskdfpresodcz">
                        <div class="kdyooqlggpfu"><span>-40%</span>
                            <p>2580грн</p>
                        </div>
                        <div class="jqdvtyivviv"><span>Ціна зі знижкою:</span>
                            <p>1549грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="evakhaixqjj whfcjqfvlf">Оформити замовлення</a>
            </div>
            <br>
            <br>

            <br>
            <section class="qwlpvuiauwijrp">
                <h2 class="kaupksiqwkkif"><span>Відгуки</span> покупців</h2>
                <div class="hdoqlzwadll">
                    <div class="hzzieuoysraqxq">
                        <div class="plhgevkcaui vskdfpresodcz">
                            <img src="files/ava1.webp" alt="">
                            <div class="qusuhxtoaqxp">
                                <div class="name">Тамара</div>
                                <div class="text">49 років</div>
                            </div>
                            <div class="info">
                                <div class="dodyuqahgooszh"></div>
                                <div class="date">26.09.2023</div>
                            </div>
                        </div>
                        <p> Кольори дуже насичені. Вживу навіть краще ніж на фото. Тканина дуже приємна. Дякую. </p>
                    </div>

                    <div class="hzzieuoysraqxq">
                        <div class="plhgevkcaui vskdfpresodcz"><img src="files/ava2.webp" alt="">
                            <div class="qusuhxtoaqxp">
                                <div class="name">Галина</div>
                                <div class="text">38 років</div>
                            </div>
                            <div class="info">
                                <div class="dodyuqahgooszh"></div>
                                <div class="date">23.09.2023</div>
                            </div>
                        </div>
                        <p> Клас! Куртка сподобалась дуже. Приміряла ще на пошті та одразу закохалась. Просто чудова, дуже вам дякую та всім рекомендую </p>
                    </div>

                    <div class="hzzieuoysraqxq">
                        <div class="plhgevkcaui vskdfpresodcz"><img src="files/ava3.webp" alt="">
                            <div class="qusuhxtoaqxp">
                                <div class="name">Ганна</div>
                                <div class="text">54 роки</div>
                            </div>
                            <div class="info">
                                <div class="dodyuqahgooszh"></div>
                                <div class="date">19.09.2023</div>
                            </div>
                        </div>
                        <p> Щиро дякую за куртку. Пошито дуже акуратно, всі шовчики рівні, видно, що працювали гарні майстрині. Доставили дуже швидко. Окрема подяка дівчатам, що допомогали з замовленням за їх турботу та мій гарний настрій </p>
                    </div>
                </div>
            </section>

            <!-- /reviews 3 -->
            <!-- gvihlaevegaof steps 1 -->
            <div class="tlt">

                <h2 class="kaupksiqwkkif"><span>Як зробити</span><br> замовлення?</h2>
            </div>
            <div class="lretjrjgkoa">
                <div class="ldfsyyztpdai">
                    <div class="wohzjotkere"><img src="files/order_steps__step1_icon15b1b.webp" alt="">

                        <h4>Замовлення</h4>
                        <p>Залиште замовлення внизу сторінки</p>
                    </div>
                </div>
                <div class="ldfsyyztpdai">
                    <div class="wohzjotkere">
                        <img src="files/order_steps__step2_icon95bea.webp" alt="">

                        <h4>Дзвінок</h4>
                        <p>Наш менеджер уточнить деталі замовлення</p>
                    </div>
                </div>
                <div class="ldfsyyztpdai">
                    <div class="wohzjotkere">
                        <img src="files/order_steps__step3_icon9469b.webp" alt="">

                        <h4>Відправлення</h4>
                        <p>Доставимо Ваше замовлення Новою Поштою</p>
                    </div>
                </div>
                <div class="ldfsyyztpdai">
                    <div class="wohzjotkere">
                        <img src="files/order_steps__step4_icone6b9d.webp" alt="">

                        <h4>Отримання</h4>
                        <p>Сплачуйте при отриманні на відділенні</p>
                    </div>
                </div>
            </div>

            <!-- Доставка/оплата-v3 -->
            <div class="tlt">
                <section class="qyrajysfwasfl">
                    <ul class="zrgtjosfdgkzcw">
                        <li>
                            <h3>Доставка</h3>
                            <p>Доставляємо Новою Поштою по Україні. Вартість за тарифами Нової Пошти</p>
                        </li>
                        <li>
                            <h3>Безпечна оплата</h3>
                            <p>Ви оплачуєте замовлення за фактом отримання виробу на руки з комісією або без комісії переказом на банківську картку</p>
                        </li>
                        <li>
                            <h3>Обмін, повернення та гарантії</h3>
                            <p>Ми завжди перевіряємо товар перед відправкою і гарантуємо 100% якість.</p>
                            <p>Обмін і повернення протягом 14 днів!</p>
                        </li>

                    </ul>
                </section>
            </div>

            <!-- gvihlaevegaof 3 -->
            <section class="jccgtghitajaqlo fvezcgrloi gvihlaevegaof">
                <h1 class="fvupljaxrfy">НОВИНКА 2023 РОКУ</h1>
                <div class="ixhiuuaerog">
                    <p class="vqdgahoyzsyp">Стильна подовжена куртка</p>
                    <div class="gaplatuqlryp"><b>40% знижка</b></div>


                    <img src="files/offer1.webp" alt="">
                </div>

                <div class="gljxozvysgvivu">
                    <div class="yhdwuzyftuqw hdlqvhiyedpz">
                        <div class="text">Звичайна ціна:</div>
                        <div class="dedzgkcppdoo">2580грн</div>
                    </div>
                    <div class="yhdwuzyftuqw afajaaaxxuy">
                        <div class="text">Ціна зі знижкою:</div>
                        <div class="dedzgkcppdoo">1549грн</div>
                    </div>
                </div>

                <div class="rxqygdcygq vskdfpresodcz">

                    <div class="oxvgayvtrrapvf">

                        <img src="files/benefit1.webp" alt="">
                        <p>МОДНИЙ ДИЗАЙН</p>
                    </div>

                    <div class="oxvgayvtrrapvf">
                        <img src="files/benefit2.webp" alt="">
                        <p>ВИСОКА ЯКІСТЬ</p>
                    </div>
                    <div class="oxvgayvtrrapvf">

                        <img src="files/benefit3.webp" alt="">

                        <p>ПРИЄМНА ТКАНИНА</p>
                    </div>
                </div>

                <p align="center">Для замовлення та консультації заповніть форму:</p>
                <br>
                <form id="order_form" class="lchikeolxzs" action="form_handler.php" method="post">
                    <input class="xuadvalhxfqy" type="text" name="name" placeholder="Введіть Ваше іʼмя" required>
                    <input class="xuadvalhxfqy" type="tel" name="phone" placeholder="Введіть Ваш телефон" required>
                    <input type="hidden" name="aff_id" value="<?= $aff_id ?>">
                    <input type="hidden" name="offer_id" value="<?= $offer_id ?>">
                    <input type="hidden" name="click_id" id="click_id">
                    <div style="margin: 0 auto 25px;font-size: 15px; text-align: center; color: #000;" bis_skin_checked="1">
                        <input id="data1" type="checkbox" checked required style="appearance: auto;">
                        <label for="data1">Я погоджуюся з політикою конфіденційності</label>
                    </div>
                    <button class="evakhaixqjj" id="submit_btn">Оформити замовлення</button>
                </form>

            </section>
            <!-- /order 3 -->
            <!-- footer -->
            <footer class="akidgirpcrzu">
                <p>Виробництво в Україні
                    <br>
                    49322, м. Днiпро, вул. Старокозацька, 43
                    <br>ТОВ "Жіночий одяг"
                </p>
                <br>
                <a href="politics.html" target="_blank">Політика конфіденційності</a>
                <br>
                <a href="refund.html" target="_blank">Гарантії та повернення</a> <br>
                <a href="ugoda.html" target="_blank">Угода Користувача</a>
            </footer><!-- /footer -->
            <div class="popap-wrap">
                <div class="popap">
                    <div class="popap__title">
                        Оформлення замовлення
                    </div>
                    <div class="loader">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <style>
                .popap-wrap {
                    display: none;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.329);
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 100;
                    align-items: center;
                }

                .popap {
                    display: flex;
                    background: rgb(255, 255, 255);
                    border-radius: 20px;
                    border: 1px solid rgb(150, 150, 150);
                    margin: 0 auto;
                    width: 90%;
                    max-width: 480px;
                    padding: 60px 15px;
                    justify-content: center;
                    flex-direction: column;
                }

                .popap__title {
                    text-align: center;
                    font-weight: 600;
                    font-size: 1.2rem;
                    text-align: center;

                }

                .loader {
                    margin: 40px auto 0;
                    display: flex;
                    justify-content: space-between;
                    width: 100px;
                }

                .circle {
                    width: 15px;
                    height: 15px;
                    border-radius: 50%;
                    background-color: #FED121;
                    animation: scaleUp 1.2s ease-in-out infinite;
                }

                .circle:nth-child(2) {
                    animation-delay: 0.2s;
                }

                .circle:nth-child(3) {
                    animation-delay: 0.4s;
                }

                .circle:nth-child(4) {
                    animation-delay: 0.6s;
                }


                @keyframes scaleUp {

                    0%,
                    100% {
                        transform: scale(1);
                    }

                    50% {
                        transform: scale(1.3);
                    }
                }
            </style>
    </div>
    <!-- scripts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="bxslider/jquery.ijhzjapohwp.js">
    </script>
    <link href="bxslider/jquery.ijhzjapohwp.css" rel="stylesheet">

    <script>
        $(document).ready(function() {

            $('.ijhzjapohwp').bxSlider();

        });
    </script>
    <script>
        $(function() {

            $('.whfcjqfvlf').click(function() {

                ind = $(this).attr('rel');

                $('#select option').removeAttr('selected');

                $('#select').children('option').eq(ind).attr("selected", "selected");

            });


        });
    </script>
    <script src="files/scripts6085f.js">
    </script>
    <script>
        function identifyDate(e) {
            var t = new Date;
            t.setTime(t.getTime() + 864e5 * e);
            var a = t.getDate(),
                n = t.getMonth() + 1,
                r = t.getFullYear();
            return (a > 9 ? a : "0" + a) + "." + (n > 9 ? n : "0" + n) + "." + r
        }

        function printCommentsDate(m) {
            for (var t = $(m).length, e = 0; e <= t; e++) $(m + ":eq(" + (t - e) + ")").html(identifyDate(-e))
        }
        printCommentsDate('.date');
    </script>

    <script>
        const form = document.getElementById("order_form")
        const button = document.getElementById("submit_btn");

        // Додаємо обробник події на кнопку
        button.addEventListener("click", function() {
            const requiredFields = form.querySelectorAll("[required]");

            // Перевіряємо, чи всі обов'язкові поля заповнені
            let allFieldsFilled = true;
            requiredFields.forEach(field => {
                if (!field.value) {
                    allFieldsFilled = false;
                }
            });

            // Виводимо повідомлення з результатом перевірки
            if (allFieldsFilled) {
                button.disabled = true;
                button.style.opacity = ".5"
                const popapWrap = document.querySelector(".popap-wrap");
                popapWrap.style.display = "flex";
                form.submit();
            } else {
                return;
            }
        });
    </script>

    <script>
        function sclClickPixelFn(aff_id = null, offer_id = null) {
            const url = new URL(document.location.href).searchParams;
            if (aff_id) {
                const availableParams = ['aff_click_id', 'sub_id1', 'sub_id2', 'sub_id3', 'sub_id4', 'sub_id5', 'aff_param1', 'aff_param2', 'aff_param3', 'aff_param4', 'aff_param5', 'idfa', 'gaid'];
                const t = new URL('https://odiya.scaletrk.com/click');
                const r = t.searchParams;
                r.append('a', aff_id);
                r.append('o', offer_id);
                r.append('return', 'click_id');
                if (availableParams?.length > 0) {
                    availableParams.forEach((key) => {
                        const value = url.get(key);
                        if (value) {
                            r.append(key, value);
                        }
                    });
                }
                fetch(t.href).then((e) => e.json()).then((e) => {
                    const c = e.click_id;
                    if (c) {
                        document.getElementById("click_id").value = c;
                        console.log(c);
                    }
                });
            }
        }
        sclClickPixelFn("<?= $aff_id ?>", "<?= $offer_id ?>");
    </script>
</body>

</html>
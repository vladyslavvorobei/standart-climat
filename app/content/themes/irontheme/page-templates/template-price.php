<?php
/**
 * Template Name: Калькулятор
 */
get_header(); ?>

  <section class="calculator">
    <div class="container">
      <div class="title title--no-number">
        <h2> калькулятор <strong> Онлайн-расчет стоимости </strong>
        </h2>
      </div>
      <form class="test calculator__block">
        <div class="main active">
          <img src="<?php echo THEME_URL; ?>/img/calc-block-icon.svg" alt="">
          <h3> РАСЧЕТ СТОИМОСТИ </h3>
          <h4>ЭКСПРЕСС-РАСЧЕТ СТОИМОСТИ ПРОЕКТА В ОНЛАЙН РЕЖИМЕ</h4>
          <p> Ответьте на 8 вопросов и получите смету в онлайн режиме </p>
          <button type="button" class="btn btn--calculator button start" data-num="1">
            <span>Начать расчет</span>
          </button>
          <span> *На прохождение теста потребуется 1-2 минуты </span>
        </div>
        <div class="steps">
          <div class="num">
            <div class="text">
              <div class="caption">
                <span class="current">1</span>/<span class="total">8</span>
              </div>
            </div>
            <div class="line">
              <div class="fill"></div>
            </div>
          </div>
          <div class="step question" data-num="1">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Какой у Вас вид помещения?
                    </div>
                  </div>
                </div>
                <div class="answer image">
                  <div class="items">
                    <div class="item checked">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/1.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Квартира
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/2.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Дом
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/3.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Ресторан (кафе)
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/4.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Магазин
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/5.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Офис
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/6.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Промышленное
                              помещение
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/1/7.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Бассейн
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/other.png" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Другой вариант
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="building">
                </div>
                <div class="buttons">
                  <a href="#" class="btn button next" data-num="2">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="2">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Укажите примерную площадь помещения:
                    </div>
                  </div>
                </div>
                <div class="answer">
                  <div class="items">
                    <div class="item">
                      <div class="modal__label">
                        <input type="text" name="area" placeholder="Площадь:">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="1">Отмена</a>
                  <a href="#" class="btn button next" data-num="3">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="3">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Какой тип системы вентиляции?
                    </div>
                  </div>
                </div>
                <div class="answer">
                  <div class="items">
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="ventilation" value="Приточная" checked>
                        <label>Приточная</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="ventilation" value="Приточно-вытяжная">
                        <label>Приточно-вытяжная</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="ventilation" value="Вытяжная">
                        <label>Вытяжная</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="ventilation" value="Не знаю">
                        <label>Не знаю</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="2">Отмена</a>
                  <a href="#" class="btn button next" data-num="4">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="4">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Есть ли уже проект?
                    </div>
                  </div>
                </div>
                <div class="answer image big">
                  <div class="items">
                    <div class="item checked">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/4/1.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Да, уже есть
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <div class="table">
                          <div class="cell">
                            <img src="<?php echo THEME_URL; ?>/img/test/other.png" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="text">
                        <div class="table">
                          <div class="cell">
                            <div class="caption">
                              Нет, нужно сделать
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="project">
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="3">Отмена</a>
                  <a href="#" class="btn button next" data-num="5">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="5">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Какой тип внутренних блоков кондиционирования?
                    </div>
                  </div>
                </div>
                <div class="answer">
                  <div class="items">
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="conditioning" value="Настенные" checked>
                        <label>Настенные</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="conditioning" value="Канальные">
                        <label>Канальные</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="conditioning" value="Кассетные">
                        <label>Кассетные</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="conditioning" value="Напольно-потолочные">
                        <label>Напольно-потолочные</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="conditioning" value="Не знаю">
                        <label>Не знаю</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="4">Отмена</a>
                  <a href="#" class="btn button next" data-num="6">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="6">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Как далеко вы находитесь от МКАД?
                    </div>
                  </div>
                </div>
                <div class="answer">
                  <div class="items">
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="distance" value="До 15 км" checked>
                        <label>До 15 км</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="distance" value="15-30 км">
                        <label>15-30 км</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="distance" value="Более 30 км">
                        <label>Более 30 км</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="5">Отмена</a>
                  <a href="#" class="btn button next" data-num="7">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="7">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      Когда нужно установить вентиляцию?
                    </div>
                  </div>
                </div>
                <div class="answer">
                  <div class="items">
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="date" value="Начать на этой неделе" checked>
                        <label>Начать на этой неделе</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="date" value="Через 2 недели">
                        <label>Через 2 недели</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="date" value="Через 1 месяц">
                        <label>Через 1 месяц</label>
                      </div>
                    </div>
                    <div class="item">
                      <div class="radio">
                        <input type="radio" name="date" value="Через 3 месяца">
                        <label>Через 3 месяца</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="6">Отмена</a>
                  <a href="#" class="btn button next" data-num="8">Далее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="step question" data-num="8">
            <div class="table">
              <div class="cell">
                <div class="top">
                  <div class="text">
                    <div class="caption">
                      На какой номер телефона сообщить результаты расчета стоимости?
                    </div>
                  </div>
                </div>
                <div class="answer">
                  <div class="items">
                    <div class="item">
                      <div class="modal__label">
                        <input type="tel" name="phone" placeholder="Телефон">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                  <a href="#" class="btn button prev" data-num="7">Отмена</a>
                  <button type="submit" class="btn button next" data-goal="quiz" data-form="Экспресс-тест">Далее</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="complete">
          <div class="top">
            <div class="text">
              <div class="caption">
                Спасибо! <br>
                Специалист уже рассчитывает примерную
                стоимость вашей вентиляции
              </div>
              <div class="desc">
                В течение ближайшего времени с вами свяжется наш менеджер,
                чтобы сообщить результаты расчета стоимости
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <section class="prices">
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-1.jpg')">
      <div class="container">
        <div class="title">
          <p> 01 </p>
          <h2> Прайс <strong> Проектные работы </strong>
          </h2>
        </div>
        <div class="prices__table-wrapper">
          <table class="prices__table prices__table--big">
            <tr>
              <th rowspan="2" width="31"> № </th>
              <th rowspan="2" width="227"> Наименование объекта </th>
              <th rowspan="2" width="167"> Минимальная стоимость проекта </th>
              <th colspan="4"> Стоимость проекта за м2 </th>
            </tr>
            <tr>
              <th width="174"> Отопление </th>
              <th width="110"> Вентиляция </th>
              <th width="185"> Кондиционирование </th>
              <th> Дымоудаление </th>
            </tr>
            <tr>
              <td> 1 </td>
              <td> Котеджи </td>
              <td> 30 000,0 </td>
              <td> 200 руб, за 1м2, <br> включая котельную и ВК </td>
              <td> 120 </td>
              <td> 80 </td>
              <td> - </td>
            </tr>
            <tr>
              <td> 2 </td>
              <td> Квартиры </td>
              <td> 25 000,0 </td>
              <td> - </td>
              <td> 120 </td>
              <td> 80 </td>
              <td> - </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
              <td> 100 </td>
              <td> 80 </td>
              <td> 120 </td>
            </tr>
          </table>
        </div>
        <div class="prices__table-wrapper">
          <table class="prices__table prices__table--big">
            <tr>
              <th width="31"> № </th>
              <th width="227"> Наименование объекта </th>
              <th width="167"> Минимальная стоимость проекта </th>
              <th width="188"> Водоснабжение <br> и канализация (ВК) </th>
            </tr>
            <tr>
              <td> 1 </td>
              <td> Бассейны </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
            </tr>
            <tr>
              <td> 2 </td>
              <td> Помещения </td>
              <td> 20 000,0 </td>
              <td> 100 </td>
            </tr>
            <tr>
              <td> 3 </td>
              <td> Общепит </td>
              <td> 30 000,0 </td>
              <td> 150 </td>
            </tr>
            <tr>
              <td> 4 </td>
              <td> Общепит </td>
              <td> 30 000,0 </td>
              <td> 150 </td>
            </tr>
            <tr>
              <td> 5 </td>
              <td> Общепит </td>
              <td> 30 000,0 </td>
              <td> 150 </td>
            </tr>
            <tr>
              <td> 6 </td>
              <td> Общепит </td>
              <td> 30 000,0 </td>
              <td> 150 </td>
            </tr>
            <tr>
              <td> 7 </td>
              <td> Общепит </td>
              <td> 30 000,0 </td>
              <td> 150 </td>
            </tr>
          </table>
        </div>
        <div class="prices__description">
          <p> *Отрисовка планов (выезд+замеры) - 50 руб./м2 </p>
          <p> *Стоимость может меняться в зависимости отсложности и сроков работ </p>
        </div>
      </div>
    </div>
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-2.jpg')">
      <div class="container">
        <div class="title">
          <p> 02 </p>
          <h2> Прайс <strong> Монтаж кондиционирования </strong>
          </h2>
        </div>
        <table class="prices__table prices__table--small">
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-3.jpg')">
      <div class="container">
        <div class="title">
          <p> 03 </p>
          <h2> Прайс <strong> Монтаж вентиляции </strong>
          </h2>
        </div>
        <table class="prices__table prices__table--small">
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-4.jpg')">
      <div class="container">
        <div class="title">
          <p> 04 </p>
          <h2> Прайс <strong> Монтаж холодоснабжения </strong>
          </h2>
        </div>
        <table class="prices__table prices__table--small">
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-5.jpg')">
      <div class="container">
        <div class="title">
          <p> 05 </p>
          <h2> Прайс <strong> Монтаж автоматики </strong>
          </h2>
        </div>
        <table class="prices__table prices__table--small">
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-6.jpg')">
      <div class="container">
        <div class="title">
          <p> 06 </p>
          <h2> Прайс <strong> Дополнительные работы </strong>
          </h2>
        </div>
        <table class="prices__table prices__table--small">
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="prices__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/price-bg-img-7.jpg')">
      <div class="container">
        <div class="title">
          <p> 07 </p>
          <h2> Прайс <strong> Сервисное обслуживание </strong>
          </h2>
        </div>
        <table class="prices__table prices__table--small">
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж сплит-системы </td>
            <td> от 8 900 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV наружно блока </td>
            <td> от 12 000 руб./шт. </td>
          </tr>
          <tr>
            <td> Монтаж VRV вн. блока </td>
            <td> от 2000 руб./шт. </td>
          </tr>
        </table>
      </div>
    </div>
    </div>
  </section>

<?php get_footer();
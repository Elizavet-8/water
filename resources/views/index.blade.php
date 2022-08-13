@extends('layouts/base')

@section('content')

    <section v-if="false" id="terminals" class="terminals">
        <div class="container">
            <div class="terminals-search">
                <div class="terminals-search__group">
                    <i class="terminals-search__icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="terminals-search__input input__search" placeholder="Адрес">
                </div>
                <div class="terminals-search__group">
                    <i class="terminals-search__icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="terminals-search__input input__search" placeholder="Email">
                </div>
                <div class="terminals-search__group">
                    <i class="terminals-search__icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="terminals-search__input input__search" placeholder="По дате запуска">
                </div>
                <button class="terminals-search__btn btn-none">
                    <i class="terminals-search__svg fa-solid fa-filter"></i>
                </button>
            </div>
            <div class="terminals-tab tab">
                <ul class="terminals-tab__nav nav nav-tabs terminals-nav__list" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="terminals-nav__item text-center nav__item active" id="home-tab" data-bs-toggle="tab"
                             data-bs-target="#money"
                             role="tab" aria-controls="home" aria-selected="true">
                            Деньги
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="terminals-nav__item text-center nav__item" id="profile-tab" data-bs-toggle="tab"
                             data-bs-target="#device"
                             role="tab" aria-controls="profile" aria-selected="false">
                            Приборы
                        </div>
                    </li>
                </ul>
                <div class="terminals-tab__content tab-content">
                    <table class="terminals-table table tab-pane fade show active" id="money" role="tabpanel"
                           aria-labelledby="home-tab">
                        <tr class="terminals-table-head table-head">
                            <th class="terminals-table-head__item table-head__item">№</th>
                            <th class="terminals-table-head__item table-head__item">Адрес</th>
                            <th class="terminals-table-head__item table-head__item">Примечание</th>
                            <th class="terminals-table-head__item table-head__item">V,tC&#176;</th>
                            <th class="terminals-table-head__item table-head__item">УФ лампа</th>
                            <th class="terminals-table-head__item table-head__item">Деньги</th>
                            <th class="terminals-table-head__item table-head__item">Последний выход на связь</th>
                            <th class="terminals-table-head__item table-head__item">Последняя продажа</th>
                            <th class="terminals-table-head__item table-head__item">Всего</th>
                            <th class="terminals-table-head__item table-head__item">device:alerts</th>
                            <th class="terminals-table-head__item table-head__item">Обслуживание</th>
                        </tr>
                        <tr class="terminals-table-row table-row">
                            <td class="terminals-table-row__item table-row__item">
                                1
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                24524752557
                            </td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>52258 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                01:40 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                02:30 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>545 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <div class="terminals-table-row__icon_center">
                                    <i class="terminals-table-row__icon table-row__icon table-row__icon_green fa-solid fa-circle-check"></i>
                                </div>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_black fa-solid fa-calendar-days"></i>
                                <span class="table-row__date">30.02.22</span>
                            </td>
                        </tr>
                        <tr class="terminals-table-row table-row">
                            <td class="terminals-table-row__item table-row__item">
                                2
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                24524752557
                            </td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>52258 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                01:40 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                02:30 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>545 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <div class="terminals-table-row__icon_center">
                                    <i class="terminals-table-row__icon table-row__icon table-row__icon_red fa-solid fa-circle-xmark"></i>
                                </div>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_black fa-solid fa-calendar-days"></i>
                                <span class="table-row__date">30.02.22</span>
                            </td>
                        </tr>
                    </table>
                    <table class="terminals-table table tab-pane fade" id="device" role="tabpanel"
                           aria-labelledby="profile-tab">
                        <tr class="terminals-table-head table-head">
                            <th class="terminals-table-head__item table-head__item">№</th>
                            <th class="terminals-table-head__item table-head__item">
                                Владелец<br>
                                VENDOR
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Мировые координаты<br>
                                GPS LOCATION
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Адрес аппарата<br>
                                VENDING MACHINE ADRESS
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Последняя продажа (количество/деньги/время транзакции)<br>
                                Latest Sale (quantity/money/transaction time)
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Выход на связь<br>
                                Cnnectivity TIME
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Обслуживание<br>
                                Service
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Предупреждения<br>
                                ALERTS
                            </th>
                            <th class="terminals-table-head__item table-head__item">

                            </th>
                        </tr>
                        <tr class="terminals-table-row table-row">
                            <td class="terminals-table-row__item table-row__item">
                                1
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                24524752557
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                01:40 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>52258 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                24524752557
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <div class="table-row__links">
                                    <a href="/device" class="table-row__link">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/edit" class="table-row__link">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
        <terminals-page></terminals-page>
@endsection

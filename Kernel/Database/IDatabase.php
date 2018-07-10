<?php
/**
 * Created by PhpStorm.
 * User: dmitriyguryanov
 * Date: 10.07.2018
 * Time: 2:53
 *
 * Интерфейс упрощенного варианта взаимодействия с любой поддерживаемой БД.
 * Правильно реализуем наследника для конкретной БД => Получаем кошерный результат
 */

namespace Kernel\Database;


interface IDatabase
{

    /**
     * IDatabase constructor.
     * Создание подключения и открытие соединения
     * @param $connectParams - Ассоциативный массив входных параметров. Список параметров зависит от конкретной СУБД - смотри документацию реализации интерфейса
     */
    public function __construct($connectParams);
    /**
     * Исполнение запроса с возвратом результатов
     * @param $query - Запрос
     */
    public function Query($query);
    /**
     * Исполнение запроса с возвратом 1го результата
     * @param $query - Запрос
     */
    public function First($query);
    /**
     * Исполнение запроса без возврата конкретного результата
     * @param $query - Запрос
     */
    public function Execute($query);
    /**
     * Возвращает ассоциативный массив
     * @param $result - Объект Result, возвращаемый в методах First или Query
     */
    public function Fetch($result);

}
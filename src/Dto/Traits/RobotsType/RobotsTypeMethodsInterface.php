<?php

namespace SeoCommonBundle\Dto\Traits\RobotsType;

/**
 * Interface RobotsTypeMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\RobotsType
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface RobotsTypeMethodsInterface
{
    /*
    * Разрешить индексирование страницы и использование размещённых на ней ссылок для последующей
    * индексации
    * */
    public const ROBOTS_INDEX_FOLLOW = 0;

    /*
     * Запретить индексирование страницы, разрешить использование размещённых на ней ссылок для
     * последующей индексации
     * */
    public const ROBOTS_NO_INDEX_FOLLOW = 1;

    /*
     * Разрешить индексирование страницы, запретить использование размещённых на ней ссылок для
     * последующей индексации
     * */
    public const ROBOTS_INDEX_NO_FOLLOW = 2;

    /*
     * Запретить индексирование страницы и использование размещённых на ней ссылок для последующей
     * индексации.
     */
    public const ROBOTS_NO_INDEX_NO_FOLLOW = 3;

    /**
     * @return int
     */
    public function getRobotsType(): int;

    /**
     * @param int $robots_type
     */
    public function setRobotsType(int $robots_type): void;
}

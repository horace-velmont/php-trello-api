<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-09-08
 * Time: 오후 10:18
 */

namespace Trello\Api\Board;


use Trello\Api\AbstractApi;

/**
 * Trello Board Custom Fields API
 * @link https://developers.trello.com/v1.0/reference#custom-fields
 *
 * Class CustomFields
 * @package Trello\Api\Board
 */
class CustomFields extends AbstractApi
{
    protected $path = 'boards/#id#/customFields';

    /**
     * Get a given board's custom fields
     * @link https://developers.trello.com/v1.0/reference#boardsidcustomfields
     *
     * @param string $id     the board's id
     * @param array  $params optional parameters
     *
     * @return array
     */
    public function all($id, array $params = array())
    {
        return $this->get($this->getPath($id), $params);
    }
}
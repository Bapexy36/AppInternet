<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * House Entity
 *
 * @property int $id
 * @property int $category_id
 * @property int $subcategory_id
 * @property string $city
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Subcategory $subcategory
 */
class House extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}

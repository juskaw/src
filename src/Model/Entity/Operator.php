<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Operator Entity
 *
 * @property string $fname
 * @property string $lname
 * @property int $age
 * @property int $quantity
 * @property string $platenumber
 */
class Operator extends Entity
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
        'fname' => true,
        'lname' => true,
        'age' => true,
        'quantity' => true,
        'platenumber' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity
 *
 * @property int $id
 * @property string $platenumber
 * @property int $seater
 * @property string $color
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class Vehicle extends Entity
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
        'platenumber' => true,
        'seater' => true,
        'color' => true,
        'user_id' => true,
        'user' => true,
        'transactions' => true
    ];
}

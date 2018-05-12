<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string $destination
 * @property int $vehicle_id
 * @property int $capacity
 * @property int $days
 * @property string $service
 * @property int $user_id
 *
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property \App\Model\Entity\User $user
 */
class Transaction extends Entity
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
        'destination' => true,
        'vehicle_id' => true,
        'capacity' => true,
        'days' => true,
        'service' => true,
        'user_id' => true,
        'vehicle' => true,
        'user' => true
    ];
}

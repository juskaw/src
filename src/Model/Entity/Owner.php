<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Owner Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $fname
 * @property string $lname
 * @property int $age
 * @property string $platenumber
 * @property string $quatity
 * @property int $id_owners
 */
class Owner extends Entity
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
        'username' => true,
        'password' => true,
        'fname' => true,
        'lname' => true,
        'age' => true,
        'platenumber' => true,
        'quatity' => true,
        'id_owners' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}

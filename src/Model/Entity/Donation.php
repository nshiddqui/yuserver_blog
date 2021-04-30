<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donation Entity
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $email
 * @property string $amount
 * @property string|null $transaction_id
 * @property string|null $status
 * @property string|null $payment_amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Transaction $transaction
 */
class Donation extends Entity
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
        'full_name' => true,
        'email' => true,
        'amount' => true,
        'transaction_id' => true,
        'status' => true,
        'payment_amount' => true,
        'created' => true,
        'modified' => true,
        'transaction' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlogContent Entity
 *
 * @property int $id
 * @property int $blog_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $image
 * @property int $views
 *
 * @property \App\Model\Entity\Blog $blog
 */
class BlogContent extends Entity
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
        'blog_id' => true,
        'title' => true,
        'description' => true,
        'content' => true,
        'created' => true,
        'modified' => true,
        'image' => true,
        'views' => true,
        'blog' => true,
    ];
}

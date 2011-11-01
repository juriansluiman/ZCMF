<?php
/* 
 * This is free and unencumbered software released into the public domain.
 * 
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 * 
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * 
 * For more information, please refer to <http://unlicense.org/>
 * 
 * @category
 * @package
 * @copyright  Copyright (c) 2009-2011 Soflomo (http://www.soflomo.com)
 * @license    http://unlicense.org Unlicense
 * @version    $Id:  $
 */

namespace Zcmf\Blog\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Article
 *
 * @package    
 * @subpackage Model
 * @author     Jurian Sluiman <jurian@soflomo.com>
 * @version    SVN: $Id:  $
 * @ORM\Entity
 * @ORM\Table(name="blog_articles")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Zcmf\Blog\Model\Blog", inversedBy="articles")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id")
     * @var Blog
     */
    protected $blog;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $lead;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $body;

    public function getId ()
    {
        return $this->id;
    }

    public function getBlog ()
    {
        return $this->blog;
    }

    public function setBlog ($blog)
    {
        $this->blog = $blog;
    }

    public function getTitle ()
    {
        return $this->title;
    }

    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getLead ()
    {
        return $this->lead;
    }

    public function setLead ($lead)
    {
        $this->lead = $lead;
    }

    public function getBody ()
    {
        return $this->body;
    }

    public function setBody ($body)
    {
        $this->body = $body;
    }
}

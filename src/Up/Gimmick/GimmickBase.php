<?php
/**
 * Created by PhpStorm.
 * User: Dimitrios
 * Date: 16.08.2016
 * Time: 22:25
 */

namespace Innovacy\Up\Gimmick;

/**
 * Class Gimmick
 * All gimmick plugins must inherit this class
 * @method renderLink($block)
 * @method renderParagraph($block)
 * @package Innovacy\Up\Gimmick
 */
abstract class GimmickBase
{
    /**
     * @var \Innovacy\Up\MarkDown active parser calling the gimmick class
     */
    public $parser = null;

    /**
     * @var bool Should this be registered as link gimmick? Requires the method renderLink() to be implemented.
     */
    public $isLinkGimmick = false;

    /**
     * @var string The gimmick keyword suffix associated with a gimmick.
     */
    public $gimmickKeyword = '';

    /**
     * @var bool Should this be registered as paragraph gimmick? Requires renderParagraph() to be implemented.
     */
    public $isParagraphGimmick = false;

}

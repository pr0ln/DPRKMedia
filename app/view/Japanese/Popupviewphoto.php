<?php
/**
 *  Japanese/Popupviewphoto.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  japanese_popupviewphoto view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_JapanesePopupviewphoto extends Kpm_ViewClass
{
    /** @var boolean  layout template use flag   */
    public $use_layout = false;

    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
		$commManager =& $this->backend->getManager('commonjpn');
		$mmFileID    = $this->af->get('mmFileID');
		$mediaInfo   = $commManager->getMediaFileInfoByFileID($mmFileID);
		$this->af->setApp('mediaInfo', $mediaInfo);
    }
}


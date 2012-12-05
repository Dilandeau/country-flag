<?php
/**
 * Name: Flag_Icon
 * Author: Davy Ague 
 * Location: https://github.com/Dilandeau/
 * Created: December 2012
 * Description: Get country flag img tag or png file.
 * Requirements: php 5.0+.
 */
class Country_Flag{
	
	private $effect;
	private $source;
								
	const PERNEO = 'http://www.flag-icon.com/EN/FLH/0/perneo/perneo.htm';
	const TVHERTZ = 'http://www.flag-icon.com/EN/FLH/0/tvhertz/tvhertz.htm';
	const GLOSS = 'http://www.flag-icon.com/EN/FLH/0/gloss/gloss.htm';
	const XIGHTY = 'http://www.flag-icon.com/EN/FLH/0/xighty/xighty.htm';
	const CRU = 'http://www.flag-icon.com/EN/FLH/0/cru/cru.htm';
	const OLD_FLAG = 'http://www.flag-icon.com/EN/FLH/0/old-flag/old-flag.htm';
	const WINDING = 'http://www.flag-icon.com/EN/FLH/0/winding/winding.htm';
	const SOFTCLEAN = 'http://www.flag-icon.com/EN/FLH/0/softclean/softclean.htm';
	const SOFT3D = 'http://www.flag-icon.com/EN/FLH/0/soft3d/soft3d.htm';	
	const SEPIA = 'http://www.flag-icon.com/EN/FLH/0/sepia/sepia.htm';
	const PLOT = 'http://www.flag-icon.com/EN/FLH/0/plot/plot.htm';
	const OLDCOLOR = 'http://www.flag-icon.com/EN/FLH/0/oldcolor/oldcolor.htm';
	const MOSAIQUE = 'http://www.flag-icon.com/EN/FLH/0/mosaique/mosaique.htm';
	const LOVE = 'http://www.flag-icon.com/EN/FLH/0/love/love.htm';
	const ISO_3162 = 'http://www.flag-icon.com/EN/FLH/0/iso-3162/iso-3162.htm';
	const HOLE = 'http://www.flag-icon.com/EN/FLH/0/hole/hole.htm';
	const GRAY = 'http://www.flag-icon.com/EN/FLH/0/gray/gray.htm';
	const FRAMURE = 'http://www.flag-icon.com/EN/FLH/0/framure/framure.htm';	
	const FRAME_A = 'http://www.flag-icon.com/EN/FLH/0/frame-a/frame-a.htm';
	const FLOUT = 'http://www.flag-icon.com/EN/FLH/0/flout/flout.htm';
	const FIXED_FLAG = 'http://www.flag-icon.com/EN/FLH/0/fixed-flag/fixed-flag.htm';
	const CARTOON = 'http://www.flag-icon.com/EN/FLH/0/cartoon/cartoon.htm';
	const BRUSH = 'http://www.flag-icon.com/EN/FLH/0/brush/brush.htm';
	const BLOCNOTE = 'http://www.flag-icon.com/EN/FLH/0/blocnote/blocnote.htm';
	const AROUND = 'http://www.flag-icon.com/EN/FLH/0/around/around.htm';
	const WAVE = 'http://www.flag-icon.com/EN/FLH/0/wave/wave.htm';
	const SATIN_B = 'http://www.flag-icon.com/EN/FLH/0/satin_b/satin_b.htm';	
	const SATIN_A = 'http://www.flag-icon.com/EN/FLH/0/satin_a/satin_a.htm';
	const ROND = 'http://www.flag-icon.com/EN/FLH/0/rond/rond.htm';
	const FRAME_SHADE = 'http://www.flag-icon.com/EN/FLH/0/frame-shade/frame-shade.htm';
	const _DEFAULT = 'http://www.flag-icon.com/EN/FLH/0/default/default.htm';
	const BUBULLE = 'http://www.flag-icon.com/EN/FLH/0/bubulle/bubulle.htm';
	
	public function __construct($effect = "_DEFAULT"){		
		if(defined("self::" . $effect)){
            $this->effect = constant("self::" . $effect);
			$this->source = @file_get_contents($this->effect);
        }else{
            trigger_error("Constant '$effect' not found.", E_USER_ERROR);
        }		
	}
	
	public function searchTag($code, $target){
		$regexp = '<img\s[^>]*src="([^"]*' . $code . '[^"]*)"(.*)\/>';
		$result = null;
		if(preg_match_all("/$regexp/siU", $this->source, $matches)){
			if($target == 1){
				$result = $matches[0][0];
			}else{
				$result = $matches[1][0];
			}
			return utf8_decode($result);
		}	
		return $result;
	}	
	
	public function getImg($code){
		return $this->searchTag($code, 1);
	}
	
	public function getPng($code){
		return $this->searchTag($code, 2);
	}
}
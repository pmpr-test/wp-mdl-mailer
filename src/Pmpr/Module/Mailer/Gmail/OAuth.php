<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c836d033             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, "\150\x74\164\160\x73\x3a\57\x2f\155\141\x69\154\56\147\x6f\x6f\x67\x6c\145\x2e\x63\x6f\155\x2f"); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\x6c\145\x72\x3a\x20\x4f\146\146\154\151\156\x65\x20\x74\x6f\153\145\156\x20\147\x65\156\145\162\x61\164\145\x64\72\x20{$sswycsgkqaiomeem}"); return base64_encode("\165\163\145\162\75{$this->oauthUserEmail}\1\141\165\x74\150\75\102\x65\141\162\145\x72\40{$sswycsgkqaiomeem}\x1\x1"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }

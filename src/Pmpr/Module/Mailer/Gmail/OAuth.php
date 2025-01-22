<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679152faeab44             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, "\x68\x74\164\x70\x73\x3a\57\57\155\141\x69\154\x2e\x67\157\157\147\x6c\x65\x2e\x63\x6f\x6d\x2f"); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\141\151\x6c\x65\162\x3a\40\117\x66\x66\154\151\x6e\x65\x20\164\157\153\x65\156\x20\147\x65\x6e\145\162\x61\x74\x65\144\x3a\x20{$sswycsgkqaiomeem}"); return base64_encode("\x75\163\145\x72\75{$this->oauthUserEmail}\1\141\x75\164\150\x3d\x42\145\141\x72\x65\x72\x20{$sswycsgkqaiomeem}\x1\x1"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }

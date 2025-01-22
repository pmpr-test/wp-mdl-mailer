<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679153597f38b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, "\150\x74\x74\x70\163\72\57\57\155\141\151\x6c\56\x67\157\x6f\x67\x6c\145\56\x63\x6f\x6d\x2f"); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\x6c\145\x72\x3a\x20\x4f\x66\x66\x6c\x69\156\x65\x20\x74\x6f\153\x65\156\x20\147\x65\156\145\162\x61\x74\145\144\72\40{$sswycsgkqaiomeem}"); return base64_encode("\165\163\x65\x72\75{$this->oauthUserEmail}\1\141\165\164\150\75\102\145\141\162\145\162\x20{$sswycsgkqaiomeem}\1\x1"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }

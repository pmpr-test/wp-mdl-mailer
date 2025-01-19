<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d3fdd5d2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, "\150\164\x74\x70\163\72\57\x2f\155\x61\151\x6c\x2e\x67\x6f\x6f\x67\154\x65\56\143\157\155\x2f"); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\151\154\145\x72\72\40\117\x66\146\x6c\151\x6e\x65\40\164\157\x6b\x65\156\40\x67\x65\x6e\x65\162\141\164\145\x64\72\x20{$sswycsgkqaiomeem}"); return base64_encode("\x75\163\x65\x72\75{$this->oauthUserEmail}\x1\x61\165\x74\x68\75\102\145\141\162\x65\162\40{$sswycsgkqaiomeem}\1\x1"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }

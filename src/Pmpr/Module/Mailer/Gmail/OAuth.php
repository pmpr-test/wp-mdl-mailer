<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46cab54de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Container; use WP_Error; class OAuth extends Container { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (empty($this->client)) { $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes("\150\x74\164\x70\x73\x3a\x2f\x2f\x6d\141\x69\x6c\56\147\157\x6f\147\154\145\x2e\x63\x6f\155\x2f"); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = Setting::symcgieuakksimmu()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\157\146\x66\154\x69\156\x65"); } return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (is_wp_error($eeaukqkuswaqwayu)) { $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\x6c\145\162\x3a\x20\x43\141\156\40\x6e\157\x74\x20\141\165\x74\x68\x65\156\164\x69\x63\141\x74\x65\54\40\154\145\164\163\40\x67\157\40\x74\x6f\x20\x61\x75\164\150\x6f\x72\x69\172\145", [$coewqcmgkkmawigm]); return [Setting::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; } return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu)) { if (isset($eeaukqkuswaqwayu["\x65\162\x72\157\162"]) || isset($eeaukqkuswaqwayu["\145\162\162\x6f\x72\x5f\x64\x65\x73\x63\162\151\160\164\x69\157\x6e"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\x69\154\x65\x72\x3a\x20\105\162\162\157\162\x20\157\156\x20\x66\145\164\143\x68\40\x61\143\x63\145\163\x73\40\x74\157\153\145\x6e", $eeaukqkuswaqwayu); echo "\74\144\x69\x76\40\x69\144\75\42\x6d\x65\x73\163\x61\147\x65\42\x20\x63\154\x61\x73\163\x3d\42\145\x72\162\157\x72\x22\x3e\74\160\76\x3c\x73\x74\x72\157\x6e\x67\76"; esc_html_e("\105\x72\162\157\x72\x3a\40" . $eeaukqkuswaqwayu["\145\162\x72\157\162"] . "\54\40\x45\162\162\157\162\40\x44\145\x73\143\x72\x69\160\x74\x69\157\156\x3a\40" . $eeaukqkuswaqwayu["\145\x72\162\x6f\162\x5f\x64\145\163\143\162\151\x70\164\151\x6f\x6e"], PR__MDL__MAILER); echo "\74\x2f\163\x74\162\x6f\x6e\x67\76\74\x2f\x70\76\x3c\57\x64\x69\166\76"; return false; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; } return false; } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\154\x65\162\72\40\x4f\146\146\x6c\x69\x6e\x65\40\164\x6f\153\x65\156\x20\x67\x65\x6e\x65\x72\141\164\145\x64\72\40{$sswycsgkqaiomeem}"); return base64_encode("\x75\163\145\162\x3d{$this->oauthUserEmail}\1\141\x75\164\x68\x3d\102\145\x61\x72\145\162\x20{$sswycsgkqaiomeem}\x1\x1"); } return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\150\164\x74\x70\163\x3a\57\57\x61\143\143\157\x75\x6e\x74\163\x2e\147\157\x6f\147\x6c\145\x2e\x63\x6f\155\x2f\x6f\57\157\141\165\x74\150\x32\57\164\x6f\x6b\x65\x6e", [Constants::cikssaguawsukusm => ["\x67\x72\141\156\x74\137\x74\171\160\145" => Setting::siumwmyaoyeyggeo, "\x63\154\151\x65\156\164\137\x69\144" => $this->oauthClientId, "\x63\x6c\151\145\x6e\164\137\163\x65\143\162\x65\x74" => $this->oauthClientSecret, Constants::siumwmyaoyeyggeo => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\x69\x6c\145\162\72\40\x4f\x66\x66\154\151\x6e\145\40\164\x6f\153\145\x6e\x20\x72\x65\163\165\154\x74\x2e", $sogksuscggsicmac); return $sogksuscggsicmac["\141\x63\x63\x65\163\163\x5f\x74\157\153\145\156"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->weysguygiseoukqw(Setting::iwyoukakoookgaee); if (empty($eeaukqkuswaqwayu)) { return new WP_Error(); } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if ($qcakkkwickkwyuck->isAccessTokenExpired()) { $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\154\145\x72\72\x20\116\x65\x77\x20\101\x63\x63\x65\x73\x73\x20\x54\157\153\x65\x6e\40\146\145\164\143\x68\x65\x64\40\141\x6e\144\40\163\141\166\x65\144\56", $eeaukqkuswaqwayu); } return $eeaukqkuswaqwayu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b72a3a7fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Container; use WP_Error; class OAuth extends Container { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (empty($this->client)) { $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes("\x68\164\x74\x70\163\x3a\x2f\57\x6d\x61\151\154\x2e\x67\x6f\x6f\x67\154\x65\x2e\143\157\155\57"); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = Setting::symcgieuakksimmu()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\x6f\146\x66\154\x69\156\x65"); } return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (is_wp_error($eeaukqkuswaqwayu)) { $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\x6c\145\x72\72\x20\103\x61\156\40\x6e\157\x74\x20\x61\165\164\150\x65\x6e\x74\151\143\x61\x74\x65\x2c\x20\x6c\x65\164\163\x20\x67\x6f\x20\164\157\x20\141\165\x74\x68\x6f\162\151\x7a\x65", [$coewqcmgkkmawigm]); return [Setting::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; } return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu)) { if (isset($eeaukqkuswaqwayu["\x65\x72\x72\157\162"]) || isset($eeaukqkuswaqwayu["\145\162\x72\157\162\137\x64\145\x73\x63\x72\x69\160\x74\x69\157\x6e"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\151\154\x65\x72\72\x20\105\162\x72\157\x72\40\157\x6e\40\146\145\x74\x63\x68\40\x61\143\143\145\x73\163\x20\164\x6f\x6b\x65\x6e", $eeaukqkuswaqwayu); echo "\x3c\x64\151\166\x20\151\144\x3d\42\155\x65\x73\163\x61\147\145\x22\x20\x63\x6c\141\x73\163\x3d\42\145\162\x72\157\x72\x22\76\74\160\x3e\74\x73\164\162\x6f\156\x67\76"; esc_html_e("\x45\162\x72\157\162\72\x20" . $eeaukqkuswaqwayu["\145\162\x72\157\162"] . "\x2c\40\x45\x72\162\157\162\40\104\x65\x73\x63\162\x69\x70\164\151\157\156\x3a\x20" . $eeaukqkuswaqwayu["\145\162\x72\157\x72\x5f\x64\x65\163\143\x72\151\x70\164\x69\x6f\x6e"], PR__MDL__MAILER); echo "\x3c\57\163\164\x72\x6f\x6e\x67\x3e\x3c\57\x70\76\74\x2f\x64\x69\166\76"; return false; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; } return false; } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\151\154\145\162\72\40\117\146\146\154\151\x6e\x65\40\164\x6f\x6b\x65\x6e\40\147\145\x6e\x65\162\141\x74\145\x64\x3a\40{$sswycsgkqaiomeem}"); return base64_encode("\165\163\x65\x72\75{$this->oauthUserEmail}\x1\141\x75\164\150\75\102\145\x61\162\x65\162\x20{$sswycsgkqaiomeem}\1\1"); } return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\x68\x74\164\160\163\72\57\57\x61\x63\143\x6f\x75\156\x74\x73\56\x67\x6f\157\147\154\x65\56\x63\157\155\x2f\157\57\x6f\x61\165\164\x68\62\x2f\x74\157\x6b\x65\x6e", [Constants::cikssaguawsukusm => ["\x67\x72\141\156\164\137\164\171\x70\145" => Setting::siumwmyaoyeyggeo, "\x63\x6c\151\x65\x6e\x74\x5f\151\x64" => $this->oauthClientId, "\143\154\151\145\x6e\x74\x5f\x73\145\143\162\x65\x74" => $this->oauthClientSecret, Constants::siumwmyaoyeyggeo => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\x6c\x65\162\x3a\40\117\x66\146\x6c\151\x6e\145\40\164\x6f\x6b\x65\x6e\40\162\x65\x73\165\x6c\x74\56", $sogksuscggsicmac); return $sogksuscggsicmac["\x61\143\x63\145\x73\163\137\x74\157\x6b\145\156"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->weysguygiseoukqw(Setting::iwyoukakoookgaee); if (empty($eeaukqkuswaqwayu)) { return new WP_Error(); } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if ($qcakkkwickkwyuck->isAccessTokenExpired()) { $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\x69\x6c\145\x72\72\40\116\x65\167\40\x41\x63\x63\x65\163\163\x20\124\157\153\145\x6e\x20\146\145\x74\x63\150\145\x64\40\141\156\144\x20\x73\x61\x76\145\x64\x2e", $eeaukqkuswaqwayu); } return $eeaukqkuswaqwayu; } }

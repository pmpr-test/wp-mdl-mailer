<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b17ddb59             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Container; use WP_Error; class OAuth extends Container { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (empty($this->client)) { $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes("\x68\164\164\160\x73\x3a\x2f\x2f\155\x61\x69\154\56\147\157\157\147\154\145\x2e\x63\x6f\155\57"); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = Setting::symcgieuakksimmu()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\x6f\x66\146\x6c\x69\156\145"); } return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (is_wp_error($eeaukqkuswaqwayu)) { $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\x6c\x65\162\x3a\40\x43\141\x6e\40\x6e\157\164\x20\141\165\164\150\145\x6e\x74\151\143\x61\164\x65\x2c\x20\x6c\145\164\x73\x20\147\x6f\x20\164\x6f\40\141\x75\x74\x68\157\x72\151\172\145", [$coewqcmgkkmawigm]); return [Setting::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; } return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu)) { if (isset($eeaukqkuswaqwayu["\145\162\162\157\x72"]) || isset($eeaukqkuswaqwayu["\145\x72\162\x6f\162\x5f\144\145\x73\x63\x72\151\160\x74\151\157\x6e"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\151\x6c\x65\x72\x3a\40\x45\x72\x72\x6f\162\x20\x6f\156\x20\146\x65\x74\143\150\x20\x61\x63\143\x65\163\x73\x20\x74\157\153\145\156", $eeaukqkuswaqwayu); echo "\74\x64\151\x76\x20\x69\x64\75\42\155\x65\163\163\141\147\x65\42\40\x63\x6c\x61\163\163\x3d\42\x65\x72\x72\x6f\162\42\76\74\160\x3e\x3c\x73\x74\162\x6f\156\147\76"; esc_html_e("\105\162\x72\157\162\72\x20" . $eeaukqkuswaqwayu["\145\162\162\157\162"] . "\54\40\x45\x72\x72\157\162\40\104\145\163\x63\162\151\x70\164\x69\x6f\156\72\40" . $eeaukqkuswaqwayu["\x65\x72\162\157\162\x5f\144\x65\163\143\162\151\160\164\x69\157\x6e"], PR__MDL__MAILER); echo "\74\57\x73\x74\x72\x6f\156\x67\x3e\x3c\x2f\x70\76\x3c\57\x64\151\x76\x3e"; return false; } $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; } return false; } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\154\145\x72\x3a\x20\x4f\146\x66\x6c\151\x6e\145\x20\164\x6f\x6b\x65\x6e\x20\147\x65\x6e\x65\x72\141\164\145\x64\72\40{$sswycsgkqaiomeem}"); return base64_encode("\165\x73\145\x72\75{$this->oauthUserEmail}\1\141\165\164\x68\x3d\x42\145\x61\162\x65\162\40{$sswycsgkqaiomeem}\x1\x1"); } return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\x68\164\164\x70\x73\72\x2f\57\141\143\143\157\x75\x6e\x74\x73\x2e\x67\x6f\157\x67\154\145\x2e\143\157\x6d\57\x6f\x2f\x6f\141\x75\x74\150\62\x2f\164\157\x6b\145\156", [Constants::cikssaguawsukusm => ["\147\x72\141\x6e\x74\x5f\x74\171\x70\x65" => Setting::siumwmyaoyeyggeo, "\143\154\x69\145\x6e\164\137\151\144" => $this->oauthClientId, "\x63\x6c\x69\x65\156\x74\137\x73\x65\143\x72\145\x74" => $this->oauthClientSecret, Constants::siumwmyaoyeyggeo => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\141\x69\x6c\x65\162\72\40\117\146\146\x6c\151\x6e\145\40\164\157\153\145\156\40\x72\x65\x73\165\x6c\x74\x2e", $sogksuscggsicmac); return $sogksuscggsicmac["\x61\x63\x63\145\163\163\x5f\x74\x6f\x6b\145\156"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->weysguygiseoukqw(Setting::iwyoukakoookgaee); if (empty($eeaukqkuswaqwayu)) { return new WP_Error(); } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if ($qcakkkwickkwyuck->isAccessTokenExpired()) { $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\x69\154\145\x72\x3a\40\116\145\x77\x20\x41\x63\143\145\x73\x73\x20\x54\x6f\x6b\145\x6e\40\146\145\164\x63\x68\x65\144\x20\141\156\144\40\163\141\x76\145\144\56", $eeaukqkuswaqwayu); } return $eeaukqkuswaqwayu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e79fa2eb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Google\Service\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class OAuth extends Common { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (!empty($this->client)) { goto iomcaiwewsawiamu; } $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes("\x68\x74\x74\x70\163\x3a\x2f\57\155\x61\x69\154\56\x67\x6f\x6f\x67\154\145\56\x63\x6f\155\x2f"); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = Setting::symcgieuakksimmu()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\x6f\x66\x66\154\x69\156\145"); iomcaiwewsawiamu: return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (!is_wp_error($eeaukqkuswaqwayu)) { goto sqiciiuwmykocycc; } $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\151\154\x65\162\x3a\40\103\141\x6e\40\156\x6f\x74\40\x61\x75\x74\x68\x65\x6e\x74\151\143\141\x74\x65\54\x20\x6c\x65\x74\163\x20\x67\157\40\x74\x6f\x20\141\x75\x74\x68\157\162\x69\172\x65", [$coewqcmgkkmawigm]); return [self::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; sqiciiuwmykocycc: return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!(!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu))) { goto uukumskkeggaowck; } if (!(isset($eeaukqkuswaqwayu["\145\162\162\x6f\162"]) || isset($eeaukqkuswaqwayu["\x65\162\162\x6f\162\x5f\144\145\163\x63\x72\151\x70\x74\151\157\156"]))) { goto eequksumcoogyoem; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\x69\x6c\145\x72\x3a\x20\105\x72\x72\157\162\40\x6f\x6e\x20\x66\145\x74\x63\150\40\141\143\143\145\163\163\x20\164\x6f\153\145\156", $eeaukqkuswaqwayu); echo "\x3c\x64\x69\x76\x20\x69\x64\x3d\42\x6d\145\x73\x73\141\147\145\x22\40\x63\x6c\x61\163\x73\75\42\145\x72\162\x6f\x72\x22\x3e\74\x70\x3e\x3c\163\x74\162\x6f\x6e\x67\76"; esc_html_e("\x45\162\162\x6f\x72\x3a\40" . $eeaukqkuswaqwayu["\145\162\x72\x6f\162"] . "\54\x20\105\x72\x72\157\162\40\x44\145\x73\143\x72\x69\160\x74\x69\x6f\x6e\x3a\40" . $eeaukqkuswaqwayu["\x65\x72\162\157\x72\x5f\144\x65\x73\x63\x72\151\160\x74\151\157\156"], PR__MDL__MAILER); echo "\74\x2f\163\164\162\x6f\x6e\147\x3e\x3c\x2f\x70\x3e\74\57\x64\151\166\x3e"; return false; eequksumcoogyoem: $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; uukumskkeggaowck: return false; } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (!is_wp_error($sogksuscggsicmac)) { goto cggowoquuiwqkyew; } return false; cggowoquuiwqkyew: if (!($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu())) { goto ocokwuuquaokmasc; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\151\x6c\145\162\x3a\x20\117\146\x66\154\x69\x6e\145\x20\164\x6f\x6b\x65\156\x20\x67\145\156\145\162\x61\164\x65\144\72\x20{$sswycsgkqaiomeem}"); return base64_encode("\165\163\145\x72\75{$this->oauthUserEmail}\x1\x61\165\x74\150\75\x42\145\141\162\x65\162\40{$sswycsgkqaiomeem}\x1\1"); ocokwuuquaokmasc: return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\150\x74\x74\160\163\x3a\x2f\57\x61\143\143\x6f\x75\x6e\164\163\56\147\x6f\x6f\x67\154\x65\x2e\x63\157\x6d\57\157\x2f\x6f\x61\165\x74\x68\62\57\164\157\153\x65\156", [Constants::cikssaguawsukusm => ["\147\x72\141\156\164\137\164\171\160\145" => Setting::siumwmyaoyeyggeo, "\143\154\x69\x65\x6e\164\x5f\151\144" => $this->oauthClientId, "\143\x6c\x69\145\x6e\164\x5f\x73\145\x63\162\145\164" => $this->oauthClientSecret, Constants::siumwmyaoyeyggeo => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\x6c\145\x72\x3a\x20\117\146\146\x6c\x69\x6e\x65\40\164\x6f\x6b\x65\x6e\40\x72\145\163\x75\154\x74\x2e", $sogksuscggsicmac); return $sogksuscggsicmac["\141\143\x63\x65\x73\x73\x5f\x74\x6f\153\x65\x6e"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->kmuweyayaqoeqiyw()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee); if (!empty($eeaukqkuswaqwayu)) { goto yiwiqaqmwiogawym; } return new WP_Error(); yiwiqaqmwiogawym: $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if (!$qcakkkwickkwyuck->isAccessTokenExpired()) { goto goacqqsgaaigyuaw; } $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\x69\x6c\145\x72\x3a\x20\x4e\x65\x77\40\101\x63\x63\145\163\163\40\124\157\x6b\x65\x6e\40\x66\145\164\x63\150\145\x64\40\x61\156\144\x20\163\141\166\x65\x64\56", $eeaukqkuswaqwayu); goacqqsgaaigyuaw: return $eeaukqkuswaqwayu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b72a3a7fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Gmail\OAuth; use Pmpr\Module\Mailer\Setting\Setting; use Pmpr\Module\Mailer\Gmail\Setting as GmailSetting; class Mailer extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\115\141\x69\x6c\x65\162", PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\137\151\156\151\x74", [$this, "\171\145\171\151\x67\165\x79\145\147\155\155\x79\x75\163\145\x61"])->qcsmikeggeemccuu("\160\162\x65\137\x77\160\137\x6d\141\151\154", [$this, "\145\143\x73\x6b\153\x73\153\x71\151\151\x71\143\157\145\x69\151"]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function init() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (in_array($aiamqeawckcsuaou, [GmailSetting::yckkaiueuoiicisc, GmailSetting::oiugqmossekuqeia], true) && GmailSetting::symcgieuakksimmu()->euuuueemkqgqkqae()) { switch ($aiamqeawckcsuaou) { case GmailSetting::yckkaiueuoiicisc: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); if ($ymacoouqwcqwwagu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::vswoiouoaykswgym, '', true)) { $eeaukqkuswaqwayu = $aswseewakkcwywqa->ceeskwyicggwsows($ymacoouqwcqwwagu); if (!empty($eeaukqkuswaqwayu)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\101\143\143\x65\163\163\40\x67\x72\141\156\x74\145\144\x20\163\165\x63\x63\x65\x73\163\146\165\154\x6c\x79\41", PR__MDL__MAILER), "\x6d\x61\151\154\145\162\137\x67\x72\141\x6e\x74", Constants::ckcawaoawwioqecq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\x41\143\143\x65\163\163\40\143\x6f\x75\x6c\x64\x20\156\157\x74\x20\x62\x65\40\147\162\141\x6e\x74\x65\144\x21", PR__MDL__MAILER), "\x6d\x61\x69\154\145\162\x5f\147\x72\x61\x6e\164"); } } break; default: case GmailSetting::oiugqmossekuqeia: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); $sogksuscggsicmac = $aswseewakkcwywqa->usmqosmqgoscmckk(); if (isset($sogksuscggsicmac[GmailSetting::ewmyoqeiikakqqmk])) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom(esc_url_raw($sogksuscggsicmac[GmailSetting::ewmyoqeiikakqqmk])); } break; } } } public function yeyiguyegmmyusea() { if (0) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\123\x65\x74\x74\x69\156\x67", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x53\x4d\124\x50\40\115\x61\151\154\145\x72\x20\x63\x61\156\x6e\x6f\x74\x20\163\145\x6e\144\40\145\x6d\141\x69\154\x20\x75\156\164\x69\154\40\171\157\165\40\145\x6e\164\145\x72\40\171\x6f\x75\162\x20\143\x72\x65\x64\145\x6e\164\x69\141\x6c\x73\40\151\156\40\x74\x68\x65\40\x25\x73\56", PR__MDL__MAILER), $iwywmkygwewiamwm), "\x66\x69\x6c\154\55\155\141\x69\x6c\145\162\x2d\x63\162\145\144\145\156\164\151\141\x6c\x73", Constants::imkacwmiuiykyuim); } } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (Setting::kcommsmecygyoscc === $goqqimcssiyagkwy) { Generic::symcgieuakksimmu(); } if (Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy) { Gmail::symcgieuakksimmu()->yaosckuqsmaeqgka(); } } }

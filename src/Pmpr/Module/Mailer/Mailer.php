<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d3fdd5d2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Setting\Setting; use Pmpr\Module\Mailer\Gmail\Setting as GmailSetting; class Mailer extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4d\141\x69\154\x65\162", PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x72\x65\137\x77\160\137\x6d\x61\x69\154", [$this, "\145\143\x73\153\153\x73\x6b\x71\151\151\161\143\157\145\x69\151"]); } public function mameiwsayuyquoeq() { GmailSetting::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (Setting::kcommsmecygyoscc === $goqqimcssiyagkwy) { Generic::symcgieuakksimmu(); } if (Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy) { Gmail::symcgieuakksimmu()->yaosckuqsmaeqgka(); } } }

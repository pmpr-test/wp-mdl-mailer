<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679153597f38b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Setting\Setting; use Pmpr\Module\Mailer\Gmail\Setting as GmailSetting; class Mailer extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\115\141\151\x6c\x65\x72", PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\x72\145\x5f\x77\160\x5f\x6d\x61\x69\154", [$this, "\145\x63\x73\x6b\x6b\x73\x6b\x71\x69\151\x71\143\x6f\145\x69\151"]); } public function mameiwsayuyquoeq() { GmailSetting::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (Setting::kcommsmecygyoscc === $goqqimcssiyagkwy) { Generic::symcgieuakksimmu(); } if (Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy) { Gmail::symcgieuakksimmu()->yaosckuqsmaeqgka(); } } }

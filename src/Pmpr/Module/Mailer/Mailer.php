<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517696a71a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Setting\Setting; class Mailer extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\115\x61\151\154\145\x72", PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\137\151\156\151\x74", [$this, "\x79\145\171\x69\147\x75\x79\x65\x67\155\x6d\171\165\x73\x65\x61"])->qcsmikeggeemccuu("\160\x72\145\x5f\x77\x70\137\x6d\141\x69\154", [$this, "\145\x63\x73\x6b\x6b\163\153\161\151\x69\x71\x63\x6f\x65\151\x69"]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { goto eqkauqciwewmgeoi; } Ajax::symcgieuakksimmu(); eqkauqciwewmgeoi: } public function yeyiguyegmmyusea() { if (!0) { goto kwagwqyusyiyoaqs; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\123\145\x74\164\151\x6e\147", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\123\115\124\120\x20\x4d\x61\x69\x6c\145\x72\x20\x63\x61\x6e\156\x6f\x74\40\x73\145\156\x64\x20\145\x6d\x61\151\154\x20\x75\156\164\151\154\x20\171\x6f\x75\x20\145\156\x74\x65\x72\40\x79\157\x75\162\40\x63\x72\x65\x64\145\156\164\x69\x61\x6c\x73\x20\151\156\40\164\150\x65\x20\x25\x73\x2e", PR__MDL__MAILER), $iwywmkygwewiamwm), "\x66\x69\154\x6c\55\155\x61\x69\x6c\145\162\x2d\143\x72\145\x64\145\156\164\151\141\154\x73", Constants::imkacwmiuiykyuim); kwagwqyusyiyoaqs: } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (!(Setting::kcommsmecygyoscc === $goqqimcssiyagkwy)) { goto yowsmsiyimmimemc; } Generic::symcgieuakksimmu(); yowsmsiyimmimemc: if (!(Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy)) { goto kiqogmwcgcamwiig; } Gmail::symcgieuakksimmu(); kiqogmwcgcamwiig: } }

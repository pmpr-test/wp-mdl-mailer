<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68010625a6418             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Generic; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Mailer\Setting\SettingSegment; class Setting extends SettingSegment { const smugkacygwoiewiu = 'generic_smtp_'; const qqkokmwimomggggu = 'smtp.gmail.com'; const mwigcmkwgwygwssu = self::smugkacygwoiewiu . 'auth'; const gwiykwuygaugqcyu = self::smugkacygwoiewiu . Constants::ckiaowgkqoewoseo; const geykwwgimueicgig = self::smugkacygwoiewiu . Constants::csiaccacwgeeqwwo; const yyecgkgguoiwyqos = self::smugkacygwoiewiu . Constants::akywgoyaseymiyka; public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('generic_smtp')->gswweykyogmsyawy(__('Generic SMTP', PR__MDL__MAILER))->saemoowcasogykak(IconInterface::aeqgiwkamsciomue)->gucwmccyimoagwcm(__('Generic SMTP Configuration', PR__MDL__MAILER))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('credential')->saemoowcasogykak(IconInterface::cokkqwmiaowmqcqs)->gswweykyogmsyawy(__('Credential', PR__MDL__MAILER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::gwiykwuygaugqcyu)->gswweykyogmsyawy(__('SMTP Host', PR__MDL__MAILER))->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eyygsasuqmommkua(self::qqkokmwimomggggu)->gucwmccyimoagwcm(sprintf(__('The SMTP server which will be used to send email. For example: %s', PR__MDL__MAILER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis('smtp.gmail.com'))))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::mwigcmkwgwygwssu)->gswweykyogmsyawy(__('Enable Authentication', PR__MDL__MAILER))->ecyiaeoqyuyuoyya([self::geykwwgimueicgig, self::yyecgkgguoiwyqos])->gucwmccyimoagwcm(__('Whether to use SMTP Authentication when sending an email', PR__MDL__MAILER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::geykwwgimueicgig)->gswweykyogmsyawy(__('Username', PR__MDL__MAILER))->mkiaygiogeeyogqm())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::yyecgkgguoiwyqos)->gswweykyogmsyawy(__('Password', PR__MDL__MAILER))->sqsumkuougquscyg()))); } }

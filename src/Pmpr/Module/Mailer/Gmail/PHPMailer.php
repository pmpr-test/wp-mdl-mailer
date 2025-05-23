<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             682fc584b5674             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (empty($this->oauth)) { $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->caokeucsksukesyo()->mskuyeumceaigegs()->debug('Mailer: OAuth Initialized', $eeaukqkuswaqwayu); } return parent::smtpConnect($qiouiwasaauyaaue); } }

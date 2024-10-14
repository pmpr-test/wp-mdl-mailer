<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46cab54de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (empty($this->oauth)) { $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\154\x65\x72\x3a\x20\x4f\x41\x75\x74\150\x20\x49\x6e\151\164\151\141\x6c\151\172\145\x64", $eeaukqkuswaqwayu); } return parent::smtpConnect($qiouiwasaauyaaue); } }

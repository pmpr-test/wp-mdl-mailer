<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679152faeab44             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\Exception; use PHPMailer\PHPMailer\PHPMailer as BaseClass; class PHPMailer extends BaseClass { public function smtpConnect($qiouiwasaauyaaue = null) { if (empty($this->oauth)) { $eeaukqkuswaqwayu = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee, []); $this->oauth = OAuth::symcgieuakksimmu($eeaukqkuswaqwayu[Setting::siumwmyaoyeyggeo] ?? ''); $this->oauth->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\x61\151\154\x65\x72\72\40\117\101\165\x74\x68\40\111\x6e\151\x74\x69\141\x6c\151\172\x65\x64", $eeaukqkuswaqwayu); } return parent::smtpConnect($qiouiwasaauyaaue); } }

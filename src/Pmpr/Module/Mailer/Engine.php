<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46cab54de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\150\160\x6d\141\151\x6c\145\x72\x5f\151\x6e\x69\164", [$this, "\145\165\147\x77\163\153\167\x63\161\165\x75\171\x79\x61\171\x69"])->qcsmikeggeemccuu("\167\x70\x5f\x6d\x61\151\154\137\146\141\x69\x6c\x65\144", [$this, "\153\161\163\157\x67\x71\x61\141\141\151\x71\147\x69\x63\165\155"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if ($ockoeumsksqeoiyo instanceof PHPMailer) { try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (Constants::NONE !== $eckgoogkykaiwqyi) { $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; } $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = Constants::gsqoooskigukokks; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku)) { $ockoeumsksqeoiyo->SMTPDebug = 4; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function kqsogqaaaiqgicum($iswcokucwmiosiaq) { if ($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\x77\160\137\155\141\151\x6c\137\x66\x61\151\154\x65\x64"]) && is_array($iswcokucwmiosiaq->errors["\x77\x70\x5f\x6d\x61\x69\x6c\137\x66\x61\x69\154\x65\144"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->eumukgqciqgksuiq(implode("\x20\174\40", $this->caokeucsksukesyo()->euekiyuksecoccus()->ywgmqwueaugywcwi($iswcokucwmiosiaq)), $iswcokucwmiosiaq->get_all_error_data()); } } }

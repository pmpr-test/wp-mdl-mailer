<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670eefc51d647             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x68\x70\x6d\x61\151\154\145\162\137\x69\x6e\151\x74", [$this, "\145\165\x67\167\163\x6b\x77\143\161\x75\x75\171\x79\x61\x79\x69"])->qcsmikeggeemccuu("\167\160\x5f\155\x61\151\x6c\137\146\141\151\x6c\145\x64", [$this, "\171\141\x73\141\165\x6d\x61\155\x67\x6f\x77\157\x69\x77\141\167"])->qcsmikeggeemccuu("\167\160\x5f\155\141\x69\154\x5f\163\165\x63\143\x65\x65\144\145\144", [$this, "\x61\155\143\157\157\153\145\x77\141\161\165\151\147\x6f\x69\171"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if ($ockoeumsksqeoiyo instanceof PHPMailer) { try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (Constants::NONE !== $eckgoogkykaiwqyi) { $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; } $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = Constants::gsqoooskigukokks; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku)) { $ockoeumsksqeoiyo->SMTPDebug = 4; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function yasaumamgowoiwaw($iswcokucwmiosiaq) { if ($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\x70\x5f\155\141\x69\154\137\x66\141\151\154\145\144"]) && is_array($iswcokucwmiosiaq->errors["\167\x70\x5f\x6d\141\x69\154\x5f\x66\141\x69\154\x65\144"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->eumukgqciqgksuiq(implode("\x20\x7c\40", $this->caokeucsksukesyo()->euekiyuksecoccus()->ywgmqwueaugywcwi($iswcokucwmiosiaq)), $iswcokucwmiosiaq->get_all_error_data()); } } public function amcookewaquigoiy($icwicymcioeyeyek) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\141\151\x6c\x65\x72\72\40\x45\155\x61\151\x6c\40\163\x65\x6e\164\x20\x73\x75\143\143\145\x73\x73\x66\165\x6c\154\x79", $icwicymcioeyeyek); } }

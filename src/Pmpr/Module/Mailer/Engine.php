<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d3fdd5d2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Exception; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Setting\Setting; use WP_Error; abstract class Engine extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\150\x70\155\141\x69\x6c\145\x72\137\x69\156\x69\x74", [$this, "\x65\165\147\167\x73\153\x77\x63\x71\165\x75\x79\171\x61\171\151"])->qcsmikeggeemccuu("\167\x70\137\155\141\x69\x6c\137\x66\141\151\x6c\145\144", [$this, "\x79\141\163\141\x75\155\141\155\147\157\167\x6f\151\167\x61\x77"])->qcsmikeggeemccuu("\x77\160\137\x6d\141\151\154\137\x73\x75\x63\143\x65\145\x64\x65\x64", [$this, "\x61\155\x63\157\x6f\153\145\167\x61\161\165\151\147\157\x69\x79"]); } public function eugwskwcquuyyayi(&$ockoeumsksqeoiyo) { if ($ockoeumsksqeoiyo instanceof PHPMailer) { try { $ockoeumsksqeoiyo->isSMTP(); $ockoeumsksqeoiyo = $this->ossgymsyuaouywqg($ockoeumsksqeoiyo); $ockoeumsksqeoiyo->Port = $this->weysguygiseoukqw(Setting::emawkokeeikckeym, Setting::quwmeqcomsmuymgs); $eckgoogkykaiwqyi = $this->weysguygiseoukqw(Setting::ycwieuigecimyggq, Setting::cacqqcaqygqyouay); if (Constants::NONE !== $eckgoogkykaiwqyi) { $ockoeumsksqeoiyo->SMTPSecure = $eckgoogkykaiwqyi; } $ockoeumsksqeoiyo->From = $this->weysguygiseoukqw(Setting::acwacoiwicmigmom, $ockoeumsksqeoiyo->From); $ockoeumsksqeoiyo->FromName = $this->weysguygiseoukqw(Setting::aoaqugseeqkemumi, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->addReplyTo($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->setFrom($ockoeumsksqeoiyo->From, $ockoeumsksqeoiyo->FromName); $ockoeumsksqeoiyo->Timeout = 10; $ockoeumsksqeoiyo->SMTPAutoTLS = false; $ockoeumsksqeoiyo->Debugoutput = Constants::gsqoooskigukokks; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && Ajax::ykiigwasoeagkiuq === $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku)) { $ockoeumsksqeoiyo->SMTPDebug = 4; } } catch (Exception $wgaoewqkwgomoaai) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->iswcokucwmiosiaq($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($wgaoewqkwgomoaai)); } } return $ockoeumsksqeoiyo; } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { return $ockoeumsksqeoiyo; } public function yasaumamgowoiwaw($iswcokucwmiosiaq) { if ($iswcokucwmiosiaq instanceof WP_Error && $iswcokucwmiosiaq->errors && isset($iswcokucwmiosiaq->errors["\167\160\x5f\155\141\x69\154\137\146\141\x69\x6c\x65\x64"]) && is_array($iswcokucwmiosiaq->errors["\167\x70\x5f\155\141\x69\x6c\x5f\146\141\x69\x6c\x65\144"])) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->eumukgqciqgksuiq(implode("\x20\x7c\40", $this->caokeucsksukesyo()->euekiyuksecoccus()->ywgmqwueaugywcwi($iswcokucwmiosiaq)), $iswcokucwmiosiaq->get_all_error_data()); } } public function amcookewaquigoiy($icwicymcioeyeyek) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\x69\154\145\x72\72\x20\x45\155\141\151\154\40\163\x65\156\164\x20\x73\165\143\143\145\x73\x73\146\x75\x6c\x6c\x79", $icwicymcioeyeyek); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ef038ad8d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Engine; use Pmpr\Module\Mailer\Gmail\PHPMailer as CustomPHPMailer; class Gmail extends Engine { public function yaosckuqsmaeqgka() { $immqesyuiaiyauio = $GLOBALS["\x70\150\160\155\x61\x69\x6c\x65\162"] ?? null; if (!$immqesyuiaiyauio instanceof PHPMailer) { require_once ABSPATH . WPINC . "\x2f\120\110\x50\115\141\x69\154\x65\x72\57\x50\x48\x50\115\141\151\154\x65\162\56\160\150\160"; require_once ABSPATH . WPINC . "\x2f\x50\110\120\x4d\141\151\154\x65\162\57\x53\x4d\124\120\x2e\x70\x68\x70"; require_once ABSPATH . WPINC . "\x2f\120\110\120\x4d\x61\151\154\x65\x72\x2f\x45\x78\143\145\x70\164\x69\x6f\x6e\56\160\x68\160"; $immqesyuiaiyauio = new CustomPHPMailer(true); $immqesyuiaiyauio::$validator = function ($owaiikyuwwwmswgc) { return (bool) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc); }; $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\151\x6c\145\162\72\40\103\165\163\x74\157\x6d\x20\120\x48\x50\115\x61\151\154\x65\162\40\111\x6e\x69\x74\151\141\x6c\x69\x7a\x65\144\x2e"); $GLOBALS["\160\150\160\155\141\151\x6c\145\162"] = $immqesyuiaiyauio; } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\115\141\151\154\145\x72\x3a\x20\x50\110\120\115\141\151\x6c\x65\162\x20\x41\x6c\x72\x65\141\x64\171\40\x49\156\x69\x74\x69\x61\154\151\x7a\145\x64\x2e", ["\143\x6f\162\162\145\143\164" => $immqesyuiaiyauio instanceof CustomPHPMailer ? "\171\x65\x73" : "\156\157"]); } } public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { $ockoeumsksqeoiyo->Host = "\163\x6d\x74\x70\x2e\x67\155\141\151\x6c\x2e\143\157\155"; $ockoeumsksqeoiyo->SMTPAuth = true; $ockoeumsksqeoiyo->AuthType = "\130\117\101\125\124\110\62"; return parent::ossgymsyuaouywqg($ockoeumsksqeoiyo); } }

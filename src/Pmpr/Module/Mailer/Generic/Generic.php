<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b72a3a7fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Generic; use PHPMailer\PHPMailer\PHPMailer; use Pmpr\Module\Mailer\Engine; class Generic extends Engine { public function ossgymsyuaouywqg(PHPMailer $ockoeumsksqeoiyo) : PHPMailer { $ockoeumsksqeoiyo->Host = $this->weysguygiseoukqw(Setting::gwiykwuygaugqcyu, Setting::qqkokmwimomggggu); $ockoeumsksqeoiyo->SMTPAuth = (bool) $this->weysguygiseoukqw(Setting::mwigcmkwgwygwssu); if ($ockoeumsksqeoiyo->SMTPAuth) { $ockoeumsksqeoiyo->Username = $this->weysguygiseoukqw(Setting::geykwwgimueicgig); $ockoeumsksqeoiyo->Password = $this->weysguygiseoukqw(Setting::yyecgkgguoiwyqos); } return parent::ossgymsyuaouywqg($ockoeumsksqeoiyo); } }

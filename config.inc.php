<?php
/* Servers configuration */
$cfg['Servers'] = array();

/* Server: localhost [1] */
$i = 1;
$cfg['Servers'][$i]['host'] = 'localhost'; // Veritabanı sunucusu
$cfg['Servers'][$i]['port'] = ''; // Varsayılan port (3306 genellikle)
$cfg['Servers'][$i]['socket'] = ''; // Eğer socket kullanıyorsanız belirtin
$cfg['Servers'][$i]['connect_type'] = 'tcp'; // Bağlantı türü
$cfg['Servers'][$i]['extension'] = 'mysqli'; // Kullanılacak MySQL eklentisi
$cfg['Servers'][$i]['auth_type'] = 'config'; // Oturum açma türü (config ile sabit kullanıcı ve şifre)
$cfg['Servers'][$i]['user'] = 'root'; // Veritabanı kullanıcı adı
$cfg['Servers'][$i]['password'] = ''; // Veritabanı şifresi (root kullanıcısı için şifre boş olabilir)
$cfg['Servers'][$i]['AllowNoPassword'] = false; // Şifresiz girişe izin verme

/* phpMyAdmin configuration storage settings */
$cfg['Servers'][$i]['controlhost'] = '';
$cfg['Servers'][$i]['controlport'] = '';
$cfg['Servers'][$i]['controluser'] = '';
$cfg['Servers'][$i]['controlpass'] = '';

/* Authentication configuration */
$cfg['blowfish_secret'] = 'randomsecretkey'; // PhpMyAdmin için şifreleme anahtarı
$cfg['CookieUseOnly'] = true; // Çerez kullanımı
$cfg['MaxRows'] = 100; // Tablo satır limiti

/* phpMyAdmin logo */
$cfg['LogoImage'] = ''; // Logo resmini ayarlayabilirsiniz

/* Additional settings */
$cfg['PmaAbsoluteUri'] = ''; // phpMyAdmin'ı açmak için kullanılan URL

/* End of config */
?>

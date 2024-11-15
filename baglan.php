<?php
class Database {
    private $host = 'localhost';          // Veritabanı sunucusunun adresi
    private $dbName = 'u1992726_gocakademi';   // Veritabanı adı
    private $username = 'u1992726_tolga';  // Veritabanı kullanıcı adı
    private $password = "PF}Mi%4T6*;B";         // Veritabanı parolası
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            // DSN (Veritabanı bağlantı bilgileri)
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName . ";charset=utf8";
            
            // PDO Bağlantı Ayarları
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Hata Modu: İstisna atar
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Veri Çekme Modu: Dizi olarak döner
                PDO::ATTR_EMULATE_PREPARES   => false,                  // Gerçek hazırlanan ifadeler kullanılır
            ];
            
            // PDO ile Bağlantıyı Gerçekleştir
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
            echo "Veritabanına başarılı bir şekilde bağlanıldı.";
        } catch (PDOException $e) {
            // Bağlantı Hatası Mesajı
            echo 'Bağlantı hatası: ' . $e->getMessage();
        }
        
        return $this->conn;
    }
}

// Kullanım Örneği
$db = new Database();
$baglanti = $db->connect();

?>
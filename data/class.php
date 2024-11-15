<?php

// AdminClass adında bir sınıf oluşturuluyor. Bu sınıf, veritabanı bağlantısını yönetmek için kullanılır.
class AdminClass {
    // Veritabanı bağlantısı için PDO nesnesi tanımlanıyor, başlangıçta null olarak ayarlanıyor.
    protected $pdo = null;
    
    // Veritabanı sunucusunun adresi (çoğunlukla "localhost" olarak ayarlanır)
    protected $host = "localhost";
    
    // Veritabanının adı ("db_gocakademi" adında bir veritabanına bağlanılmak isteniyor)
    protected $dbname = "db_gocakademi";
    
    // Veritabanı bağlantısı için kullanıcı adı ("root" varsayılan kullanıcıdır)
    protected $username = "root";
    
    // Veritabanı bağlantısı için şifre (bu örnekte boş, yani varsayılan şifre kullanılıyor)
    protected $password = "";
    
    // Veritabanı karakter seti (veritabanı bağlantısında UTF-8 karakter seti kullanılıyor)
    protected $charset = "utf8";

    // Sınıfın yapıcı (constructor) metodu; bu sınıf her çağrıldığında otomatik olarak çalışır
    public function __construct() {
        try {
            // PDO nesnesi oluşturuluyor ve veritabanı bağlantısı sağlanıyor
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->username, $this->password);
            // Eğer bağlantı sağlanırsa herhangi bir hata oluşmaz ve bu adım geçilir
        
        } catch (PDOException $error) {
            // Eğer bağlantı sırasında bir hata oluşursa, hata mesajı görüntülenir ve işlem durdurulur
            die($error->getMessage());
        }
    }
}

?>


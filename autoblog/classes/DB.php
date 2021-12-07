<?php
namespace classes;
use PDO;
class DB
{
private $host, $username, $pass, $dbname, $port;
    private $connection;

    /**
     * DB constructor.
     * @param $host
     * @param $username
     * @param $pass
     * @param $dbname
     * @param $port
     * @param $connection
     */
    public function __construct($host, $username, $pass, $dbname, $port)
{
    $this->host = $host;
    $this->username = $username;
    $this->pass = $pass;
    $this->dbname = $dbname;
    $this->port = $port;

    try {
        $this->connection = new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $username, $pass);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

    public function getMenu()
    {
        $sql = "SELECT * FROM menu";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function getBlog()
    {
        $sql = "SELECT * FROM blog";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }


    public function getBlogId($id)
    {
        $sql = "SELECT * FROM blog WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $result = $stm->fetch(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public function getUserId($id)
    {
        $sql = "SELECT meno FROM users WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $result = $stm->fetchColumn();

        return $result;
    }

    public function updateBlogId($nazov, $popis, $blog_id)
    {
        $sql = "UPDATE blog SET nazov = :nazov, popis = :popis WHERE id = :blog_id";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(':nazov', $nazov);
        $stm->bindValue(':popis', $popis);
        $stm->bindValue(':blog_id', $blog_id);
        $result = $stm->execute();

        return $result;
    }

    public function deleteBlogId($blog_id)
    {
        $sql = "DELETE FROM blog WHERE id = :blog_id";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(':blog_id', $blog_id);
        $result = $stm->execute();

        return $result;
    }

    public function insertBlog($nazov, $popis, $obrazok, $user_id)
    {
        $sql = "INSERT INTO blog (nazov, popis, obrazok, user_id) 
                VALUES (:nazov, :popis, :obrazok, :user_id)";
        $stm = $this->connection->prepare($sql);
        $stm->bindValue(':nazov', $nazov);
        $stm->bindValue(':popis', $popis);
        $stm->bindValue(':obrazok', $obrazok);
        $stm->bindValue(':user_id', $user_id);
        $result = $stm->execute();

        return $result;
    }

    public function getLatestArticle()
    {
        $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 1";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetch(\PDO::FETCH_ASSOC);

        return $result;
    }
}
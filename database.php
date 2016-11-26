<?php
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER') ? null : define("DB_USER", "root");
defined('DB_PASS') ? null : define("DB_PASS", "");
defined('DB_NAME') ? null : define("DB_NAME", "isspc_web");

class MySQLDatabase{
    private $connection;
    private $last_query;
    private $real_escape_string_exists;
    private $magic_quotes_active;

    public function __construct()
    {
        $this->magic_quotes_active = get_magic_quotes_gpc();
        $this->real_escape_string_exists = function_exists("mysqli_real_escape_string");
        $this->open_connection();
    }

    public function open_connection(){
          $this->connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
          $this->connection ->set_charset("utf8");
        if (!$this->connection){
            die("Database connection failed: " . mysqli_error());
        }else{

        }
    }

    public function close_connection(){
        if (isset($this->connection)){
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function query($sql){
        $this->last_query=$sql;
        $result = mysqli_query($this->connection,$sql);
        $this->confirm_query($result);
        return $result;
    }

    private function confirm_query($result){
        if (!$result){
            $output="Database query failed ";
            echo mysqli_connect_error() . "<br><br>";
            $output.=" Last SQL Query : ".$this->last_query;
            die($output);
        }
    }

    public function mysqli_prep($value){
        $magic_quotes_active = get_magic_quotes_gpc();
        $new_enough_php = function_exists("mysqli_real_escape_string");
        if ($new_enough_php){
            if ($magic_quotes_active){
                $value = stripslashes($value);
            }
            $this->connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            $value = mysqli_real_escape_string($this->connection,$value);
        }else{
            if (!$magic_quotes_active){
                $value = addcslashes($value);
            }

        }
        return $value;
    }

    public function fetch_array($result_set){
        return mysqli_fetch_assoc($result_set);
    }

    public function num_rows($result_set){
        return mysqli_num_rows($result_set);
    }

    public function insert_id(){
        return mysqli_insert_id($this->connection);
    }

    public function affected_rows(){
        return mysqli_affected_rows($this->connection);
    }

    public function escape_value($value) {
        if ($this->real_escape_string_exists) { // PHP v4.3.0 or higher
            // undo any magic quote effects so mysql_real_escape_string can do the work
            if ($this->magic_quotes_active) {
                $value = stripslashes($value);
            }
            $value = mysqli_real_escape_string($this->connection, $value);
        } else { // before PHP v4.3.0
            // if magic quotes aren't already on then add slashes manually
            if (!$this->magic_quotes_active) {
                $value = addslashes($value);
            }
            // if magic quotes are active, then the slashes already exist
        }
        return $value;
    }

}

$database = new MySQLDatabase();

function send_mail_khabarnameh($Email){
    ini_set("SMTP", "mail.isspc.ir");
    ini_set("sendmail_from", "info@isspc.ir");
    $message = "با تشکر از عضویت شما در خبرنامه همایش نگهداری و امنیت اطلاعات در فضای سایبری";
    $message .="\n";
    $message .="Email : info@ISSPC.ir";
    $message .="\n";
    $message .="Web : ISSPC.ir";
    $subject = "عضویت در خبرنامه";
    $headers = "From: info@isspc.ir\n\n\n\n\r";
    $headers .= "Reply-To: info@isspc.ir\n";
    $headers .="X-Mailer: PHP/" . phpversion() . "\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: text/html; charset=UTF-8";
    mail($Email, $subject, $message, $headers);
}

function send_mail_rezerv($name,$email,$mobile,$time,$studentcode,$university){
    ini_set("SMTP", "mail.isspc.ir");
    ini_set("sendmail_from", "info@isspc.ir");
    $subject = 'رزرو جایگاه در همایش نگهداری و امنیت اطلاعات در فضای سایبری';
    $headers = "From: " . strip_tags("info@ISSPC.ir") . "\r\n";
    $headers .= "Reply-To: ". strip_tags("info@ISSPC.ir") . "\r\n";
    $headers .= "CC: info@ISSPC.ir\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "<!DOCTYPE><html lang=\"fa\"><head><link rel=\"stylesheet\" href=\"http://isspc.ir/email/bootstrap.min.css\"><link rel=\"stylesheet\" href=\"http://isspc.ir/email/email.css\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><meta charset=\"utf-8\"></head>";
    $message .= "<body ><br><br><br><div class=\"col-md-12 col-xs-12 col-xss-12\"><center><h1>رزرو جایگاه</h1></center><br><center><h2>مشخصات رزرو کننده </h2></center><br></div><div class=\"clearfix\"></div><div class=\"col-md-2 col-xs-0 col-xss-0\"></div><div class=\"col-md-8 col-xs-12 col-xss-12\"><center><table class=\"table table-striped\" style=\"color: #000;\"><thead style=\"color: #fff;\">	<tr>";
    $message .= "<td>نام و نام خانوادگی</td><td>شماره دانشجویی</td><td>نام دانشگاه</td><td>ایمیل</td><td>شماره همراه</td>	<td>تاریخ و ساعت</td></tr></thead><tbody><tr><td>".$name."</td><td>".$studentcode."</td><td>".$university."</td><td>".$email."</td><td>".$mobile."</td><td>".$time."</td></tr></tbody></table></center>";
    $message .= "</div><div class=\"col-md-2 col-xs-0 col-xss-0\"></div><div class=\"clearfix\"></div><br><br><center><p style=\"font-size: 20px; font-style: italic; text-shadow: 1px 1px #000;\">این ایمیل به شما در راستای رزرو جایگاه در همایش توسط شما ارسال گردیده است</p></center><center>Email : info@ISSPC.ir</center><center><a href=\"http://ISSPC.ir\" style=\"color: #fff;\">Web : ISSPC.ir</a></center></body></html>";

    mail($email, $subject, $message, $headers);

}
$db = new MySQLDatabase();
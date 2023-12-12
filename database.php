<?php

class database
{
  private $servername = "";
  private $username   = "root";
  private $password   = "";
  private $database   = "product_gallery";
  public  $con;


  // Database Connection
  public function __construct()
  {

    $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
    if (mysqli_connect_error()) {
      trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
    } else {
      return $this->con;
    }
  }


// login function
  public function login($post)
  {

    $email = $this->con->real_escape_string($_POST['email']);
    $password = $this->con->real_escape_string($_POST['password']);


    $query = "SELECT * FROM users WHERE email = '$email'";
    $res = $this->con->query($query);

    if ($res->num_rows > 0) {
      $data = array();
      while ($row = $res->fetch_assoc()) {
        
        if (password_verify($password, $row["password"])) {
        
          header("location:index.php");
        } else {
          echo '<script>alert("wrong user details")</script>';
        }
      }
    } else {
      echo "No found records";
    };

  }

  // Insert User data into user table
  public function insertData($post)
  {
    $email1 = $this->con->real_escape_string($_POST['email']);
    $query = "SELECT * FROM users WHERE email = '$email'";
    $res = $this->con->query($query);

    if ($res->num_rows > 0) {
      $data = array();
      while ($row = $res->fetch_assoc()) {
      
        if ($email1== $row["email"]) {
          echo '<script>alert("Email already taken")</script>';
        } 
      }
    } else {
     
      $name = $this->con->real_escape_string($_POST['name']);
    $email = $this->con->real_escape_string($_POST['email']);
    $phone = $this->con->real_escape_string($_POST['phone']);
    $city = $this->con->real_escape_string($_POST['city']);
    $password = $this->con->real_escape_string($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(name,email,phone,city,password) VALUES('$name','$email','$phone','$city','$password')";
    $sqlQuery = $this->con->query($query);
    if ($sqlQuery == true) {

      if($_POST['register']){
       
        header("Location:login.php?key=insert");
      }else{
        header("Location:users.php?key=insert");
      }
      
    } else {
      echo "Registration failed try again!";
    }
    };
 

    
  }

  // Fetch user records for show listing
  public function allUser()
  {
    $query = "SELECT * FROM users";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    } else {
      echo "No found records";
    }
  }

  // Fetch single data for edit from user table
  public function getUserById($id)
  {
    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row;
    } else {
      echo "Record not found";
    }
  }

  // Update user data into user table
  public function updateRecord($postData)
  {
    $name = $this->con->real_escape_string($_POST['name']);
    $email = $this->con->real_escape_string($_POST['email']);
    $phone = $this->con->real_escape_string($_POST['phone']);
    $password = $this->con->real_escape_string($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $city = $this->con->real_escape_string($_POST['city']);
    $id = $this->con->real_escape_string($_POST['id']);
    if (!empty($id) && !empty($postData)) {
      $query = "UPDATE users SET name = '$name', email = '$email', phone = '$phone',city='$city',password ='$password' WHERE id = '$id'";
      $sql = $this->con->query($query);
      if ($sql == true) {
        header("Location:index.php?key2=update");
      } else {
        echo "Registration updated failed try again!";
      }
    }
  }

  // Delete user data from user table
  public function deleteuserData($id)
  {
    $query = "DELETE FROM users WHERE id = '$id'";
    $sql = $this->con->query($query);
    if ($sql == true) {
      header("Location:index.php?key3=delete");
    } else {
      echo "Record does not delete try again";
    }
  }




}
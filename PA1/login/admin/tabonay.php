<?php
session_start();
//koneksi ke dalam data base 
$koneksi = new mysqli("localhost","root","","umkm");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      form {
        border: 2px solid green;
        width: 400px;
        box-shadow: 20%;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: #04aa6d;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: 2px solid white;
        cursor: pointer;
        width: 100%;
        border-radius: 3px;
      }

      button:hover {
        opacity: 0.8;
        background-color: white;
        color: green;
        transition: 0.6s ease-out;
        border: 2px solid green;
      }

      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }

        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>

  <body>
    <center>
      <h2>Login Form</h2>

      <form action="loginadmin.php" method="post">
        <div class="imgcontainer">
          <img src="../../images/logo.jpg" alt="tabonay" class="avatar" />
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required />

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required />

          <button type="submit" name="submit">Login</button>
          <label> <input type="checkbox" checked="checked" name="remember" /> Remember me </label>
          <br />
          <a href="../login.php">kembali</a>
        </div>
      </form>
    </center>
  </body>
</html>

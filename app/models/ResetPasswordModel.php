<?php


class ResetPasswordModel extends Database
{
    public function isEmailExists($email)
    {
        $sql = "SELECT COUNT(*) as count FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->fetch_assoc()['count'];

        return $count > 0;
    }

 public function UpdateToken($token_hash,$expiry,$email){
    $sql = "UPDATE users SET reset_token_hash = ? , reset_token_expires_at = ? WHERE email = ?";
    $stmt=$this->conn->prepare($sql);
    $stmt->bind_param("sss",$token_hash,$expiry,$email);
    $stmt->execute();
 }
 public function ChangePassword($token_hash){
   $sql= "SELECT * FROM users WHERE reset_token_hash = ?";
   $stmt= $this->conn->prepare($sql);
   $stmt->bind_param("s",$token_hash);
   $stmt->execute();
   $result=$stmt->get_result();
   $user =$result->fetch_assoc();
   if($user === null){
      die("token not found");
   }
   if (strtotime($user["reset_token_expires_at"]) <= time()) {
      die("token has expired");
   }

 }
 public function ResetPassword($password_hash, $email){
      $sql ="UPDATE users SET password =?, reset_token_hash = NULL,reset_token_expires_at = NULL
       WHERE email = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("ss",$password_hash,$email);
      $stmt->execute();
      echo"Password updated successfully";

      if ($stmt) {
         // Nếu thành công, tạo mã JavaScript để hiển thị popup thông báo
         echo '<script>
         alert("Mật khẩu đã được thay đổi thành công!");
         
         // Tạo một div để hiển thị thời gian đếm ngược và form
         var countdownDiv = document.createElement("div");
         countdownDiv.id = "countdown-container";
         countdownDiv.innerHTML = `
             <html>
             <head>
                 <style>
                     body {
                         font-family: Arial, sans-serif;
                         background-color: #f4f4f4;
                         margin: 0;
                         display: flex;
                         align-items: center;
                         justify-content: center;
                         height: 100vh;
                     }
     
                     #countdown-container {
                         text-align: center;
                         background-color: #fff;
                         padding: 20px;
                         border-radius: 8px;
                         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                     }
     
                     #countdown {
                         font-size: 24px;
                         font-weight: bold;
                         margin-bottom: 20px;
                     }
     
                     #redirect-form {
                         display: flex;
                         justify-content: center;
                     }
     
                     button {
                         padding: 10px 20px;
                         font-size: 16px;
                         cursor: pointer;
                         background-color: #4caf50;
                         color: #fff;
                         border: none;
                         border-radius: 4px;
                     }
     
                     button:hover {
                         background-color: #45a049;
                     }
                 </style>
             </head>
             <body>
                 <div id="countdown">3</div>
                 <form id="redirect-form" action="/login/" method="get">
                     <button type="submit">Chuyển hướng ngay</button>
                 </form>
             </body>
             </html>
         `;
         document.body.appendChild(countdownDiv);
     
         var countdownSpan = document.getElementById("countdown");
         var countdownValue = 3;
     
         var countdownInterval = setInterval(function() {
             countdownValue--;
             countdownSpan.textContent = countdownValue;
     
             if (countdownValue <= 0) {
                 clearInterval(countdownInterval);
                 document.getElementById("redirect-form").submit();
             }
         }, 1000); // Cập nhật mỗi giây
     </script>';
     } else {
         // Nếu không thành công, có thể hiển thị thông báo khác hoặc thực hiện xử lý khác
         echo '<script>alert("Đã xảy ra lỗi khi thay đổi mật khẩu.");</script>';
     }
 }






    }






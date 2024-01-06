<?php
class ProfileModel extends Database
{

    public function getOldAvatar()
    {
        // Giả sử $id là ID của người dùng hiện tại
        $user_id = $_SESSION['user_id'];

        // Truy vấn để lấy ảnh đại diện từ cơ sở dữ liệu
        $query = "SELECT avatar FROM users WHERE id = $user_id";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['avatar'];
        }
    }


    public function getProfileByIdAccount()
    {
        $user_id = $_SESSION['user_id'];
        $selectProduct = "SELECT * FROM users WHERE id = '$user_id'";
        return $this->execute($selectProduct);
    }

    public function editProfileAdmin($name, $phone, $address, $avatar)
    {
        $user_id = $_SESSION['user_id'];
        $stmt = $this->conn->prepare("UPDATE users SET name = ?, phone = ?, address = ?, avatar = ? WHERE id = $user_id");
        $stmt->bind_param('siss', $name, $phone, $address, $avatar);
        if ($stmt->execute()) {
            header("Location: /profile/");
        } else {
            header("Location: /profile/edit");
        }
    }
}

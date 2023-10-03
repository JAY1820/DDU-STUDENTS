<?php
class Userdb{
    private $conn;
    function __construct($dbname){
        $this->conn = new mysqli('localhost', 'root', '', $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function get_users($id=null){
        // List all users
        // List user of based on id
        $sql = "SELECT * FROM user";
        if($id){
            $sql .= " WHERE user_id=$id";
        }
        $result = $this->conn->query($sql);
        $users = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }
    function get_posts($id){
        // List of Post created by user
        $sql = "SELECT * FROM userpost WHERE user_id=$id and post_isdeleted=0";
        $result = $this->conn->query($sql);
        $posts = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }
        return $posts;
    }
    function create_post($user_id, $post_content){
        // Create post for particular user
        $sql = "INSERT INTO userpost (user_id, post_content, post_date, post_time, post_last_edited_time, post_edit_count, post_isdeleted) VALUES ($user_id, '$post_content', '".date('Y-m-d')."', '".date('H:i:s')."', '".date('H:i:s')."', 0, 0)";
        $result = $this->conn->query($sql);
        return $result;
    }
    function edit_post($post_id, $post_content){
        // Edit Post for particular user
        $sql = "UPDATE userpost SET post_content='$post_content', post_last_edited_time='".date('H:i:s')."', post_edit_count=post_edit_count+1 WHERE id=$post_id and post_isdeleted=0";
        $this->conn->query($sql);
        return $this->conn->affected_rows;
    }
    function delete_post($post_id){
        // Delete Post for particular user.
        $sql = "UPDATE userpost SET post_isdeleted=1 WHERE id=$post_id";
        $this->conn->query($sql);
        return $this->conn->affected_rows;
    }
    function __destruct(){
        $this->conn->close();
    }
}
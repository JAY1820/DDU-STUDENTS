<?php
include 'database.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['user'])){
        $userdb = new Userdb('user_posts_db');
        if(isset($_GET['id'])){
            $users = $userdb->get_users($_GET['id']);
        }else{
            $users = $userdb->get_users();
        }
        if (count($users) > 0) {
            echo json_encode($users);
            exit;
        } else {
            echo json_encode(['message'=>'No users found']);
            exit;
        }
    }
    
    else if(isset($_GET['posts'])){
        $userdb = new Userdb('user_posts_db');
        if (!isset($_GET['id'])) {
            echo json_encode(['message'=>'User id is required']);
            exit;
        }
        $posts = $userdb->get_posts($_GET['id']);

        if (count($posts) > 0) {
            echo json_encode($posts);
            exit;
        } else {
            echo json_encode(['message'=>'No posts found']);
            exit;
        }
    }
}
else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['post'])){
        $userdb = new Userdb('user_posts_db');
        if (!isset($_POST['userid'])) {
            echo json_encode(['message'=>'User id is required']);
            exit;
        }
        if (!isset($_POST['post_content'])) {
            echo json_encode(['message'=>'Post content is required']);
            exit;
        }
        $result = $userdb->create_post($_POST['userid'], $_POST['post_content']);
        if ($result) {
            echo json_encode(['message'=>'Post created successfully']);
            exit;
        } else {
            echo json_encode(['message'=>'Post creation failed']);
        }
    }    
}
else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    parse_str(file_get_contents("php://input"), $_PUT);
    if(isset($_PUT['post'])){
        $userdb = new Userdb('user_posts_db');
        if (!isset($_PUT['postid'])) {
            echo json_encode(['message'=>'Post id is required']);
            exit;
        }
        if (!isset($_PUT['post_content'])) {
            echo json_encode(['message'=>'Post content is required']);
            exit;
        }
        $result = $userdb->edit_post($_PUT['postid'], $_PUT['post_content']);
        if ($result) {
            echo json_encode(['message'=>'Post updated successfully']);
        } else {
            echo json_encode(['message'=>'Post updation failed']);
        }
    }  
}
else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    parse_str(file_get_contents("php://input"), $_DELETE);
    if(isset($_DELETE['post'])){
        $userdb = new Userdb('user_posts_db');
        if (!isset($_DELETE['postid'])) {
            echo json_encode(['message'=>'Post id is required']);
            exit;
        }
        $result = $userdb->delete_post($_DELETE['postid']);
        if ($result) {
            echo json_encode(['message'=>'Post deleted successfully']);
        } else {
            echo json_encode(['message'=>'Post deletion failed']);
        }
    }  
}
else{
    echo json_encode(['message'=>'Invalid request']);
}
?>



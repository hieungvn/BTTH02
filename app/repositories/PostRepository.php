<?php
include "app/models/Post.php";
class PostRepository{
    //CRUD - posts table
    public function getAllPosts(){
        //Kết nối tới CSDL
        //Lấy ra dữ liệu ở dạng bản ghi và chuyển sang model Post
        $post1 = new Post(1,'Nôi dung post 1', '',1,'28/7/23','');
        $post2 = new Post(1,'Nôi dung post 1', '',1,'28/7/23','');
        $posts = [$post1, $post2];
        return $posts;
    }

}
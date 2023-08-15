<?php
$conn = new PDO("mysql:host=localhost:3306;dbname=fiergs", "fiergs", "3hAE3]X9!Wgy?`PS");

$content = json_decode(file_get_contents('instagram.json'));

$edges = $content->graphql->user->edge_owner_to_timeline_media->edges;

$sql = "DELETE FROM wp_instagram";
$result = $conn->prepare($sql);
$result->execute();
foreach ($edges as $edge)
    {
        // get single post
        $node = $edge->node;
 
        // get URL shortcode of post
        $url = $node->shortcode;
 
        // get caption, if any
        $caption = $node->edge_media_to_caption->edges[0]->node->text;
 
        // get number of likes
        $likes = $node->edge_liked_by->count;
 
        // get total number of comments
        $comments = $node->edge_media_to_comment->count;
 
        // save image in our server if uploaded
        $image_path = "";
        if (!is_null($node->display_url))
        {
            $image_path = "assets/images/instagram-media/" . $url . ".png";
            file_put_contents($image_path, file_get_contents($node->display_url));
        }
 
        // save video in our server if uploaded
        $video_path = "";
        if (!is_null($node->video_url))
        {
            $video_path = "assets/images/instagram-media/" . $url . ".mp4";
            file_put_contents($video_path, file_get_contents($node->video_url));
        }
 
        // insert in database
        $sql = "INSERT INTO wp_instagram(url, image_path, video_path, caption, likes, comments) VALUES (:url, :image_path, :video_path, :caption, :likes, :comments)";
        $result = $conn->prepare($sql);
        $result->execute([
            ":url" => $url,
            ":image_path" => $image_path,
            ":video_path" => $video_path,
            ":caption" => $caption,
            ":likes" => $likes,
            ":comments" => $comments
        ]);
    }
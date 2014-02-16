<?php

/**
 * @author loopByte
 * @copyright 2014
 */

	class Article{
		
		public static function add(){
			if(isset($_POST['add_article'])){
				global $mysqli;
				$title 		= $_POST['title'];
				$content 	= $_POST['content'];
				$post_date 	= date("Y-m-d H:i:s");
				$query = "INSERT INTO article(title, content, post_date)
						VALUES('".$title."', '".$content."', '".$post_date."')";
				$mysqli->query($query);
				header("Location: index.php?page=article&action=manage");
			}
		}
		
		public static function remove(){
			if(isset($_GET['id'])){
				global $mysqli;
				$id = $_GET['id'];
				$query = "DELETE FROM article WHERE id='".$id."'";
				$mysqli->query($query);
				header("Location: index.php?page=article&action=manage");
			}
		}
		
		public static function edit(){
			if(isset($_POST['article_edit'])){
				global $mysqli;
				$id 		= $_GET['id'];
				$title 		= $_POST['title'];
				$content 	= $_POST['content'];
				$post_date 	= date("Y-m-d H:i:s");
				$query = "UPDATE article SET title='".$title."', content='".$content."', post_date='".$post_date."' 
					WHERE id='".$id."'";
				$mysqli->query($query);
				header("Location: index.php?page=article&action=manage");
			}
		}
		
		public static function article_list(){
			global $mysqli;
			
			$query = "SELECT * FROM article";
			$result = $mysqli->query($query);
			while($row = $result->fetch_object()){
				echo '<div class="article">';
					echo '<h1 class="article-title"><a class="article-title" href="?page=article&id='.$row->id.'">' . $row->title . '</a></h1>';
					if(strlen($row->content) > 500){
						$content = substr($row->content, 0, 500);
						$content .= '<a class="continue-reading" href="?page=article&id='.$row->id.'">Continue reading</a>';
					}else{
						$content = $row->content;
					}
					echo '<p class="article-listed-content">' . $content . '</p>';
				echo '</div>';
			}
		}
		
		public static function article_view(){
			if(isset($_GET['page'], $_GET['id'])){
				global $mysqli;
				
				$id = $_GET['id'];
				
				$query = "SELECT * FROM article WHERE id='".$id."'";
				$result = $mysqli->query($query);
				
				$row = $result->fetch_object();
				
				echo '<h1 class="article-view-title">' . $row->title . '</h1>';
				echo '<article class="article-content">' . $row->content . '</article>';
				echo '<em><time class="article-posted-date" datetime="'.$row->post_date.'">Posted on ' . $row->post_date . '</time></em>';
                echo '<br /><br />';
                echo '<span style="color: blue; font-size: 1.5em;" onclick="goBack()">&larr; Back</span>';
			}
		}
		
	}
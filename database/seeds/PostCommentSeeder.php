<?php
/**
 * Created by PhpStorm.
 * User: hikko624
 * Date: 2017/06/25
 * Time: 22:46
 */

#namespace database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\Category;
use App\Model\Comment;
use App\Model\PostToBoard;

class PostCommentSeeder extends Seeder
{
    public function run(){
        $content = 'この文章はダミーです．文字の大きさ，量，字間，行間等を確認するために入れています．この文章はダミーです．文字の大きさ，量，字間，行間等を確認するために入れています．この文章はダミーです．文字の大きさ，量，字間，行間等を確認するために入れています．この文章はダミーです．';
        $commentdummy = 'コメントダミーです．';

        for ($i = 1; $i < 10; $i++){
            $post = new PostToBoard();
            $post->title = "$i 番目の投稿";
            $post->content = $content;
            $post->cat_id = 1;
            $post->save();

            $maxComments = mt_rand(3, 15);

            for($j=0; $j <= $maxComments; $j++) {
                $comment = new Comment();
                $comment->commenter = '名無しさん';
                $comment->comment = $commentdummy;

                $post->comments()->save($comment);
                $post->increment('comment_count');
            }
        }

        $cat1 = new Category;
        $cat1->name = "電化製品";
        $cat1->save();

        $cat2 = new Category;
        $cat2->name = "食品";
        $cat2->save();
    }
}

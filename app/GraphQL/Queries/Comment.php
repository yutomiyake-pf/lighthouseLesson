<?php

namespace App\GraphQL\Queries;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Comment as CommentTable;
class Comment {

    /**
     * totalコメント数を取得
     */
    public function getTotalCount(): int {
        $count = CommentTable::count();

        return $count;
    }


    public function getLikeComments($root, array $args) {
        $comments = CommentTable::where("reply", "like", "%".$args["reply"]."%")->get();

        return $comments;
    }
}
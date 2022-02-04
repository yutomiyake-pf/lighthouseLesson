<?php

namespace App\GraphQL\Queries;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Post as PostTable;
class Post {
    public function getPostCountByUserId($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo):int {
        $postCount = PostTable::where("author_id", $args["authorId"])->count();

        return $postCount;
    }
}
<?php

namespace App\GraphQL\Queries;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\User as UserTable;
class User {
    
    public function getUserById($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo) {
        $user = UserTable::find($args["id"]);

        return $user;
    }
}
<?php

namespace Codemonkey76\FakerAvatar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codemonkey76\FakerAvatar\Skeleton\SkeletonClass
 */
class FakerAvatarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'faker-avatar';
    }
}

<?php

    namespace App\Providers;

use A17\Twill\Models\Enums\UserRole;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use A17\Twill\Models\User;
use Illuminate\Support\Facades\Gate;
use A17\Twill\AuthServiceProvider as TwillAuthServiceProvider;

class AuthServiceProvider extends TwillAuthServiceProvider
{
    const ALL_ROLES = [UserRole::VIEWONLY, UserRole::AUTHOR, UserRole::PUBLISHER, UserRole::ADMIN];
    const ALL_EDITORS = [UserRole::AUTHOR, UserRole::PUBLISHER, UserRole::ADMIN];

    public function boot()
    {
        // `pages` module permissions
        Gate::define('list-pages', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, [UserRole::VIEWONLY, UserRole::PUBLISHER, UserRole::ADMIN]);
            });
        });
        Gate::define('edit-pages', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, [UserRole::PUBLISHER, UserRole::ADMIN]);
            });
        });

        // `posts` module permissions
        Gate::define('list-posts', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_ROLES);
            });
        });
        Gate::define('edit-posts', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_EDITORS);
            });
        });

         // `list` permission is needed to access the Media Library
         Gate::define('list', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_ROLES);
            });
        });

        // `upload` and `edit` permissions are needed to upload to the Media Library
        Gate::define('upload', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_EDITORS);
            });
        });
        Gate::define('edit', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_EDITORS);
            });
        });

        // `pages` module permissions
        Gate::define('list-pages', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, [UserRole::VIEWONLY, UserRole::PUBLISHER, UserRole::ADMIN]);
            });
        });
        Gate::define('edit-pages', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, [UserRole::PUBLISHER, UserRole::ADMIN]);
            });
        });

        // `posts` module permissions
        Gate::define('list-posts', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_ROLES);
            });
        });
        Gate::define('edit-posts', function ($user) {
            return $this->authorize($user, function ($user) {
                return $this->userHasRole($user, self::ALL_EDITORS);
            });
        });
    }
}
<?php

    namespace A17\Twill\Models\Enums;

    use MyCLabs\Enum\Enum;

    class UserRole extends Enum
    {
        const CUSTOM1 = 'Custom role 1';
        const CUSTOM2 = 'Custom role 2';
        const CUSTOM3 = 'Custom role 3';
        const ADMIN = 'Admin';

        public static function values()
        {
            return [
                self::CUSTOM1,
                self::CUSTOM2,
                self::CUSTOM3,
                self::ADMIN,
            ];
        }

        public static function labels()
        {
            return [
                self::CUSTOM1 => 'Custom role 1',
                self::CUSTOM2 => 'Custom role 2',
                self::CUSTOM3 => 'Custom role 3',
                self::ADMIN => 'Admin',
            ];
        }

        // give all permissions to admin
        public static function permissions()
        {
            return [
                self::CUSTOM1 => [
                    'list',
                ],
                self::CUSTOM2 => [
                    'list',
                    'edit',
                ],
                self::CUSTOM3 => [
                    'list',
                    'edit',
                ],
                self::ADMIN => [
                    'list',
                    'edit',
                    'create',
                    'publish',
                    'delete',
                    'feature',
                    'restore',
                    'forceDelete',
                ],
            ];
        }


    }


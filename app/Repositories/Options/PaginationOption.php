<?php

namespace App\Repositories\Options;

use App\Enums\ClipStateEnum;

readonly final class PaginationOption
{
    public function __construct(
        public ?string $gameUuid,
        public ?string $clipUuid,
        public ?string $sort,
        public bool $random,
        public int $perPage,
    ) {}

    /**
     * @param array{
     *    search?: string,
     *    game_uuid?: string,
     *    clip_uuid?: string,
     *    sort?: string,
     *    random?: boolean,
     * } $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            gameUuid: data_get($attributes, 'game_uuid'),
            clipUuid: data_get($attributes, 'clip_uuid'),
            sort: data_get($attributes, 'sort'),
            random: (bool) data_get($attributes, 'random', false),
            perPage: data_get($attributes, 'per_page', 12),
        );
    }
}

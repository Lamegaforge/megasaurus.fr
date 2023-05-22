<?php

namespace App\ValueObjects;

use App\Http\Requests\PaginateClipRequest;

readonly final class PaginateClips
{
    public function __construct(
        public ?string $search,
        public ?string $externalGameId,
        public string $sort,
    ) {}

    public static function fromRequest(PaginateClipRequest $request): self
    {
        return new self(
            search: $request->get('search'),
            externalGameId: $request->get('game'),
            sort: $request->get('sort', 'published_at'),
        );
    }
}

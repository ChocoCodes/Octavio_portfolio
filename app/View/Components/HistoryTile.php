<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HistoryTile extends Component
{
    public array $highlightsList = [];
    public string $header;
    public function __construct(
        public string $title,
        public string $organization,
        public int $startYear,
        public ?int $endYear,
        public string $highlights,
        // Education section only fields
        public bool $isEducation = false,
        public ?string $major = null,
        public ?string $level = null
    ){
        $this->highlightsList = array_map('trim', explode('|', $this->highlights));
        $this->header = $isEducation ? "Activities" : "Roles";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.history-tile');
    }
}

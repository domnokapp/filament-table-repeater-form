<?php

namespace Domnokapp\FilamentTableRepeaterForm\Components\Concerns;

use Closure;

trait HasFooter
{
    protected array | Closure | null $footers = null;

    protected bool | Closure | null $renderFooter = null;

    protected Closure | int $colSpan = 0;

    public function footers(array | Closure $footers): static
    {
        $this->footers = $footers;

        return $this;
    }

    public function renderFooter(bool | Closure $condition = false): static
    {
        $this->renderFooter = $condition;

        return $this;
    }

    public function getFooters(): array
    {
        return $this->evaluate($this->footers) ?? [];
    }

    public function shouldRenderFooter(): bool
    {
        return $this->evaluate($this->renderFooter) ?? true;
    }

    public function colSpan(array | Closure $colSpan): static
    {
        $this->colSpan = $colSpan;

        return $this;
    }

    public function getColSpan(): int
    {
        return $this->evaluate($this->colSpan) ?? 0;
    }
}

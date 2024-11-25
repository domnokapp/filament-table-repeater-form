<?php

namespace Domnokapp\FilamentTableRepeaterForm\Components\Concerns;

use Closure;

trait HasRowIndex
{
    protected Closure | int $rowIndex = 0;

    protected bool | Closure | null $renderRowIndex = null;

    public function rowIndex(array | Closure $rowIndex): static
    {
        $this->rowIndex = $rowIndex;

        return $this;
    }

    public function renderRowIndex(bool | Closure $condition = true): static
    {
        $this->renderRowIndex = $condition;

        return $this;
    }

    public function getRowIndexes(): array
    {
        return $this->evaluate($this->rowIndex) ?? [];
    }

    public function shouldRenderRowIndex(): bool
    {
        return $this->evaluate($this->renderRowIndex) ?? true;
    }
}

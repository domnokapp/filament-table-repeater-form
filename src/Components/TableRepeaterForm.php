<?php

namespace Domnokapp\FilamentTableRepeaterForm\Components;

use Closure;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;

class TableRepeaterForm extends Repeater
{
    use Concerns\CanBeStreamlined;
    use Concerns\HasBreakPoints;
    use Concerns\HasEmptyLabel;
    use Concerns\HasExtraActions;
    use Concerns\HasHeader;

    protected bool | Closure | null $showLabels = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->registerActions([
            fn (TableRepeaterForm $component): array => $component->getExtraActions()
        ]);
    }

    public function getChildComponents(): array
    {
        $components = parent::getChildComponents();

        if ($this->shouldShowLabels()) {
            return $components;
        }

        foreach ($components as $component) {
            if (
                method_exists($component, 'hiddenLabel') &&
                ! $component instanceof Placeholder
            ) {
                $component->hiddenLabel();
            }
        }

        return $components;
    }

    public function showLabels(bool | Closure | null $condition = true): static
    {
        $this->showLabels = $condition;

        return $this;
    }

    public function shouldShowLabels(): bool
    {
        return $this->evaluate($this->showLabels) ?? false;
    }

    public function getView(): string
    {
        return 'table-repeater-form::components.table-repeater-form';
    }
}

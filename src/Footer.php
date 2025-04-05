<?php

namespace Domnokapp\FilamentTableRepeaterForm;

use Closure;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Enums\Alignment;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Str;

class Footer
{
    use EvaluatesClosures;

    final public function __construct(
        public string $name,
        public string | Htmlable | Closure | null $label = null,
        public string | Closure | Alignment | null $align = null,
    ){}

    public static function make(string $name): static
    {
        return app(static::class, ['name' => $name]);
    }

    public function align(string | Closure | Alignment $align): static
    {
        $this->align = $align;

        return $this;
    }

    public function label(string | Htmlable | Closure $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getAlignment(): string | Alignment
    {
        return $this->evaluate($this->align)
            ?? Alignment::Start;
    }

    public function getLabel(): string | Htmlable
    {
        return $this->evaluate($this->label)
            ?? (string) Str::of($this->name)->title();
    }

}

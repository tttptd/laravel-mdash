<?php

namespace Tttptd\Mdash;

use EMT\Typograph;

class Mdash
{

    public function process(string $text, array $options = []):string
    {
        $typograph = new Typograph();
        $typograph->setup(
            array_merge($this->getDefaults(), $options)
        );
        $typograph->set_text($text);

        return $typograph->apply();
    }

    protected function getDefaults():array
    {
        return config('mdash', []);
    }

}

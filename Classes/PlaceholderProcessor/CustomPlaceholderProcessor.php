<?php

declare(strict_types = 1);

namespace Susanne\Cupla\PlaceholderProcessor;


class CustomPlaceholderProcessor implements \TYPO3\CMS\Core\Configuration\Processor\Placeholder\PlaceholderProcessorInterface {

    public function canProcess(string $placeholder, array $referenceArray): bool
    {
        return str_contains($placeholder, '%susisays(');
    }


    public function process(string $value, array $referenceArray): string
    {
        // do some processing
        $result = $this->getValue($value);

        // Throw this exception if the placeholder can't be substituted
        if (!$result) {
            throw new \UnexpectedValueException('Value not found', 1581596096);
        }
        return $result;
    }

    private function getValue(string $value): string
    {
        if ($value === 'hello') {
            return 'moin';
        }
        return $value;
    }
}

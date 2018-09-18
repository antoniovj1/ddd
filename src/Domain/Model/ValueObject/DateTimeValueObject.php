<?php
/**
 * This disaster was designed by
 * @author Juan G. Rodríguez Carrión <jgrodriguezcarrion@gmail.com>
 */
declare(strict_types=1);
namespace Pccomponentes\Ddd\Domain\Model\ValueObject;

class DateTimeValueObject extends \DateTimeImmutable implements ValueObject
{
    final public function jsonSerialize(): string
    {
        return $this->format(\DATE_ATOM);
    }

    final public static function from(string $str): self
    {
        return new static($str, new \DateTimeZone('UTC'));
    }
}

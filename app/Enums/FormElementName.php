<?php 

namespace App\Enums;

enum FormElementName: string
{
	case TEXT = 'text';

	public function getLabel(): string
	{
		return match ($this) {
			FormElementName::TEXT => 'Text',
		};
	}

	public static function toArray(): array
	{
		$array = [];
		foreach (static::cases() as $case) {
			$array[$case->value] = $case->getLabel();
		}
		return $array;
	}
}
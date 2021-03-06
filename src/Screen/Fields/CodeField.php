<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields;

use Orchid\Screen\Field;

/**
 * Class InputField.
 *
 * @method $this name($value = true)
 * @method $this value($value = true)
 * @method $this help($value = true)
 * @method $this popover($value = true)
 * @method $this language($value = true)
 * @method $this lineNumbers($value = true)
 */
class CodeField extends Field
{
    /**
     * @var string
     */
    public $view = 'platform::fields.code';

    /**
     * Default attributes value.
     *
     * @var array
     */
    public $attributes = [
        'class'        => 'form-control',
        'language'     => 'js',
        'lineNumbers'  => true,
        'defaultTheme' => true,
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    public $inlineAttributes = [
        'accept',
        'accesskey',
        'autocomplete',
        'autofocus',
        'checked',
        'disabled',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'language',
        'lineNumbers',
        'list',
        'max',
        'maxlength',
        'min',
        'multiple',
        'name',
        'pattern',
        'placeholder',
        'readonly',
        'required',
        'size',
        'src',
        'step',
        'tabindex',
        'type',
        'value',
    ];

    /**
     * @param null $name
     * @return CodeField
     */
    public static function make($name = null): self
    {
        return (new static)->name($name);
    }

    /**
     * @param $value
     *
     * @return \Orchid\Screen\Field
     */
    public function modifyValue($value)
    {
        $value = parent::modifyValue($value); // TODO: Change the autogenerated stub

        if ($this->get('language') === 'json') {
            $value = json_encode($value);
        }

        return $value;
    }
}

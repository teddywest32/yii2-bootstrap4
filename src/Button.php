<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\bootstrap4;

/**
 * Button renders a bootstrap button.
 *
 * For example,
 *
 * ```php
 * echo Button::widget([
 *     'label' => 'Action',
 *     'options' => ['class' => 'btn-lg'],
 * ]);
 * ```
 * @see http://getbootstrap.com/javascript/#buttons
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 */
class Button extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'button';
    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var bool whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        Html::addCssClass($this->options, ['widget' => 'btn']);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if ($this->registerWidget) {
            $this->registerPlugin('button');
        }

        return Html::tag($this->tagName, $this->encodeLabel ? Html::encode($this->label) : $this->label,
            $this->options);
    }
}

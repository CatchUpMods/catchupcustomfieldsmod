<?php namespace WebEd\Plugins\CustomFields\Hook\Actions\Render;

use WebEd\Base\Core\Models\Contracts\BaseModelContract;
use WebEd\Base\Pages\Http\Controllers\PageController;

class Categories extends AbstractRenderer
{
    /**
     * @param BaseModelContract $item
     */
    /**
     * @param string $type
     * @param BaseModelContract $item
     */
    public function render($type, BaseModelContract $item)
    {
        if (!($type === 'blog.categories.create' || $type === 'blog.categories.edit')) {
            return;
        }

        add_custom_field_rules([
            'blog.category_template' => isset($item->page_template) ? $item->page_template : '',
            'blog.category' => isset($item->id) ? $item->id : '',
            'model_name' => 'blog.category',
        ]);

        parent::render($type, $item); // TODO: Change the autogenerated stub
    }
}

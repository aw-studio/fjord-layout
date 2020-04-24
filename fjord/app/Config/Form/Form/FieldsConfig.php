<?php

namespace FjordApp\Config\Form\Form;

use Fjord\Crud\CrudForm;
use App\Models\Department;
use Fjord\Crud\Config\FormConfig;
use Fjord\Vue\Crud\RelationTable;
use Fjord\Crud\Config\Traits\HasCrudForm;
use Fjord\Crud\Fields\Blocks\Repeatables;
use FjordApp\Controllers\Form\Form\FieldsController;

class FieldsConfig extends FormConfig
{
    use HasCrudForm;

    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = FieldsController::class;

    /**
     * Form name, is used for routing.
     *
     * @var string
     */
    public $formName = 'fields';

    /**
     * Setup create and edit form.
     *
     * @param \Fjord\Crud\CrudForm $form
     * @return void
     */
    public function form(CrudForm $form)
    {
        $form->card(function ($form) {
            $this->mainFields($form);
        });
    }

    public function mainFields($form)
    {
        $form->input('input')
            ->title('Input')
            ->placeholder('Title')
            ->hint('Basic input.')
            ->cols(6);

        $form->input('input_prepend')
            ->title('Input')
            ->type('number')
            ->placeholder('Something')
            ->hint('Number input with prepend and append.')
            ->prepend('€')
            ->append('cm')
            ->cols(6);

        $form->textarea('textarea')
            ->translatable()
            ->title('Textarea')
            ->placeholder('Type something...')
            ->hint('Basic textarea.')
            ->cols(6);

        $form->wysiwyg('wysiwyg')
            ->translatable()
            ->title('WYSIWYG')
            ->placeholder('Type something...')
            ->hint('WYSIWYG editor.')
            ->cols(6);

        $form->boolean('active')
            ->title('Boolean')
            ->hint('Boolean.')
            ->cols(3);

        $form->icon('icon')
            ->title('Icon')
            ->hint('Icon picker.')
            ->cols(3);

        $form->checkboxes('fruits')
            ->title('Checkboxes')
            ->options([
                'orange' => 'Orange',
                'apple' => 'Apple',
                'pineapple' => 'Pineapple',
                'grape' => 'Grape',
            ])
            ->hint('Checkboxes.')
            ->cols(6);

        $form->range('range')
            ->title('Range')
            ->min(1)
            ->max(4)
            ->step(1)
            ->hint('Range.')
            ->cols(6);

        $form->select('select')
            ->title('Select')
            ->options([
                1 => 'News',
                2 => 'Info',
            ])
            ->hint('Select.')
            ->cols(6);

        $form->dt('publish_at')
            ->title('Date')
            ->formatted('l')
            ->hint('Chose a date.')
            ->cols(6);

        $form->image('images') // images is the corresponding media collection.
            ->translatable()
            ->title('Images')
            ->hint('Image Collection.')
            ->maxFiles(5)
            ->crop(true) // Should the image be cropped before upload.
            ->ratio(16 / 9) // Crop ratio.
            ->square();
    }
}

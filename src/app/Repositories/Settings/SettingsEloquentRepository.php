<?php
namespace Dreamcode\Goe\App\Repositories\Settings;

use Dreamcode\Goe\App\Repositories\EloquentRepository;

class SettingsEloquentRepository extends EloquentRepository implements SettingsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \Dreamcode\Goe\App\Repositories\Settings\SettingsModel::class;
    }
}
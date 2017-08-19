<?php
namespace Dreamcode\Goe\App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Dreamcode\Goe\App\Repositories\Settings\SettingsRepositoryInterface;

class Index extends Controller
{
    /**
     * @var SettingsRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $repository;

    public function __construct(
        SettingsRepositoryInterface $repository
    )
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function execute()
    {
        $data = $this->repository->getAll();
        return view('goe::pages.settings')->with('stores', $data);
    }
}

<?php
namespace Dreamcode\Goe\App\Http\Middleware;

use Closure;
use Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface;

class CoreLoading
{
    /**
     * @var StoreRepositoryInterface|\Dreamcode\Goe\App\Repositories\RepositoryInterface
     */
    protected $storeRepository;

    public function __construct(
        StoreRepositoryInterface $storeRepository
    )
    {
        $this->storeRepository = $storeRepository;
    }

    public function handle($request, Closure $next)
    {
        $this->startSessionData($request);

        return $next($request);
    }

    public function startSessionData($request)
    {
        $session_data = $request->session()->get('session_data');
        if(!isset($session_data['current_store'])){
            $session_data['current_store'] = [
                'code' => 'all',
                'name' => 'Tất cả'
            ];
        }
        if(!isset($session_data['stores'])) {
            $stores = $this->storeRepository->all();
            $session_data['stores'] = $stores;
        }

        $request->session()->put('session_data', $session_data);
    }

}
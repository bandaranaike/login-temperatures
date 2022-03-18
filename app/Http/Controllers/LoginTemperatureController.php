<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LoginTemperatureController extends Controller
{

    /**
     * @var LoginTemperatureRepositoryInterface
     */
    private $repository;

    public function __construct(LoginTemperatureRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Response
     */
    public function index(): Response
    {
        $initLoginTemperatures = $this->repository->getSavedLoginTempDataForLoggedUser();
        $userCities = $this->repository->getUserCities();

        return Inertia::render('Dashboard', compact("initLoginTemperatures", "userCities"));
    }

    /**
     * Handling the external request with an order
     * @param Request $request
     * @return mixed
     */
    public function getUpdatedTemperatureList(Request $request)
    {
        return $this->repository->getSavedLoginTempDataForLoggedUser($request->get("order-by"));
    }
}

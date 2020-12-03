<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\JsonResponse;

class PersonController extends Controller
{
    /**
     * Get active people
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        $person = Person::find(1);
        dd($person->age);
        $people = Person::with([
            'academyGroup' => function ($query) {
                $query->where('archive', 1);
            }
        ])->where('active', 1)->get();

        return response()->json($people);
    }
}

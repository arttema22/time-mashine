<?php

namespace App\Http\Controllers;

use App\Models\Affiliation;


class AffiliationController extends Controller
{
    public function index()
    {
        $affiliations = Affiliation::with(['person', 'organization'])->paginate(15);
        return view('affiliations.index', compact('affiliations'));
    }

    public function show(Affiliation $affiliation)
    {
        return view('affiliations.show', compact('affiliation'));
    }

}

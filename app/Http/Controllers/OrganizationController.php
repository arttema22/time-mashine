<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::paginate(15);
        return view('organizations.index', compact('organizations'));
    }

    public function show(Organization $organization)
    {
        $events = $organization->events()->orderBy('occurred_at')->get();
        $members = $organization->people()
            ->withPivot('role', 'started_at', 'ended_at')
            ->orderBy('affiliations.started_at')
            ->get();

        return view('organizations.show', compact('organization', 'events', 'members'));
    }

}

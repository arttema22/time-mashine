<?php

namespace App\Http\Controllers;

use App\Models\Affiliation;
use App\Models\Organization;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Отображение главной страницы (welcome)
     */
    public function index()
    {
        $organizations = Organization::all();
        $affiliations = Affiliation::with(['person', 'organization'])->get();
        $groups = [
            ['id' => 1, 'content' => 'Организации'],
            ['id' => 2, 'content' => 'Участники'],
        ];
        $items = [];

        // Добавляем сами организации как элементы временной шкалы
        foreach ($organizations as $org) {
            // Если организация существует до сих пор, ставим далекую дату
            $endDate = $org->dissolved_date ? $org->dissolved_date : '2099-12-31';

            $items[] = [
                'id' => 'org-' . $org->id,
                'group' => 1, // Группа "Организации"
                'content' => $org->name,
                'start' => $org->founded_date,
                'end' => $endDate,
                'type' => 'range',
                'className' => 'organization',
                'title' => $org->name . ' (' . $org->founded_date . ' — ' . ($org->dissolved_date ? $org->dissolved_date : 'н.в.') . ')',
            ];
        }

        // Добавляем участия людей (Affiliations)
        foreach ($affiliations as $aff) {
            // Если участие текущее (ended_at is null), ставим далекую дату
            $endDate = $aff->ended_at ? $aff->ended_at : '2099-12-31';

            $items[] = [
                'id' => 'aff-' . $aff->id,
                'group' => 2, // Группа "Участники"
                'content' => $aff->person->name . '<br><small>' . ($aff->role ?? 'Участник') . '</small>',
                'start' => $aff->started_at,
                'end' => $endDate,
                'type' => 'range',
                'title' => $aff->person->name . ' в ' . $aff->organization->name . ': ' .
                    $aff->started_at . ' — ' . ($aff->ended_at ? $aff->ended_at : 'н.в.'),
            ];
        }

        return view('welcome', [
            'visGroups' => json_encode($groups),
            'visItems' => json_encode($items)
        ]);
    }
}

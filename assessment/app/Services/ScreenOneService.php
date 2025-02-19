<?php

namespace App\Services;

use Illuminate\Support\Collection;

class ScreenOneService implements ScreenOneServiceInterface
{
    private const array DATA = [
        ['id' => 1, 'title' => 'Task Alpha', 'status' => 'Pending', 'notes' => 'This is a note for Task Alpha'],
        ['id' => 2, 'title' => 'Task Beta', 'status' => 'Completed', 'notes' => 'This is a note for Task Beta'],
        ['id' => 3, 'title' => 'Task Gamma', 'status' => 'In Progress', 'notes' => 'This is a note for Task Gamma'],
        ['id' => 4, 'title' => 'Task Delta', 'status' => 'Pending', 'notes' => 'This is a note for Task Delta'],
        ['id' => 5, 'title' => 'Task Epsilon', 'status' => 'Completed', 'notes' => 'This is a note for Task Epsilon'],
        ['id' => 6, 'title' => 'Task Zeta', 'status' => 'In Progress', 'notes' => 'This is a note for Task Zeta'],
        ['id' => 7, 'title' => 'Task Eta', 'status' => 'Pending', 'notes' => 'This is a note for Task Eta'],
        ['id' => 8, 'title' => 'Task Theta', 'status' => 'Completed', 'notes' => 'This is a note for Task Theta'],
        ['id' => 9, 'title' => 'Task Iota', 'status' => 'In Progress', 'notes' => 'This is a note for Task Iota'],
        ['id' => 10, 'title' => 'Task Kappa', 'status' => 'Pending', 'notes' => 'This is a note for Task Kappa'],
        ['id' => 11, 'title' => 'Task Lambda', 'status' => 'Completed', 'notes' => 'This is a note for Task Lambda'],
        ['id' => 12, 'title' => 'Task Mu', 'status' => 'In Progress', 'notes' => 'This is a note for Task Mu'],
        ['id' => 13, 'title' => 'Task Nu', 'status' => 'Pending', 'notes' => 'This is a note for Task Nu'],
        ['id' => 14, 'title' => 'Task Xi', 'status' => 'Completed', 'notes' => 'This is a note for Task Xi'],
        ['id' => 15, 'title' => 'Task Omicron', 'status' => 'In Progress', 'notes' => 'This is a note for Task Omicron'],
        ['id' => 16, 'title' => 'Task Pi', 'status' => 'Pending', 'notes' => 'This is a note for Task Pi'],
        ['id' => 17, 'title' => 'Task Rho', 'status' => 'Completed', 'notes' => 'This is a note for Task Rho'],
        ['id' => 18, 'title' => 'Task Sigma', 'status' => 'In Progress', 'notes' => 'This is a note for Task Sigma'],
        ['id' => 19, 'title' => 'Task Tau', 'status' => 'Pending', 'notes' => 'This is a note for Task Tau'],
        ['id' => 20, 'title' => 'Task Upsilon', 'status' => 'Completed', 'notes' => 'This is a note for Task Upsilon'],
    ];

    public function getData(): Collection
    {
       return collect(self::DATA);
    }
}

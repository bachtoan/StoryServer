<?php

namespace App\Repositories\Page;
use Illuminate\Http\Request;


interface PageRepositoryInterface
{
    public function getAllPage();

    public function getStoryPage(Request $request);

    public function addPage(Request $request);

    public function updatePage(Request $request);

    public function deletePage(Request $request);
}

<?php

namespace App\Repositories\Content;
use Illuminate\Http\Request;


interface ContentRepositoryInterface
{
    public function getContents();

    public function addContent(Request $request);

    public function updateContent(Request $request);
    
    public function deleteContent(Request $request);
}

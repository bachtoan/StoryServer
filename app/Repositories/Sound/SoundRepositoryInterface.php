<?php

namespace App\Repositories\Sound;
use Illuminate\Http\Request;


interface SoundRepositoryInterface
{
    public function getSounds();
    public function addSound(Request $request);
    public function updateSound(Request $request);
    public function deleteSound(Request $request);
}

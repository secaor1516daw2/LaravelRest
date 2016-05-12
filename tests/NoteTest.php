<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NoteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        //Having
        Note::create(['note'=>'Primera nota']);
        Note::create(['note'=>'Segunda nota']);

        //When
        $this->visit('notes')
            //Then
             ->see('Primera nota')
             ->see('Segunda nota');
    }
}

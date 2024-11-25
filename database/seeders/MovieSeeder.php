<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'synopsis' => 'A mind-bending thriller about dreams within dreams.',
                'year' => 2010,
                'cover' => 'inception.jpg',
            ],
            [
                'title' => 'The Matrix',
                'synopsis' => 'A hacker discovers the nature of reality.',
                'year' => 1999,
                'cover' => 'matrix.jpg',
            ],
            [
                'title' => 'Interstellar',
                'synopsis' => 'A journey through space and time to save humanity.',
                'year' => 2014,
                'cover' => 'interstellar.jpg',
            ],
            [
                'title' => 'The Shawshank Redemption',
                'synopsis' => 'A banker convicted of uxoricide forms a friendship over a quarter century with a hardened convict, while maintaining his innocence and trying to remain hopeful through simple compassion.',
                'year' => 1994,
                'cover' => 'shawshankRedemption.jpg',
            ],
            [
                'title' => 'Pulp Fiction',
                'synopsis' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'year' => 1994,
                'cover' => 'PulpFiction.jpg',
            ],
            [
                'title' => 'The Good, the Bad and the Ugly',
                'synopsis' => 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.',
                'year' => 1966,
                'cover' => 'TheGoodBadUgly.jpg',
            ],
            [
                'title' => 'Gladiator',
                'synopsis' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.',
                'year' => 2000,
                'cover' => 'gladiator.jpg',
            ],
            [
                'title' => 'Whiplash',
                'synopsis' => 'A promising young drummer enrolls at a cut-throat music conservatory where his dreams of greatness are mentored by an instructor who will stop at nothing to realize a student\'s potential.',
                'year' => 2014,
                'cover' => 'whiplash.jpg',
            ],
            [
                'title' => 'Léon: The Professional',
                'synopsis' => '12-year-old Mathilda is reluctantly taken in by Léon, a professional assassin, after her family is murdered. An unusual relationship forms as she becomes his protégée and learns the assassin\'s trade.',
                'year' => 1994,
                'cover' => 'TheProffesional.jpg',
            ],
            [
                'title' => 'American History X',
                'synopsis' => 'Living a life marked by violence, neo-Nazi Derek finally goes to prison after killing two black youths. Upon his release, Derek vows to change; he hopes to prevent his brother, Danny, who idolizes Derek, from following in his footsteps.',
                'year' => 2014,
                'cover' => 'AmericanHistory.jpg',
            ]
        ]);
    }
}
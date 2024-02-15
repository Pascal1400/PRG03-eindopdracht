<?php
/**
 * @return array
 */
function getMovies()
{
    return [
        [
            "id" => 1,
            "name" => "Deadpool & Wolverine",
            "release date" => "26/Jul/2024",
        ],
        [
            "id" => 2,
            "name" => "Dune: Part Two",
            "release date" => "29/Feb/2024",
        ],
        [
            "id" => 3,
            "name" => "Kung Fu Panda 4",
            "release date" => "20/Maa/2024",
        ],
        [
            "id" => 4,
            "name" => "Kingdom of the Planet of the Apes",
            "release date" => "8/Maa/2024",
        ],
        [
            "id" => 5,
            "name" => "A Quiet Place: Day One",
            "release date" => "27/Jun/2024",
        ],
        [
            "id" => 6,
            "name" => "Gladiator 2",
            "release date" => "22/Nov/2024",
        ],
        [
            "id" => 7,
            "name" => "The Marsh King's Daughter",
            "release date" => "25/Apr/2024",
        ],
        [
            "id" => 8,
            "name" => "Inside Out 2",
            "release date" => "12/Jun/2024",
        ],
        [
            "id" => 9,
            "name" => "Kraven the Hunter",
            "release date" => "29/Aug/2024",
        ],
        [
            "id" => 10,
            "name" => "Godzilla x Kong: The New Empire",
            "release date" => "11/Apr/2024",
        ]


    ];
}

/**
 * @param $id
 * @return mixed
 */
function getMovieDetails($id)
{
    $tags = [
        1 => [
            "description" => "The irresponsible hero Deadpool will change the history of the MCU with Wolverine!?",
            "genres" => ['Action', 'Comedy', 'Sci-Fi']
        ],
        2 => [
            "description" => "Paul Atreides unites with Chani and the Fremen while seeking revenge against the 
            conspirators who destroyed his family.",
            "genres" => ['Action', 'Adventure', 'Drama']
        ],
        3 => [
            "description" => "After Po is tapped to become the Spiritual Leader of the Valley of Peace, he needs to 
            find and train a new Dragon Warrior, while a wicked sorceress plans to re-summon all the master villains 
            whom Po has vanquished to the spirit realm.",
            "genres" => ['Animation', 'Action', 'Adventure']
        ],
        4 => [
            "description" => "Many years after the reign of Caesar, a young ape goes on a journey that will lead him 
            to question everything he's been taught about the past and make choices that will define a future for apes 
            and humans alike.",
            "genres" => ['Action', 'Sci-Fi']
        ],
        5 => [
            "description" => "Experience the day the world went quiet.",
            "genres" => ['Drama', 'Horror', 'Sci-Fi']
        ],
        6 => [
            "description" => "Follows Lucius, the son of Maximus' love Lucilla, after Maximus' death.",
            "genres" => ['Action', 'Adventure', 'Drama']
        ],
        7 => [
            "description" => "A woman seeks revenge against the man who kidnapped her mother.",
            "genres" => ['Crime', 'Drama', 'Mystery']
        ],
        8 => [
            "description" => "Follow Riley, in her teenage years, encountering new emotions..",
            "genres" => ['Animation', 'Adventure', 'Comedy']
        ],
        9 => [
            "description" => "Russian immigrant Sergei Kravinoff is on a mission to prove that he is the greatest hunter in the world..",
            "genres" => ['Action', 'Adventure', 'Sci-Fi']
        ],
        10 => [
            "description" => "Two ancient titans, Godzilla and Kong, clash in an epic battle as humans unravel their 
            intertwined origins and connection to Skull Island's mysteries.",
            "genres" => ['Action', 'Adventure', 'Sci-Fi']
        ],
    ];

    return $tags[$id];
}

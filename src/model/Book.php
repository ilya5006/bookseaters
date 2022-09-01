<?php

class Book {
    private int $id;
    private string $title;
    private string $about;
    private string $rating;
    private string $cover;
    private string $numberOfView;

    private array $authors = [];
    private array $pictures = [];
    private array $genres = [];
}
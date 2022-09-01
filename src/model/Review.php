<?php

class Review {
    private int $id;
    private User $user;
    private Book $book;
    private float $rating;
    private string $text;
    private int $likes;
    private int $dislikes;
}
<?php

class Topic {
    private int $id;
    private Book $book;
    private User $user;
    private string $title;
    private string $text;
    private DateTime $dateOfCreation;
    private int $likes;
    private int $dislikes;
}
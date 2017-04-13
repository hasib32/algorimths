<?php

/**
 * Determine if a string is palindrome using recursive function
 *
 * Algorithm is:
 *
 * if the string is made of no letters or just one letter, then it is a palindrome.
 * Otherwise, compare the first and last letters of the string.
 *
 * If the first and last letters differ, then the string is not a palindrome.
 *
 * Otherwise, the first and last letters are the same.
 * Strip them from the string, and determine whether the string that remains is a palindrome.
 * Take the answer for this smaller string and use it as the answer for the original string
 *
 * https://www.khanacademy.org/computing/computer-science/algorithms/recursive-algorithms/a/using-recursion-to-determine-whether-a-word-is-a-palindrome
 * @return bool
 */

function isPalindrome($string)
{

    if (strlen($string) === 0 || strlen($string) === 1) {
        return true;
    }

    if ($string[0] !== $string[strlen($string) - 1]) {
        return false;
    } else {
        // strip first and last letter from the string
        $string = substr($string, 1, - 1);

        return isPalindrome($string);
    }
}

$answer = isPalindrome('xyzyzyx');

var_dump($answer);